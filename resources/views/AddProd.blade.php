<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/cssbootstrap/css/bootstrap.css')}}">

<style>
    .wrapper{
        width: 80%;
        display: flex;
        justify-content: center;
    }
    </style>
</head>


<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">ReadAndWArite</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
      <div class="wrapper">

      <form>
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

        <div class="form-group">
          <label for="inputAddress">Product Name</label>
          <input type="text" class="form-control" id="inputProduct" placeholder="Input your product">
        </div>

        <div class="form-group">
            <label for="inputAddress">Description</label>
            <input type="text" class="form-control" id="inputDesc" placeholder="Write the description">
          </div>

          <div class="form-group">
            <label for="inputAddress">Description</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Write here">
          </div>

          <div class="form-group" style="width: 500px">
            <label for="inputTypes">Types</label>
            <select id="inputTypes" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>

        <div class="form-group">
          <label for="inputQuantity">Quantity</label>
          <input type="text" class="form-control" id="inputQuantity" placeholder="Input the quantity">
        </div>

        <div class="form-group">
            <label for="inputPrice">Price</label>
            <input type="text" class="form-control" id="inputPrice" placeholder="Input the price">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
</body>
</html>