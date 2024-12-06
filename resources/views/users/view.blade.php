<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-1 bg-primary text-white text-center">
  <h1>Dump Project</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
      <h3>Users Table</h3>
      <x-table :headers="['ID', 'Name', 'Email']" :data="$users" />
    </div>
    <div class="col-sm-12 mt-5">
        <h3>Products Table</h3>
        <x-table :headers="['ID', 'Product Name', 'Price']" :data="$products" />
      </div>
  </div>
</div>

</body>
</html>
