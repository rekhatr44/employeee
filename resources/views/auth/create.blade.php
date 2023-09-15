<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Employee Details</h2>

<div class="container">
  <form action=insert-data method="post">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="Firstname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="Lastname" placeholder="Your last name..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="Email" placeholder="Your Email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="phone">Phone</label>
    </div>
    <div class="col-75">
      <input type="text" id="phone" name="Phone" placeholder="Your Phone..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="dob">Date of Birth</label>
    </div>
    <div class="col-75">
      <input type="Date" id="dateofbirth" name="Dateofbirth" placeholder="Your DOB..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="role">Role</label>
    </div>
    <div class="col-75">
      <input type="text" id="role" name="Role" placeholder="Your Role.." disabled>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="department">Department</label>
    </div>
    <div class="col-75">
      <input type="text" id="department" name="Department" placeholder="Your Department.." disabled>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="salary">Salary</label>
    </div>
    <div class="col-75">
      <input type="text" id="salary" name="Salary" placeholder="Your Salary.." disabled>
    </div>
  </div>
  <hr>
  <h2>Educational Details</h2>
  <div class="row">
    <div class="col-25">
      <label for="school1">School-1</label>
    </div>
    <div class="col-75">
      <input type="text" id="school1" name="School1" placeholder="Your School..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="degree1">Degree</label>
    </div>
    <div class="col-75">
      <input type="text" id="degree1" name="Degree1" placeholder="Your Degree..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="percentage1">Percentage</label>
    </div>
    <div class="col-75">
      <input type="text" id="percentage1" name="Percentage1" placeholder="Your Percentage..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="school2">School-2</label>
    </div>
    <div class="col-75">
      <input type="text" id="school2" name="School2" placeholder="Your School..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="degree2">Degree</label>
    </div>
    <div class="col-75">
      <input type="text" id="degree2" name="Degree2" placeholder="Your Degree..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="percentage2">Percentage</label>
    </div>
    <div class="col-75">
      <input type="text" id="percentage2" name="Percentage2" placeholder="Your Percentage..">
    </div>
  </div>
  <hr>
  <h2>Previous Experiance</h2>
  <div class="row">
    <div class="col-25">
      <label for="company1">Company-1</label>
    </div>
    <div class="col-75">
      <input type="text" id="company1" name="Company1" placeholder="Your Company..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="number1">Number of years</label>
    </div>
    <div class="col-75">
      <input type="text" id="number1" name="Number1" placeholder="..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="responsibility1">Designation and Responsibilities</label>
    </div>
    <div class="col-75">
      <textarea id="responsibility1" name="Responsibility1" placeholder="Write something.." style="height:100px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="company2">Company-2</label>
    </div>
    <div class="col-75">
      <input type="text" id="company2" name="Company2" placeholder="Your Company..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="number2">Number of years</label>
    </div>
    <div class="col-75">
      <input type="text" id="number2" name="Number2" placeholder="..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="responsibility2">Designation and Responsibilities</label>
    </div>
    <div class="col-75">
      <textarea id="responsibility2" name="Responsibility2" placeholder="Write something.." style="height:100px"></textarea>
    </div>
  </div>
  <hr>
  <h2>Family Background</h2>
  <div class="row">
    <div class="col-25">
      <label for="father">Father Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="father" name="Father" placeholder=" Father Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mother">Mother Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="mother" name="Mother" placeholder=" Mother Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="spouse">Spouse Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="spouse" name="Spouse" placeholder=" Type Na if unmarried..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="children">Children Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="children" name="Children" placeholder=" Type Na if no children..">
    </div>
  </div>
  
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>


