<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa sản phẩm</title>
    <link rel="stylesheet" href="/template/admin/dist/css/edit.css">
</head>
<body>
    <div class="container">
        <h2>Chỉnh sửa sản phẩm</h2>
        <form action="{{ route('updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Tên sản phẩm</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}">
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="discount">Giá giảm</label>
                <input type="number" class="form-control" id="discount" name="discount" value="{{ $product->discount }}">
            </div>
            <div class="form-group">
                <label for="thumbnail">Hình ảnh</label>
                <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>
</body>
</html>
