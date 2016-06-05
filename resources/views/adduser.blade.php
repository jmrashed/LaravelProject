
@extends('master')
@section('title')
    Add User
@endsection
@section('content')

 <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="AddUser" method="post">
                            <fieldset>
                                {{ csrf_field() }}


                                <div class="form-group">
                                    <input class="form-control" placeholder="Full name" name="name" type="text" autofocus>
                                </div>


                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>


                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <input type="submit"  name="submit" class="btn btn-lg btn-success btn-block" value="Save">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
