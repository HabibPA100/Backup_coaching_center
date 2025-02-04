<!DOCTYPE html>
<html lang="bn">
<head>
   @include('layouts.meta_tag')
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        label{
            font-family: 'Kalpurush';
        }
    </style>
</head>
<body>
  <div class="container">

    {{-- @if(session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go Home</a>
            <a href="{{ route('admin-image-post.create') }}" class="btn btn-primary float-end">Create Post</a>
        </div>
        <div class="card-body">
            <div class="container mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>@if ($post->image)
                                     <img src="{{ asset('storage/' . $post->image) }}" alt="Image" style="max-width: 200px;">
                                    @endif
                                </td>
                                <td>
                                    <span style="display: inline-block;">
                                        <a href="{{ route('admin-image-post.edit', $post->id) }}" class="btn btn-warning btn-sm" style="margin-right: 10px;">Edit</a>
                                        <a href="{{ route('admin-image-post.show', $post->id) }}" class="btn btn-info btn-sm" style="margin-right: 10px;">Show</a>
                                        <form action="{{ route('admin-image-post.destroy', $post->id) }}" method="POST" style="display: inline-block; margin: 0;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>

    
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
        </script>
    @endif
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

