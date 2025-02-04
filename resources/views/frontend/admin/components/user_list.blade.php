<!DOCTYPE html>
<html lang="bn">
<head>
    
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="font-family: Kalpurush">
<section>
    <div class="container bg-success w-100 p-2 mt-3">
        <h3 class="text-center text-white">Welcome to Admin Dashboard</h3>
    </div>
    <h4 class="text-center text-danger mt-3">রেজিস্টারক্রিত ব্যাবহারকারীদের তালিকা</h4>
</section>
    <section>
      <div class="card-header">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go Back</a>
    </div>
        <div class="container mt-3">
            <div class="card">
                <section>
                  <div class="table-responsive">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user_data as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td><a href="{{ route('role.edit', $user->id) }}" class="btn btn-sm btn-warning"> Update </a>
                            </td>
                            <td>
                              <!-- Delete Button -->
                              <form action="{{ route('user.destroy', $user->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this User?')"
                                        class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                               </form>
                            </td>
                          </tr>
                          @endforeach  
                        </tbody>
                      </table>
                  </div>  
                </section>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        </script>
@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
