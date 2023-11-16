<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        // $users = DB::table('students')->get();
         // Retrieve the list of users from the 'students' table, ordered by 'created_at' in descending order
        $users = DB::table('students')->orderBy('created_at', 'desc')->get();

        return view('welcome',['key'=>$users]);
       }
    public function updateUsers(string $id){
        $usersupdate = DB::table('students')->where('id',$id)->get();
                // return view('update',['key'=>$usersupdate]);
              return $usersupdate;
    }
    public function addUsers(Request $req){

        $usersupdate = DB::table('students')
                ->insert([
                       'name' => $req->name,
                       'aga' => $req->age,
                       'password' => $req->name,
                       'address' => $req->address,
                       'email' => $req->email,
                       'created_at' => now(),
                       'updated_at' => now(),
                ])   ;
        return redirect()->route('home');
    }
    public function editUsers(Request $req, $id){
        // return $req;
        $users = DB::table('students')
                ->where('id' ,$id)
                ->update([
                    'name' => $req->name,
                        'aga' => $req->age,
                        'password' => $req->name,
                        'address' => $req->address,
                        'email' => $req->email,
                        'created_at' => now(),
                        'updated_at' => now(),
 ])   ;
 return redirect()->route('home');

    }
    public function updatepage(string $id){
        // $UpdatePage = DB::table('students')->where('id',$id)->get();
        $UpdatePage = DB::table('students')->find($id);
        return view('updater',['key'=>$UpdatePage]);
        // return $UpdatePage;
    }


}
