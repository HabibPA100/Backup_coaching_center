<!DOCTYPE html>
<html lang="bn">
<head>
   @include('layouts.meta_tag')
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <style>
        label{
            font-family: 'Kalpurush';
        }
    </style>
</head>
<body> 
  <div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin-memorize.index') }}" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin-memorize.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" class="w-100 p-3" />
                <label for="description">Description</label>
                <textarea name="description"cols="30"  class="w-100 p-3" required></textarea>
                <label for="image">Upload Image (Optional)</label>
                <input type="file" name="image" class="w-100">
                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                <button type="submit" class="btn btn-success float-end my-3" onclick="return confirm('Are you sure you want to create a new post?')">Submit</button>
            </form>            
        </div>
    </div>
  </div>
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
