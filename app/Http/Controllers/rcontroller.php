<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tblregister;
use App\Models\Tbluser;
use Illuminate\Http\Request;

class rcontroller extends Controller
{
    public function index(Request $req)
    {
         if(isset($req->submit))
         {
             $name=$req->name;
             $email=$req->email;
             $password =$req->password;
             $data= Tblregister::where('email',$email)->first(); 
             if(!$data)
             {
                  $arr = array('name'=>$name , 'email'=>$email,'password'=>$password);
                  Tblregister::insert($arr);  
                  return redirect('register/login1');
              }else
              {
                 echo "<h1>Email alredy exist</h1>";
              }
         }
           Tblregister::get();
           return view('insert2');
    }
    public function index1(Request $req)
    {
        if(isset($req->submit))
        {
              $email= $req->email;
              $password=$req->password; 

              $data= Tblregister::where('email',$email)->first();
              if($data->password!=$password)
              {
                 echo "plzz enter correct email and password";
              }
              else{
                 return  redirect('/register/viewdata');
              }
        }
        return view('login1');  
    } 

    public function index2(Request $req)
    {
        $data=Tblregister::get();
        return view('viewdata')->with('data',$data); 
    }   
    public function delete2(Request $req ,$id)
    {
         Tblregister::where('id',$id)->delete();
         return redirect('/register/viewdata');
    }
    public function update2(Request $req ,$id){
          if(isset($req->submit))
          {
              $name= $req->name;
              $email= $req->email;
              $password= $req->password;
              $arr =array('name'=>$name ,'email'=>$email,'password'=>$password);
              $data= Tblregister::where('id',$id)->update($arr);
              return redirect('/register/viewdata');
          }
          $data =Tblregister::where('id',$id)->get();
          return view('update2')->with('data',$data);
    }
}
