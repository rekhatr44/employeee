<!DOCTYPE html>
<head>
    
    <title>Show Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

            
        

<h1 align="center">Employee Details</h1>
<button><a href=" {{url ('/admin') }} " class="button">Back</a></button>
<button><a href="{{url('export_user') }}" class="button">Export as excel</a></button>


<div class="container mt-5">
<table class="table table-striped table-bordered">
  <thead>
    <tr>
    <th>#</th>
    
    
      <th scope="col">First Name</th>

      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">DOB</th>
      <th scope="col">Role</th>
      <th scope="col">Department</th>
      <th scope="col">Salary</th>
      <th scope="col">School-1</th>
      <th scope="col">Degree</th>
      <th scope="col">Percentage</th>
      <th scope="col">School-2</th>
      <th scope="col">Degree</th>
      <th scope="col">Percentage</th>
      <th scope="col">Company-1</th>
      <th scope="col">No of Years</th>
      <th scope="col">Role and Responsibility</th>
      <th scope="col">Company-2</th>
      <th scope="col">No of Years</th>
      <th scope="col">Role and Responsibility</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Spouse</th>
      <th scope="col">Childern</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
<tbody>
        @foreach ($userdata as $user) 
        
        
        <tr>
        <td>{{ $loop->iteration }}</td>
       
        <td>{{ $user->Basicsall->firstname ?? '' }}</td>
        <td>{{ $user->Basicsall->lastname ?? '' }}</td>
        <td>{{ $user->Basicsall->email ?? '' }}</td>
        <td>{{ $user->Basicsall->phone ?? '' }}</td>
        <td>{{ $user->Basicsall->dob ?? '' }}</td>
        <td>{{ $user->Basicsall->role ?? '' }}</td>
        <td>{{ $user->Basicsall->department ?? '' }}</td>
        <td>{{ $user->Basicsall->salary ?? '' }}</td>
        <td>{{ $user->Educationall->school1 ?? '' }}</td>
        <td>{{ $user->Educationall->degree1 ?? '' }}</td>
        <td>{{ $user->Educationall->percentage1 ?? '' }}</td>
        <td>{{ $user->Educationall->school2 ?? '' }}</td>
        <td>{{ $user->Educationall->degree2 ?? '' }}</td>
        <td>{{ $user->Educationall->percentage2 ?? '' }}</td>
        <td>{{ $user->Experiancesall->company1 ?? '' }}</td>
        <td>{{ $user->Experiancesall->number1 ?? '' }}</td>
        <td>{{ $user->Experiancesall->reponsibility1 ?? '' }}</td>
        <td>{{ $user->Experiancesall->company2 ?? '' }}</td>
        <td>{{ $user->Experiancesall->number2 ?? '' }}</td>
        <td>{{ $user->Experiancesall->responsibility2 ?? '' }}</td>
        <td>{{ $user->Familiesall->father ?? '' }}</td>
        <td>{{ $user->Familiesall->mother ?? '' }}</td>
        <td>{{ $user->Familiesall->spouse ?? '' }}</td>
        <td>{{ $user->Familiesall->children ?? '' }}</td>
            <td>
            <a href="{{url ('/adminedit'.$user->id) }} " class="btn btn-success">Edit</a>
            <form method="post" action="{{ url('delete-user/'.$user->id) }}">
            {{csrf_field() }}
            @method('DELETE')
                                            <a href="" class="btn btn-danger">Delete</a></td>
                                            </form>
        </tr>
        @endforeach
       
       
        
    </tbody>
</table>
</div>


</body>
</html>

<style>
th {
        padding-right: 50px; /* Adjust the padding as needed */
    }
    .button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
    </style>

