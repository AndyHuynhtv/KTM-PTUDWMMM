<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function viewAdmin()
    {
        $products = Product::all();
        return view('admin.admin', ['products' => $products]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:255',
        ]);
        $category = new Category();
        $category->name = $validatedData['category_name'];
        $category->save();
        return redirect()->back()->with('success', 'Đã thêm loại thành công');
    }

    public function addProduct(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:category,id',
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',   
            'description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = new Product();
        $product->category_id = $validatedData['category_id'];
        $product->title = $validatedData['title'];
        $product->price = $validatedData['price'];
        $product->discount = $validatedData['discount'];
        $product->description = $validatedData['description'];
    
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('template/admin/dist/img'), $imageName);
    
            $product->thumbnail = 'template/admin/dist/img/' . $imageName;
        }
    
        $product->save();
    
        if ($request->hasFile('thumbnail')) {
            $gallery = new Gallery();
            $gallery->name = $imageName;
            $gallery->save();
        }
    
        return redirect()->back()->with('success', 'Đã thêm sản phẩm thành công');
    }


    public function showFormToAddCategory()
    {
        return view('admin.adminFunction.addingCategory');
    }

    public function showFormToAddProduct()
    {
        $categories = Category::all(); 
        return view('admin.adminFunction.addingProduct', compact('categories'));
    }

    public function infoProduct()
    {
        $products = Product::all(); 
        return view('admin.adminFunction.infoProduct', ['products' => $products]);
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product->title = $validatedData['title'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->discount = $validatedData['discount'];

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('template/admin/dist/img'), $imageName);
    
            $product->thumbnail = 'template/admin/dist/img/' . $imageName;
        }
    
        $product->save();
    
        if ($request->hasFile('thumbnail')) {
            $gallery = new Gallery();
            $gallery->name = $imageName;
            $gallery->save();
        }


        $product->save();
        return redirect()->route('admin')->with('success', 'Thông tin sản phẩm đã được cập nhật thành công');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }
        return view('admin.adminFunction.editProduct')->with('product', $product);
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }
        $product->delete();
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa thành công');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.adminFunction.edit', compact('user'));
    }

    // Phương thức cập nhật thông tin admin
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // Validate dữ liệu đầu vào
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|email|unique:users,email,',
            'phone_number' => 'required|min:10|max:12',
            'password' => 'nullable|min:6', // Mật khẩu có thể để trống
        ]);

        // Cập nhật thông tin user từ dữ liệu đã được validate
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');

        // Kiểm tra xem người dùng có nhập mật khẩu mới hay không
        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();
        return redirect()->route('admin')->with('success', 'Thông tin admin đã được cập nhật thành công');
    }
    
}
