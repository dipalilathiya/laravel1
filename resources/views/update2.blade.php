<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<style>
     *{
        margin: 0;
        padding: 0;
        /* background-color: aliceblue; */
     }
     .box1{
        width: 400px;
        height: 350px;
        background-color: #AF8F6F;
        margin: auto;
        /* font-size: 20px;  */
        color: white;
        border: 4px solid darkgray;
        border-radius: 40px;
        margin-top: 200px;

     }
     .box1 input{
        width:300px;
        height: 30px;
        margin-top: 10px;
        padding: 5px 8px;
        border-radius: 10px;
        border: none;
     }
     .box1 p{
        font-size: 20px;
        margin-top: 20px;
     }
     .box2{
        width: 300px;
        border: 1px solid #AF8F6F ;
        height: 335px;
        background-color: #AF8F6F;
        /* font-size: 20px;  */
        color: white;
        margin: auto;
     }
     .box3 input
     {
        background-color:darkgray;
        color: white;
        width: 100px;
        height: 40px;
        border: 2px solid white;
        border-radius: 20px;
        margin-top: 10px;
     }
     .btn{

        text-decoration: none;
        
     }
     .btn i{
      color: gray;
     }
     .btn button{
      width: 50px;
      height: 30px;
      border-radius: 40px;
      border: none;
      border: 3px solid gray;
     }
</style>
<body>
    <div class="box1">
        <form method="post">
         @csrf
      @foreach ($data as $val)
      <div class="box2">
        <p>Name</p>
         <input type="text" placeholder="Name" name="name" value="{{$val->name}}">
         <p>Email</p>
         <input type="email" placeholder="Email" name="email" value="{{$val->email}}">
         <p>Password</p>
         <input type="password" placeholder="Password" name="password" value="{{$val->password}}">
         <div class="box3">
         <input type="submit" name="submit">
         </div>
         </div>
         </div>
         @endforeach
    </form>
</body>
</html>
<!-- updateform -->