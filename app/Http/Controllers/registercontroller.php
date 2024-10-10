<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class registercontroller extends Controller
{
    public function index(Request $req)
    {
      if(isset($req->submit))
      {
           $name=$req->name;
           $contact=$req->contact;
           $email=$req->email;
           $password=$req->password;
           $data = DB::table('crud')->where('email',$email)->first();
           if(!$data){
            $arr =array('name'=>$name, 'contact'=>$contact,'email'=>$email,'password'=>$password);
            $data = DB::table('crud')->insert($arr);
           }
           else{
            echo "email already exist";
           }
      }
     DB::table('crud')->get();
     return view('insert1');
    }  
    public function index1(Request $req) 
    {
          if(isset($req->submit))
          {
            $email=$req->email;
            $password=$req->password;
            $arr =array('email'=>$email,'password'=>$password);
            $data = DB::table('crud')->where('email',$email)->first();
            if($data->Password!=$password){
              echo "plzz enter correct email and password";
            }
            else{
              return redirect('/user/showdata');
            }
          }  
          return view('login');  
    }  
    public function index2(Request $req){
      $filter = $req->filter;
      // echo $filter;
      if(isset($req->filter)){

        $data = DB::table('crud')->where("Name","like",'%'.$filter.'%')->get();
      }
      else{
        $data = DB::table('crud')->get();
      }
      return  view('showdata')->with('data',$data);   
    }
    public function delete(Request $req ,$id)
    {
        DB::table('crud')->where('Id' ,$id)->delete();
        return redirect('/user/showdata');

    }   
    
    public function update(Request $req,$id)
    {
         if(isset($req->submit))
         {
          $name =$req->name;
          $email =$req->email;
          $password =$req->password;
          $arr= array('name'=>$name,'email'=>$email,'password'=>$password);
          $data= DB::table('crud')->where('Id',$id)->update($arr);
          return redirect('/user/showdata');
         }
         $data = DB::table('crud')->where('Id',$id)->get();
         return view('update')->with('data',$data);
    }
}
