<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadAndWArite</title>

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
        }

        .masuk{
            padding: 10px 5px;
            font-size: 10px;
            border: none;
            margin-left: 1300px;
        }

        .register{
            padding: 10px 5px;
            font-size: 10px;
            border: none;
        }

        .search-container input[type=text] {
            margin-right: 500px;
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
            margin-right: 100px;
            margin-left: 630px;
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
    <nav class="navbar navbar-light bg-light"></nav>
    <div class="navbar">
        <span class="navbar-brand mb-0 h1"></span>
        <button class="masuk">Login</button>
        <button class="register">Register</button>
        <h1 class="title">ReadAndWArite</h1>
        <div class="search-container">
            <form action="/homeview">
              <input type="text" placeholder="Search for stationary" name="search">
            </form>
        </div>
        <a href="#">
            <div class="alat">
                <img class="objek" src="{!! asset('assets/notebook.png') !!}" alt="notebook.png">
            </div>
        </a>
        <div class="alat">
            <img class="objek" src="{!! asset('assets/book.png') !!}" alt="book.png">
        </div>
        <div class="alat">
            <img class="objek" src="{!! asset('assets/pen.jpg') !!}" alt="pen.jpg">
        </div>
        <div class="alat">
            <img class="objek" src="{!! asset('assets/rulerr.png') !!}" alt="rulerr.png">
        </div>
    </div>
    </div>
    
    
</body>
</html>