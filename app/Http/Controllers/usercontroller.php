<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Tbluser;
class usercontroller extends Controller
{
    //
  public function index (Request $req)
  {
     if(isset($req->submit))
     {
            $name=$req->name;
            $email=$req->email;
            $password=$req->password;
            $arr= array('name'=>$name ,'email'=>$email,'password'=>$password);
            Tbluser::insert($arr);
            return redirect('/insert'); 
     }
     $arr = Tbluser::get();
     return view('insert')->with('data',$arr);
  }
  public function delete1(Request $req,$id){
      DB::table('register')->where('Id',$id)->delete();
      return redirect('/insert'); 
  }
  public function update(Request $req,$id){
    if(isset($req->submit)){
      $name= $req->name;
      $email=$req->email;
      $password=$req->password; 
      $arr= array('name'=>$name ,'email'=>$email,'password'=>$password);
      $arr1 = DB::table('register')->where('Id',$id)->update($arr);             
      return redirect('insert')->with('data' ,$arr1); 
    }
      $arr = DB::table('register')->where('Id',$id)->get();
      return view('updateform')->with('data',$arr);
  }
}
                                                                      