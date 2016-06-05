<html>
<head>
	<title>
		Course 

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

table
{

	border-collapse: collapse;
}
a{
	display: block;
	background-color: blue;
	color: white;
	padding: 5px;
	width: 100px;
	text-decoration: none;
	text-align: center;
}
a:hover{
	 background-color:red;
}


	</style>
</head>
<body>
 <h1 align="center"> Add a new Course</h1>
 <div class="container">
 	<div class="row">
<h1>All course list</h1>
<p align="center"> <a href="{{ url('course/create')}}">Add Course</a> </p>
	<table width="80%" border="1px">
		<tr>
			<td> Course Title </td> 		<td> Course Code </td>		<td>Course Credite </td> 		<td colspan="2">Action </td>
		</tr>
@foreach($alldata as $data)
<tr>
	<td>{{$data->course_title}}</td>
	<td>{{$data->course_code}}</td>
	<td>{{$data->course_credite}}</td>
	<td> <a href="{{route('course.edit',$data->id)}}"> Edit</a> </td><td>

{!! Form::open(array('route' => ['course.destroy',$data->id], 'method'=>'delete')) !!}
 <input type="submit" name="submit" value="Delete">
{!! Form::hidden('id',$data->id)!!}
	  

{!!Form::close()!!}

	    </td>
</tr>
@endforeach
	</table>

</div></div>
</body>
</html>