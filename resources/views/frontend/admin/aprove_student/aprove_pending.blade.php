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
            <form action="{{ route('admin-student-list.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-center align-items-center bg-light my-3">
                    <div class="max-w-md w-100 bg-white rounded shadow p-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Student Name:</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ $edit->name }}" 
                                class="form-control"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father's Name:</label>
                            <input 
                                type="text" 
                                id="father_name" 
                                name="father_name" 
                                value="{{ $edit->father_name }}" 
                                class="form-control"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Mother's Name:</label>
                            <input 
                                type="text" 
                                id="mother_name" 
                                name="mother_name" 
                                value="{{ $edit->mother_name }}" 
                                class="form-control"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth:</label>
                            <input 
                                type="date" 
                                id="dob" 
                                name="dob" 
                                value="{{ $edit->dob }}" 
                                class="form-control"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender:</label>
                            <select 
                                id="gender" 
                                name="gender" 
                                class="form-select"
                                required
                            >
                                <option value="Male" {{ $edit->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $edit->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ $edit->gender == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input 
                                type="text" 
                                id="phone" 
                                name="phone" 
                                value="{{ $edit->phone }}" 
                                class="form-control"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Current Class:</label>
                            <input 
                                type="text" 
                                id="class" 
                                name="class" 
                                value="{{ $edit->class }}" 
                                class="form-control"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="school" class="form-label">School Name:</label>
                            <input 
                                type="text" 
                                id="school" 
                                name="school" 
                                value="{{ $edit->school }}" 
                                class="form-control"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="subjects" class="form-label">Subjects to Study:</label>
                            <input 
                                type="text" 
                                id="subjects" 
                                name="subjects" 
                                value="{{ $edit->subjects }}" 
                                class="form-control"
                                required
                            />
                        </div>
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
