<!DOCTYPE html>
<html>
<head>
    <title>Thanh toán PayPal</title>
    <!-- Thêm các tài nguyên cần thiết, chẳng hạn như thư viện JavaScript của PayPal -->
</head>
<body>

<!-- Nút thanh toán PayPal -->
<div id="paypal-button-container">
    <button>Thanh toán</button>
</div>

<!-- Thêm các tài nguyên cần thiết, chẳng hạn như thư viện JavaScript của PayPal -->
<script src="https://www.paypal.com/sdk/js?client-id=YARo_r6NRvKlIUS4LdNHgCkYIdbSL4Ca1REkMshjkl_OBMt4otQOVeGa7BE8frgE9G1a5JRTxdv8xdDXr"></script>

<script>
    // Khai báo và cấu hình nút thanh toán PayPal
    paypal.Buttons({
        createOrder: function(data, actions) {
            // Xử lý tạo đơn hàng khi người dùng nhấp vào nút thanh toán
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '10.00' // Số tiền cần thanh toán
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // Xử lý khi người dùng đã xác nhận thanh toán
            return actions.order.capture().then(function(details) {
                // Hiển thị thông tin về đơn hàng đã thanh toán thành công
                alert('Thanh toán thành công!');
            });
        },
        onError: function(err) {
            // Xử lý khi có lỗi xảy ra trong quá trình thanh toán
            console.error('Đã xảy ra lỗi:', err);
        }
    }).render('#paypal-button-container');
</script>

</body>
</html>
