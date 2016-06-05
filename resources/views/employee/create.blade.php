<html>
<head>
	<title>
		Add Employee

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
 <h1 align="center"> Add a new employee</h1>
 <div class="container">
 	<div class="row">

<p align="center"> <a href="{{ url('/employee')}}">All employee List</a> </p>
{!! Form::open(array('route' => 'employee.store')) !!}
    
<?php //echo csrf_field(); ?>

	Name <input type="text" name="name"> <br>

	Email <input type="text" name="email"> <br>

	Password <input type="text" name="password"> <br>
	<input type="submit" name="submit" value="Save"> <br>


 {!! Form::close() !!}

 </div>
 </div>


</body>

</html>