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
<button><a href=" {{url ('/home') }} " class="button">Back</a></button>
<p>Name: {{ $userdata->name }}</p>
<p>Email: {{ $userdata->email }}</p>

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
        
        @foreach ($userdata->basics as $basic) 
        @foreach ($userdata->education as $education)
        @foreach ($userdata->experiances as $experiance)
        @foreach ($userdata->families as $family)
        <tr>
        <td>{{ $loop->iteration }}</td>
            <td>{{ $basic->firstname }}</td>
            <td>{{ $basic->lastname }}</td>
            <td>{{ $basic->email }}</td>
            <td>{{ $basic->phone }}</td>
            <td>{{ $basic->dob }}</td>
            <td>{{ $basic->role }}</td>
            <td>{{ $basic->department }}</td>
            <td>{{ $basic->salary }}</td>
            <td>{{ $education->school1 }}</td>
            <td>{{ $education->degree1 }}</td>
            <td>{{ $education->percentage1 }}</td>
            <td>{{ $education->school2 }}</td>
            <td>{{ $education->degree2 }}</td>
            <td>{{ $education->percentage2 }}</td>
            <td>{{ $experiance->company1 }}</td>
            <td>{{ $experiance->number1 }}</td>
            <td>{{ $experiance->reponsibility1 }}</td>
            <td>{{ $experiance->company2 }}</td>
            <td>{{ $experiance->number2 }}</td>
            <td>{{ $experiance->responsibility2 }}</td>
            <td>{{ $family->father }}</td>
            <td>{{ $family->mother }}</td>
            <td>{{ $family->spouse }}</td>
            <td>{{ $family->children }}</td>
            <td>
            <a href="{{url ('/edit'. $userdata->id) }} " class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a></td>
           
        </tr>
        @endforeach
        @endforeach
        @endforeach
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
    </style>

