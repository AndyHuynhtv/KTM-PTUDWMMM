<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>List of Products</h1>
    <div id="product-container">
        @if(!empty($products))
            @foreach($products as $product)
                <div class="product">
                    <h3>{{ $product['title'] }}</h3>
                    <p>{{ $product['description'] }}</p>
                    <p>Price: {{ $product['price'] }}</p>
                </div>
            @endforeach
        @else
            <p>No products found</p>
        @endif
    </div>
</body>
</html>
