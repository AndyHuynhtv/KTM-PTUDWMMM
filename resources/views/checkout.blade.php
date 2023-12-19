<!-- resources/views/checkout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <!-- Thêm các thẻ meta, css, js cần thiết -->
</head>
<body>
    <div class="container">
        <h1>Thông tin thanh toán</h1>

        <form method="POST" action="{{ route('place-order') }}">
            @csrf
            <div class="form-group">
                <label for="customer_name">Họ và tên</label>
                <input type="text" id="customer_name" name="customer_name" required>
            </div>

            <div class="form-group">
                <label for="customer_address">Địa chỉ giao hàng</label>
                <input type="text" id="customer_address" name="customer_address" required>
            </div>

            <!-- Các trường thông tin thanh toán khác (nếu có) -->

            <button type="submit">Đặt hàng</button>
        </form>
    </div>
</body>
</html>
