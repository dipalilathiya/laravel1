<form method="get">
  <input type="text" name="filter" id="">
  <input type="submit">
</form>
<table border="1" style="background-Color:#758694;color:snow;border:1px solid gray;margin:auto;margin-top:30px;width:600px">
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
                <td>{{$val->Id}}</td>
                <td>{{$val->Name}}</td>
                <td>{{$val->Email}}</td>
                <td>{{$val->Password}}</td>
                <td><button><a href="/user/{{$val->Id}}">delete</a></button></td>
                <td><button><a href="/user/update/{{$val->Id}}">update</a></button></td>
             </tr>
           @endforeach      
    </table>