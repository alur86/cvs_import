<!DOCTYPE html>
<html>
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<div class="card bg-light mt-3">
<div class="card-header">
Import Report from CSV file:
</div>
<div class="card-body">
<form action="{{ route('import_csv') }}" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" class="form-control">
<br>
<button class="btn btn-success">Import Data</button>
</form>
</div>
</div>
</div>
</body>
</html>