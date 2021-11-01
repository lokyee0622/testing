<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\EventController;

class EventController extends Controller
{
    public function insertform()
    {
        return view('welcome');
            }
                public function insert(Request $request)
                {
                    $id = $request->input('id');
                    $name = $request->input('name');
                    $description = $request->input('description');
                    $price = $request->input('price');
                    $date = $request->input('date');
                    $time = $request->input('time');
                    $data=array('id'=>$id,"name"=>$name,"description"=>$description,"price"=>$price,"date"=>$date,"time"=>$time);
                    DB::table('posts')->insert($data);
                    echo "Record inserted successfully.<br/>";
                    echo '<a href = "/insert">Click Here</a> to go back.';
                }

               
}


?>
