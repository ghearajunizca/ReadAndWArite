<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadAndWArite</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/cssbootstrap/css/bootstrap.css')}}">

    <style>
        body{
            background-color: white;
        }

        .navbar{
            background-color: white;
        }

        .title{
            color: rebeccapurple;
            text-align: justify;
            margin-top: 150px;
            margin-left: 600px;
            font-family: 'Cantata One', serif;
        }

        .search-container input[type=text] {
            width: 500px;
            margin-right: 550px;
            padding: 10px;
            margin-top: 5px;
            font-size: 17px;
            background-origin: padding-box;
            background-color: lightgrey;
            
        }

        .search-container {
            width: 50px;
            length: 100px;
            padding: 10px 10px;
            margin-right: auto;
            margin-left: 450px;
        }

        .search-container button {
            margin-left: 500px;
            padding: 10px 20px;
            margin-top: 8px;
            margin-right: 16px;
            background: wheat;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .alat{
            margin: 0px auto;
            max-width: 500px;
            display: inline-block;
            padding-bottom: 20px;
        }

        .objek{
            margin-top: 100px;
            margin-left: 120px;
            width: 200px;
            height: 200px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:pink; font-family: 'Cantata One', serif;">
        <a class="navbar-brand" href="#">ReadAndWArite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="/login">Login <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/regis">Register<span class="sr-only">(current)</span></a>
          </div>
        </div>
      </nav>
        <h1 class="title">ReadAndWArite</h1>
        <div class="search-container">
            <form action="/homeview" style="width: fit-content;">
              <input type="text" placeholder="Search for stationary" name="search">
            </form>
        </div>
        @foreach ($products as $product)
            <a href="#">
                <div class="alat">
                    <img class="objek" src="{{ asset('assets/'.$product->Image) }}" alt="{{$product->Image}}">
                </div>
            </a>
        @endforeach
    </div>
    
    
</body>
</html>