<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Order;
use App\Models\Order_details;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function viewUser()
    {
        $products = Product::all(); 
        return view('user.user', compact('products'));
    }

    public function editForm($id)
    {
        $user = User::findOrFail($id);
        return view('user.editForm', ['user' => $user]);
    }
    

    public function updateUser(Request $request, $id)
    {        
        $user = User::find($id);
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|min:6',
            'phone_number' => 'required|min:10|max:12',
        ]);

        $user->fullname = $validatedData['fullname'];
        $user->email = $validatedData['email'];
        $user->phone_number = $validatedData['phone_number'];

        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }
        $user->save();
        return redirect()->route('user')->with('success', 'Thông tin người dùng đã được cập nhật thành công');
    }

    public function logoutUser(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user');
        return redirect()->route('index');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404); // Xử lý khi sản phẩm không tồn tại
        }
    
        // Thêm sản phẩm vào giỏ hàng (trong trường hợp này, giỏ hàng được lưu trữ trong session)
        $cart = session()->get('cart');
    
        // Nếu giỏ hàng rỗng, tạo giỏ hàng mới và thêm sản phẩm vào
        if (!$cart) {
            $cart = [
                $id => [
                    
                    'quantity' => 1,
                    'title' => $product->title,
                    'price' => $product->price,
                    'description' => $product->description, // Thêm thông tin ảnh
                    'discount' => $product->discount, // Thêm thông tin giảm giá
                    // Thêm các thông tin khác của sản phẩm mà bạn muốn lưu
                ]
            ];
    
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
        }
    
        // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng sản phẩm
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
        }
    
        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm sản phẩm mới vào
        $cart[$id] = [
           
            'quantity' => 1,
            'title' => $product->title,
            'price' => $product->price,
            'description' => $product->description, // Thêm thông tin ảnh
            'discount' => $product->discount, // Thêm thông tin giảm giá
            // Thêm các thông tin khác của sản phẩm mà bạn muốn lưu
        ];
    
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }
    

    public function showCart()
    {
        return view('cart');
    }

    // public function placeOrder(Request $request)
    // {
    //     $cart = session('cart');

    //     if (!$cart) {
    //         return redirect()->route('cart')->with('error', 'Giỏ hàng trống.');
    //     }
    //     $order = new Order();
    //     $order->user_id = auth()->id();
    //     $order->total_amount = 0;

    //     $order->save();

    //     $totalAmount = 0;

    //     foreach ($cart as $productId => $product) {
    //         $orderDetail = new OrderDetail();
    //         // $orderDetail->order_id = $order->id;
    //         // $orderDetail->product_id = $productId;
    //         $orderDetail->num = $product['quantity'];
    //         $orderDetail->price = $product['price'];
    //         $orderDetail->total_money = $product['price'] * $product['quantity'];
    //         $orderDetail->save();

    //         $totalAmount += $orderDetail->total_money;
    //     }

    //     $order->total_amount = $totalAmount;
    //     $order->save();

    //     session()->forget('cart');

    //     return redirect()->route('orderSuccess')->with('success', 'Đặt hàng thành công!');
    // }

    // public function showCheckout()
    // {
    //     // Hiển thị view cho người dùng nhập thông tin thanh toán
    //     return view('checkout');
    // }

    public function placeOrder(Request $request)
    {
        // Xử lý đặt hàng
        // Lưu thông tin đơn hàng vào database
        $order = new Order();
        // Lưu các trường thông tin đơn hàng từ request vào đối tượng Order
        $order->fullname = $request->input('customer_name');
        $order->address = $request->input('customer_address');
        // Lưu các thông tin khác của đơn hàng (nếu có)

        $order->save();

        return redirect()->route('order-success')->with('success', 'Đơn hàng đã được đặt thành công!');
    }

    public function orderSuccess()
    {
        // Hiển thị view thông báo đặt hàng thành công
        return view('order-success');
    }
    public function search(Request $request)
    {
        $q = $request->get('q');
    
        // Lấy danh sách sản phẩm phù hợp với từ khóa tìm kiếm
        $products = Product::where('title', 'like', '%' . $q . '%')->get();
    
        // Trả về danh sách sản phẩm
        return view('search', ['products' => $products]);
    }
    
    private $apiContext;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                env('PAYPAL_CLIENT_ID'),
                env('PAYPAL_SECRET')
            )
        );

        $this->apiContext->setConfig([
            'mode' => env('PAYPAL_MODE', 'sandbox')
        ]);
    }

    public function showCheckout()
    {
        // Hiển thị view cho người dùng nhập thông tin thanh toán
        return view('paypal-checkout');
    }

    public function makePayment(Request $request)
    {
        // Xử lý thanh toán PayPal
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setCurrency('USD') // Đơn vị tiền tệ
               ->setTotal(10); // Tổng số tiền cần thanh toán

        $transaction = new Transaction();
        $transaction->setAmount($amount);

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypal-payment-success'))
                     ->setCancelUrl(route('paypal-checkout'));

        $payment = new Payment();
        $payment->setIntent('sale')
                ->setPayer($payer)
                ->setTransactions([$transaction])
                ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (\Exception $e) {
            return redirect()->route('paypal-checkout')->with('error', 'Có lỗi xảy ra khi tạo đơn thanh toán.');
        }
    }

    public function paymentSuccess(Request $request)
    {
        return view('paypal-success');
    }

    public function showRedWines()
{
    $redWines = Product::where('category_id', 1)->get();
    return view('red_wines', compact('redWines'));
}
}
