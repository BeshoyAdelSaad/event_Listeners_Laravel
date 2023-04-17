<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5 p-4 w-75">
        <h1>All Products</h1>
        <form action="{{route('product.update', $product->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="product1">Product 1</label>
            <input type="text" class="form-control shadow" name="product1" value="{{$product->product1}}">
            <label for="price_product1">Product Price 1</label>
            <input type="text" class="form-control shadow" name="price_product1" value="{{$product->price_product1}}">
            
            <label for="product2">Product 2</label>
            <input type="text" class="form-control shadow" name="product2" value="{{$product->product2}}">
            <label for="price_product2">Product Price 2</label>
            <input type="text" class="form-control shadow" name="price_product2" value="{{$product->price_product2}}">
            
            <label for="product3">Product 3</label>
            <input type="text" class="form-control shadow" name="product3" value="{{$product->product3}}">
            <label for="price_product3">Product Price 3</label>
            <input type="text" class="form-control shadow" name="price_product3" value="{{$product->price_product3}}">
            
            <label for="product4">Product 4</label>
            <input type="text" class="form-control shadow" name="product4" value="{{$product->product4}}">
            <label for="price_product4">Product Price 4</label>
            <input type="text" class="form-control shadow" name="price_product4" value="{{$product->price_product4}}">
            
            <input class="btn btn-primary shadow" value="Submit" type="submit">
                
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>