<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//resources/css/app.css">
    <title>Create Procuct</title>
</head>
<body>
    <h1>Create product</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('product.store')}}" method="POST" class="form">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="name" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <label for="qty">Quantity</label>
            <input type="number" name="qty" id="qty" >
        </div>
        <div>
            <label for="desc">Description</label>
            <input type="text" name="desc" id="desc" placeholder="Description">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
        </div>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>