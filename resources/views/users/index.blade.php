<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>users</h2>

<table>
  <tr>
    <th>name</th>
    <th>email</th>
    <th>update</th>
    <th>delete</th>
  </tr>
  @foreach ($users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td></td>
    <td></td>
  </tr>
  @endforeach
  </table>

</body>
</html>

