@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">User Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <table class="table table-bordered table-striped">
   <tr>
    <th> ID </th>
    <th> Email </th>
    <th>Username </th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>User Type</th>
    <th>Status</th>
    <th>Created At</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($user as $row)
   <tr>
    <td>{{$row['id']}} </td>
    <td>{{$row['email']}} </td>
    <td>{{$row['username']}} </td>
    <td>{{$row['firstname']}}</td>
    <td>{{$row['lastname']}}</td>
    <td>{{$row['usertype']}}</td>
    <td>{{$row['status']}}</td>
    <td>{{$row['created_at']}}</td>
    <td><a href="{{action('AccountController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('AccountController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection