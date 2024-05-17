<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Products</title>
  <style>
    #create-btn {
      color: white;
      font-weight: bold;
      float: right;
    }

    #table-header {
      font-weight: 500;
    }

  </style>
</head>
<body>
  <div class="container-sm" style="max-width: 900px;">
    <a href="/product/create" id="create-btn" class="btn btn-primary mt-3 mb-3">Create new data</a>
    <table border="1px" class="table table-striped table-hover" >
        <tr id="table-header">
          <td>#</td>
          <td>Name</td>
          <td>Quantity</td>
          <td>Price</td>
          <td>Action</td>
        </tr>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td>Rp{{ $product->price }}</td>
            <td>
              <div id="action-btn">
                <form action="/product/delete/{{ $product->id }}" method="POST">
                  @method('delete')
                  @csrf
                  <a href="/product/edit/{{ $product->id }}" class="btn btn-primary btn-sm" id="update-btn" ><i class="fa-regular fa-pen-to-square"></i></a>
                  <button type="submit" class="btn btn-danger btn-sm" id="delete-btn" ><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </div>
            </td>
          </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
      {{ $products->links() }}
    </div>
  </div>
  <script src="https://kit.fontawesome.com/ab7504228a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>