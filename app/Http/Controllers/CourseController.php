<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;

class CourseController extends Controller
{
    //





    public function edit($id)
    {

    	$course=Course::find($id);

    	return view('course.edit',compact('course'));
}




    public function create()
    {

    	return view('course.create');
    }

    public function destroy($id)
    {
 		$data = Course::find($id);
 		$data->delete();

 		return redirect('course');
    }





    public function update(Request $request, $id)
    {
 		$input= $request ->all();
 		$data= Course::find($id);
 		$data->update($input);

 		return redirect('course');
    }






    public function index()
    {
 		 $alldata= Course::all();
 		 return view('course.index',compact('alldata'));

    }




    public function store( Request $request)
    {
 		$input= $request ->all();
 		Course::create($input);
 		return redirect('course');
    }
















}
