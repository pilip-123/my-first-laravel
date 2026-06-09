<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        background-color: blueviolet;
        width: 500px;
        height: 40vh;
        border-radius: 14px;
        margin: auto;
        margin-top: 100px;
        gap: 20px;

    }

    .container h2 {
        margin: auto;
    }

    .container li {
        text-decoration: none;
        margin: auto;
        font: 32px;
        font-weight: bold;
    }

    li a {
        text-decoration: none;
        color: white;
    }
</style>

<body>
    <ul class="container">
        <h2>Welcome to our home pages list</h2>
        <li><a href="{{route('users.index')}}">User</a></li>
        <li><a href="{{route('products.index')}}">Product</a></li>
        <li><a href="{{route('categories.index')}}">Categories</a></li>
        <li><a href="{{route('customers.index')}}">Customers</a></li>
        <li><a href="{{route('movies.index')}}">Movies</a></li>
    </ul>
</body>

</html>