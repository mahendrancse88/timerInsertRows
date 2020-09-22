<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\TimerInsert;
use Illuminate\Http\Request;

class TimerInsertController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    
    public function showOneArticles($id){
        return response()->json(TimerInsert::find($id));
    }

    public function create(Request $request){
        //validation
        //return "validation";
        $count = $request->input('row');
        $data =[];
        for($i=0; $i < $count; $i++) {
            $data[] = [
                "gerenter_key" => $this->randomId($i)
            ];

        }
        // insert record
        $chunks = array_chunk($data, 5000);

        foreach($chunks as $chunk){
          
            \App\TimerInsert::insert($chunk);

        }
      
        return response()->json("successfully insert rows");
      
       

    }
    public function randomId($i){

        $id = $this->random_strings(6).$i;

   
      
        return $id;
   }
   function random_strings($length_of_string) 
{ 
  
    // String of all alphanumeric character 
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  
    // Shufle the $str_result and returns substring 
    // of specified length 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
} 
}