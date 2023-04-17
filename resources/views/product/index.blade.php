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
    <div class="container my-5 p-4">
        <h1>All Products</h1>
        <h2><a class="btn btn-primary" href="{{route('product.create')}}"> Create New Order</a></h2>
<table class="table table-striped">
    <thead>
        <td>Product ID</td>
        <td>Product 1</td>
        <td>Product Price 1</td>
        <td>Product 2</td>
        <td>Product Price 2</td>
        <td>Product 3</td>
        <td>Product Price 3</td>
        <td>Product 4</td>
        <td>Product Price 4</td>
        <td>Action</td>
    </thead>
    <tbody>
        @foreach ($data as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->product1}}</td>
                <td>{{$product->price_product1}}</td>
                <td>{{$product->product2}}</td>
                <td>{{$product->price_product2}}</td>
                <td>{{$product->product3}}</td>
                <td>{{$product->price_product3}}</td>
                <td>{{$product->product4}}</td>
                <td>{{$product->price_product4}}</td>
                <td>
                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary d-inline">Edit</a>
                    <form class="d-inline" method="POST" action="{{route('product.destroy', $product->id)}}">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger " type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>