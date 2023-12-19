<!-- resources/views/products/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
</head>
<body>

<h1>Danh sách sản phẩm</h1>

@if(count($products) > 0)
    <div class="products-container">
        @foreach($products as $product)
            <div class="product">
                <h2>{{ $product->title }}</h2>
                <p>Giá: {{ $product->price }}</p>
                <p>Mô tả: {{ $product->description }}</p>
                <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->title }}" style="max-width: 200px;">
            </div>
        @endforeach
    </div>
@else
    <p>Không có sản phẩm nào.</p>
@endif

</body>
</html>
