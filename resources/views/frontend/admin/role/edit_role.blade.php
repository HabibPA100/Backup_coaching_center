<!DOCTYPE html>
<html lang="bn">
<head>
    <title>Admin Dashboard</title>
     <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <a href="{{ route('admin.user') }}" class="btn btn-primary">Go Back</a>
            <h5 class="text-center text-dark">Edit Role</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <td>
                            <form method="POST" action="{{ route('update.role', $edit->id) }}">
                                @csrf
                                @method('PUT')
                                <label for="role">Role:</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="student" {{ $edit->role == 'student' ? 'selected' : '' }}>Student</option>
                                    <option value="admin" {{ $edit->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    {{-- <option value="parent" {{ $edit->role == 'parent' ? 'selected' : '' }}>Parent</option>
                                    <option value="teacher" {{ $edit->role == 'teacher' ? 'selected' : '' }}>Teacher</option> --}}
                                </select>
                                <button type="submit" class="btn btn-primary mt-2">Update Role</button>
                            </form>
                        </td>
                    </tr>
            </table>
                  
        </div>
    </div>
  </div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
