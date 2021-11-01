<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\ViewController;
use App\Http\Requests;

class ViewController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from posts');
        return view('view',['users'=>$users]);
        }

         public function destroy($id) {
            DB::delete('delete from posts where id = ?',[$id]);
            echo "Record deleted successfully.<br/>";
            echo '<a href = "/view">Click Here</a> to go back.';
         }

         public function showData ($id){
             return DB::find($id);
         }
}

?>