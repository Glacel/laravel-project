<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align:center"> List Of Registered User </h2>
  <table class="table">
    <thead>
      <tr class="info">
        <th>ID</th>
        <th>Email</th>
        <th>Username</th>
        <th>User Type</th>
        <th>Status</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr class="warning">
            <td>{{$row->id}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->username}}</td>
            <td>{{$row->usertype}}</td>
            <td>{{$row->status}}</td>
            <td>{{$row->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

