<html>
<head>
	<title>
		create

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
 <h1 align="center"> Add a new Course</h1>
 <div class="container">
 	<div class="row">

<p align="center"> <a href="{{ url('/course')}}">All Course List</a> </p>
{!! Form::open(array('route' => 'course.store')) !!}
    
<?php //echo csrf_field(); ?>

	Course Title: <input type="text" name="course_title"> <br>

	Course Code: <input type="text" name="course_code"> <br>

	Course Credit: <input type="text" name="course_credite"> <br>
	<input type="submit" name="submit" value="save"> <br>


 {!! Form::close() !!}

 </div>
 </div>


</body>

</html>