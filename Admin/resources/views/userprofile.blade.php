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
  <h2 style="text-align:center"> Profile</h2>
  <table class="table">
    <thead>
      <tr class="info">
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthday</th>
        <th>Cellphone Number</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr class="warning">
            <td>{{$row->firstname}}</td>
            <td>{{$row->lastname}}</td>
            <td>{{$row->birthdayDate}}</td>
            <td>{{$row->contactnumber}}</td>
            <td>{{$row->streetaddress}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

