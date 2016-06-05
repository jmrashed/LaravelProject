<html>
<head>
	<title>
		Employee Edit


	</title>
	<style type="text/css">
		.container{
			margin: auto;
			width: 80%;  
			box-shadow: 10px 10px 5px #888888;
			min-height: 80%;
	 }
	 input[type="text"] {
    width: 350px;
    display: block;
    margin-bottom: 10px; 
}

input[type="button"] {
    width: 300px;
    margin-left: 35px;
    display: block;
}
table
{

	border-collapse: collapse;
}
input[type="submit"] {
    width: 100px;
    margin-left: 35px;
    display: block;
    background-color: blue;
    color: white;
    padding: 5px;
}


input[type="submit"]:hover {

    background-color: red;
	}
	</style>
</head>
<body>
 <h1 align="center">Edit a  Employee</h1>
 <div class="container">
 	<div class="row">

<p align="center"> <a href="{{ url('/Employee')}}">All Employee List</a> </p>
{!! Form::open(array('route' => ['employee.update',$employee->id], 'method'=>'PUT')) !!}
    
<?php //echo csrf_field(); ?>

	Name <input type="text" name="name"  value="{{ $employee->name}}"> <br>

	Email <input type="text" name="email" value="{{ $employee->email}}"> <br>

	Password <input type="text" name="password"  value="{{ $employee->password}}"> <br>
	<input type="submit" name="submit" value="Update"> <br>


 {!! Form::close() !!}

 </div>
 </div>


</body>

</html>