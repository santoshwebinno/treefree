<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
//use View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Jobs\AppUninstalledJob;
use Validator;
use Session;
use App\Address;
use App\Occasion;
class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $domain;
    public function index()
    {
        //$shop = Auth::user();
       
        return view('welcome');
    }
	    public function save_address(Request $request)
    {
		 header("Access-Control-Allow-Origin: *");
		 $properties = $request->input('properties');
		 if($properties['To:'] != ""){
		  $insert = Address::firstOrNew(array('id' => $properties['data_id']));
     
			 $insert->to_name = $properties['To:'];
                $insert->to_address1 = $properties['To Address Line 1:'];
                $insert->to_address2 = $properties['To Address Line 2:'];
                $insert->toCity = $request->input('toCity');
                $insert->toState = $request->input('toState');
                $insert->toZip = $request->input('toZip');
                $insert->tocountry = $properties['To Country:'];
                $insert->from_name = $properties['From:'];
                $insert->from_address1 = $properties['From Address Line 1:'];
                //$insert->from_address2 = $properties['From Address Line 2:'];
                $insert->fromCity = $request->input('fromCity');
                $insert->fromState = $request->input('fromState');
                $insert->fromZip = $request->input('fromZip');
				$insert->fromcountry = $properties['From Country:'];
				$insert->left_side_note = $properties['Lots to say '];
				$insert->right_side_note = $properties['Main message'];
				$insert->sign_card = $properties['Sign your card'];
				$insert->your_type = $properties['Choose Your Type'];
				$insert->pen_color = $properties['choose your pen color'];
				$insert->product_handle = $request->input('product_handle');
				$insert->customer_id = $request->input('customer_id');
                $insert->save(); 
				echo $insert->id; 
		 } 
	}
		    public function save_address2(Request $request)
    {
		 header("Access-Control-Allow-Origin: *");
		// $properties = $request->input('properties');
		// if($properties['To:'] != ""){
		 $insert = Address::firstOrNew(array('to_name' => $request->input('to'), 'customer_id' => $request->input('customer_id'))); 
                $insert->to_name = $request->input('to');
                $insert->to_address1 = $request->input('address1');
                $insert->to_address2 = $request->input('address2');
                $insert->toCity = $request->input('toCity');
                $insert->toState = $request->input('toState');
                $insert->toZip = $request->input('toZip');
                $insert->tocountry = $request->input('tocountry');               
				$insert->customer_id = $request->input('customer_id');
				$insert->relation = $request->input('relation');               
                $insert->occasion = $request->input('occasion');
				$insert->recurrance = $request->input('recurrance');
				$insert->notifi = $request->input('notifi');
				$insert->send_date = $request->input('send_date');
                $insert->save();
		 //}
		        $occasion = Occasion::firstOrNew(array('title' => $request->input('occasion'), 'add_id' => $insert->id )); 
		 	    $occasion->title = $request->input('occasion');
				$occasion->recurrance = $request->input('recurrance');
				$occasion->senddate = $request->input('send_date');
				 $occasion->save();
	}
		    public function get_address(Request $request)
    {   header("Access-Control-Allow-Origin: *");
	       if($_GET['cus_id']==""){ $cusid = 'guest'; }else{ $cusid = $_GET['cus_id']; }
		$alladdress = Address::where('customer_id', $cusid)->get();
        $all_address = array();
		foreach($alladdress as $address){
	   $alloccasion = Occasion::where('add_id', $address->id)->get();
	   $address->alloccasion = $alloccasion;
        array_push($all_address, $address);
		}	
		
		echo json_encode($all_address);
	}
			    public function get_address2(Request $request)
    {   header("Access-Control-Allow-Origin: *");
		$all_address = Address::where('id', $_GET['id'])->get(); 
		echo json_encode($all_address);
	}
			    public function delete_address(Request $request)
    {   header("Access-Control-Allow-Origin: *");
		$all_address = Address::where('id', $_GET['id'])->delete(); 
	}
	
				    public function countall(Request $request)
    {   header("Access-Control-Allow-Origin: *");
	$cusid = $_GET['cus_id']; 
		$all_count['countadd'] = Address::where('customer_id', $cusid)->count();
		$all_count['countsave'] = Address::where('customer_id', $cusid)->whereNotNull('product_handle')->count(); 
	echo json_encode($all_count);
	}
				    public function uploadCSV(Request $request)
    {   header("Access-Control-Allow-Origin: *");
  if(!empty($_FILES['csv']['name']))
{
 $file_data = fopen($_FILES['csv']['tmp_name'], 'r');
 $column = fgetcsv($file_data);
 
 while($row = fgetcsv($file_data))
 {
	 $insert = Address::firstOrNew(array('to_name' => $row[0], 'customer_id' => $row[10]));
                $insert->to_name = $row[0];
                $insert->to_address1 = $row[1];
                $insert->to_address2 = $row[2];
                $insert->toCity = $row[3];
                $insert->toState = $row[4];
                $insert->toZip = $row[5];
                $insert->tocountry = $row[6];             
				$insert->relation = $row[7];              
				$insert->occasion = $row[8];
				$insert->notifi = $row[9];
				$insert->customer_id = $row[10];
                $insert->save();	 

  
 }
}

	}
	
	   public function update_address(Request $request)
    {
		 header("Access-Control-Allow-Origin: *");
		 $update = Address::where('customer_id', $_REQUEST['cusid'])->first();
                $update->customer_id = $_REQUEST['customer_id'];
                $update->save();
	}
		
}
