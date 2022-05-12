<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function adminlogin(Request $req)
    {

        
        $result = DB::table('admin')
        ->where('username', $req->username)
        ->get();

    $res = json_decode($result, true);

    if (sizeof($res) == 0) {
        $req->session()->flash('error', 'Username does not exist. Please register yourself first');
       
        return redirect('/');
    } else {
        

        $encrypted_password = $result[0]->password;
        
        if ($encrypted_password == $req->password) {


                if($result[0]->type=="1")
                {

                    date_default_timezone_set('Asia/Kolkata');
                    $time = date('h:i:s');
                    $date = date('d-m-yy');
                    DB::table('adminlogin')
                        ->insert(
                            [
                                "username" => "$req->username",
                                "time" => "$time",
                                "date" => "$date"
                            ]
                        );
                        echo "You are logged in Successfully";
                        $req->session()->put('user', $result[0]->username);
        
            
        
                        return redirect('welcome');
                }
                else if($result[0]->type=="2")
                {
                    date_default_timezone_set('Asia/Kolkata');
                    $time = date('h:i:s');
                    $date = date('d-m-yy');
                    DB::table('adminlogin')
                        ->insert(
                            [
                                "username" => "$req->username",
                                "time" => "$time",
                                "date" => "$date"
                            ]
                        );
                        echo "You are logged in Successfully";
                        $req->session()->put('user', $result[0]->username);
        
            
        
                        return redirect('/welcomes');
                }
                


           
        } else {
            $req->session()->flash('error', 'Password Incorrect!!!');
            return redirect('/');
        }
    }
    }


    public function loantype()
    {
    
        return view("loantype");
    }

    public function savetype(Request $req)
    {
        
		  $data=DB::table('loan_type')
		  ->insert(
	     	[
		     	"type_name"=>$req->type_name,
			    "description"=>$req->description
		    ]);

            if($data)
            {
                echo json_encode(array("status"=>100));
            }
            else
            {
                echo json_encode(array("status"=>200));
            }
    }    

    public function showtype()
    {
       
        $data=DB::table('loan_type')->get();

        echo json_encode($data);
    }

    public function deletetype(request $req)
    {
      
        $data=DB::table('loan_type')->where('id', $req->id)->delete();
        if($data)
        {
            echo json_encode(array("status"=>100));
        }
        else
        {
            echo json_encode(array("status"=>200));
        }
    }


    public function edittype(request $req)
    {
        
        $data=DB::table('loan_type')->where("id",$req->id)->get();
        
        if($data)
        {
            echo json_encode(array("status"=>100,"data"=>$data));
        }
        else
        {
            echo json_encode(array("status"=>200,"data"=>$data));
        }
    }

    public function updatetype(request $req)
    {
        
        $data = DB::table('loan_type')
        ->where('id', $req->id)
        ->update([
            'type_name' =>  $req->type_name,
            'description' => $req->description,
           
        ]);

        if($data)
        {
            echo json_encode(array("status"=>100));
        }
        else
        {
            echo json_encode(array("status"=>200));
        }
    }

    public function loanplan()
    {
       
        return view("loanplan");
    }


    public function borrowers()
    {
        
        return view("borrower");
    }

    public function loans()
    {
        
        return view("loan");
    }

    public function saveuser(request $req)
    {
        
        $data = DB::table('admin')
        ->insert(
            [
                "email" => $req->email,
                "username" => $req->username,
                "password" => $req->password,
                "type" => $req->type,
              

            ]
        );

        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }

    public function showuser()
    {
        
        $data=DB::table('admin')->get();

        echo json_encode($data);
    }


    public function deleteuser(request $req)
    {
        
        $data = DB::table('admin')->where('id', $req->id)->delete();
        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }


    public function edituser(request $req)
    {
      
        $data = DB::table('admin')->where("id", $req->id)->get();

        if ($data) {
            echo json_encode(array("status" => 100, "data" => $data));
        } else {
            echo json_encode(array("status" => 200, "data" => $data));
        }
    }


    public function updateuser(request $req)
    {
        
        $data = DB::table('admin')
        ->where('id', $req->uid)
        ->update([

            "email" => $req->uemail,
            "username" => $req->uusername,
            "password" => $req->upassword,
            "type" => $req->utype,

        ]);

    if ($data) {
        echo json_encode(array("status" => 100));
    } else {
        echo json_encode(array("status" => 200));
    }
    }

}
