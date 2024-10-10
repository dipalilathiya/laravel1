<table border="1">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>  
    @foreach ($data as $val)
    <tr>
      <td>{{$val->id}}</td>
      <td>{{$val->name}}</td>
      <td>{{$val->email}}</td>
      <td>{{$val->password}}</td>
      <td><a href="/register/{{$val->id}}">delete</a></td>
      <td><a href="/register/update2/{{$val->id}}">Update</a></td>
    </tr>
    @endforeach
  </table>