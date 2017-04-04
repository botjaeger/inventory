@extends('template.default')

@section('styles')
<style type="text/css">
            #formField{
                margin-top: 10%;
                border-radius: 30px;
            }
            body{
                background: gray;
            }
        </style>
@endsection

@section('contents')
<div class="container-fluid">
           <div class="col-md-4 col-md-offset-4 well" id="formField">
           <h2 class="text-center">Inventory System</h2>

           @if(Session::has('info'))
           	<div class="alert alert-danger">{{Session::get('info')}}</div>
           @endif
               <form action="{{route('login')}}" method="POST">
                   <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                       <label>USERNAME</label>
                       <input type="text" name="username" class="form-control" placeholder="Enter Username">
                       @if($errors->has('username'))
                       	<span class="help-block">{{$errors->first('username')}}</span>
                       @endif
                   </div>
                   <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                       <label>PASSWORD</label>
                       <input type="password" name="password" class="form-control" placeholder="Enter Username">
                       @if($errors->has('password'))
                       	<span class="help-block">{{$errors->first('password')}}</span>
                       @endif
                   </div>
                   <button type="submit" class="btn btn-danger btn-block btn-lg">Login</button>
                   {{csrf_field()}}
               </form>
           </div>
       </div>
@endsection