<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Create Product</title>
</head>
<body>
  <form class="container-fluid mt-5 p-4 shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 600px;border-radius:20px;" action="/product/store" method="POST">
    @csrf
    <h2 align="center">Create Product</h2>
    <div class="mt-4 mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
    </div>
    @error('name')
      <p style="color: red;font-size:11px;">{{ $message }}</p>
    @enderror
    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input type="number" name="quantity" class="form-control" id="quantity" rows="3" placeholder="100"></input>
    </div>
    @error('quantity')
      <p style="color: red;font-size:11px;">{{ $message }}</p>
    @enderror
    <label for="price" class="form-label">Price per product</label>
    <div class="input-group mb-3">
      <span class="input-group-text">Rp</span>
      <input type="text" id="price" name="price" class="form-control" placeholder="10000.00">
    </div>
    @error('price')
      <p style="color: red;font-size:11px;">{{ $message }}</p>
    @enderror
    <div class="mt-5">
      <a class="btn btn-outline-dark" href="/products">Back</a>
      <input class="btn btn-primary" type="submit" value="Create">
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>