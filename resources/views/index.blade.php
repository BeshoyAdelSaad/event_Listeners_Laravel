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
<div style="padding: calc(50vb - 50px); height: 50px; text-align: center">
    <h1>News letter</h1>
    <form action="/subscribe" method="POST">
        @csrf
        <input type="text" 
        class="form-control shadow w-25 m-auto d-inline" 
        placeholder="Enter email" name="email">
        <button class="btn btn-primary shadow " 
        type="submit">
            Submit
        </button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>