<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
    	$course_id = $req->input('selectedcourse');
		$partisipant_array = array();
		$company_id = null;
    	$company_name = $req->input('compname');
    	$company_phone = $req->input('compphone');
    	$company_email = $req->input('compemail');
    	
    	DB::raw('lock tables companies write');
    	$data = array('compname'=>$company_name,'compphone'=>$company_phone,'compemail'=>$company_email);
    	DB::table('companies')->insert($data);
    	$company_id = DB::getPdo()->lastInsertId();
    	DB::raw('unlock tables');
    	
    	$hp = $req->input('hiddenparticipants');
    	$hiddenParticipants = json_decode($hp);

    	$i = 0;
    	foreach($hiddenParticipants as $hiddenParticipant)
    	{
    		$x = 0;
    		foreach($hiddenParticipant as $key => $value)
    		{
    			$partisipant_array[$i][$x] = $value;
    			$x++;
    		}
    		$i++;
    	}

    	foreach($partisipant_array as $participant)
    	{
	        $participant_name = $participant[0];
	    	$participant_phone = $participant[1];
	    	$participant_email = $participant[2];
	    	DB::raw('lock tables participants write');
	    	$data = array('pname'=>$participant_name,'pphone'=>$participant_phone,'pemail'=>$participant_email);
    		DB::table('participants')->insert($data);
    		
    		$participant_id = DB::getPdo()->lastInsertId();
    		$data = array('courseid'=>$course_id,'compid'=>$company_id,'partid'=>$participant_id);
    		DB::table('ccp_bind')->insert($data);
    		DB::raw('unlock tables');
    	}

    	echo "success!";

    }
}
