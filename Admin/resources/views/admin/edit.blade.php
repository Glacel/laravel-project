@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('AccountController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="firstname" class="form-control" value="{{$user->firstname}}" placeholder="Enter First Name" />
   </div>
   <div class="form-group">
    <input type="text" name="lastname" class="form-control" value="{{$user->lastname}}" placeholder="Enter Last Name" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" value="{{$user->email}}" placeholder="Enter Email" />
   </div>
   <div class="form-group">
    <input type="text" name="username" class="form-control" value="{{$user->username}}" placeholder="Enter Username" />
   </div>
   <div class="form-group">
    <input type="text" name="birthdayDate" class="form-control" value="{{$user->birthdayDate}}" placeholder="Enter Date" />
   </div>
   <div class="form-group">
    <input type="text" name="birthdayMonth" class="form-control" value="{{$user->birthdayMonth}}" placeholder="Enter Month" />
   </div>
   <div class="form-group">
    <input type="text" name="birthdayYear" class="form-control" value="{{$user->birthdayYear}}" placeholder="Enter Year" />
   </div>
   <div class="form-group">
    <input type="text" name="contactnumber" class="form-control" value="{{$user->contactnumber}}" placeholder="Enter Last Name" />
   </div>
   <div class="form-group">
    <input type="text" name="streetaddress" class="form-control" value="{{$user->streetaddress}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="cityaddress" class="form-control" value="{{$user->cityaddress}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="provinceaddress" class="form-control" value="{{$user->provinceaddress}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="usertype" class="form-control" value="{{$user->usertype}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="status" class="form-control" value="{{$user->status}}"/>
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection