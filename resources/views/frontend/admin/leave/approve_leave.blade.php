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
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin-leave-list.update', $edit->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-center align-items-center bg-light my-3">
                    <div class="max-w-md w-100 bg-white rounded shadow p-4">
                        
                        <div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select 
                                id="status" 
                                name="status" 
                                class="form-select"
                                required
                            >
                                <option value="Approved" {{ $edit->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                <option value="Cancel" {{ $edit->status == 'Cancel' ? 'selected' : '' }}>Cancel</option>
                                <option value="Pending" {{ $edit->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button 
                                type="submit" 
                                class="btn btn-dark"
                            >
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
                        
        </div>
    </div>
  </div>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
