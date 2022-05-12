<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class loan extends Controller
{
    public function saveplan(Request $req)
    {

      
        $data = DB::table('loan_plan')
            ->insert(
                [
                    "month" => $req->month,
                    "interest_rate" => $req->interest_percentage,
                    "penalty_rate" => $req->penalty_rate
                ]
            );

        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }



    public function showplan()
    {
        $data = DB::table('loan_plan')->get();

        echo json_encode($data);
    }

    public function deleteplan(request $req)
    {
        
        $data = DB::table('loan_plan')->where('id', $req->id)->delete();
        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }

    public function editplan(request $req)
    {
       
        $data = DB::table('loan_plan')->where("id", $req->id)->get();

        if ($data) {
            echo json_encode(array("status" => 100, "data" => $data));
        } else {
            echo json_encode(array("status" => 200, "data" => $data));
        }
    }

    public function updateplan(request $req)
    {

        
        $data = DB::table('loan_plan')
            ->where('id', $req->id)
            ->update([
                "month" => $req->month,
                "interest_rate" => $req->interest_percentage,
                "penalty_rate" => $req->penalty_rate

            ]);

        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }


    public function saveborrow(request $req)
    {
        
        $confirm_date = date("d-m-y");

        $data = DB::table('borrower')
            ->insert(
                [
                    "fname" => $req->firstname,
                    "mname" => $req->middlename,
                    "lname" => $req->lastname,
                    "contact_no" => $req->contact_no,
                    "address" => $req->address,
                    "email" => $req->email,
                    "tax_id" => $req->tax_id,
                    "date_created" => $confirm_date,
                    "bstatus"=>"0",

                ]
            );

        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }

    public function showborrow()
    { 
        
      
        
        $data = DB::table('borrower')->join("loan_list","loan_list.borrower_id","!=","borrower.id")->where("status","0")->orWhere("status","1")->orWhere("status","2")->orWhere("status","3")
      
       ->select('borrower.*','loan_list.*','borrower.id')->get();


    

        echo json_encode($data);
    }

    public function deleteborrow(request $req)
    {
       

        $data = DB::table('borrower')->where('id', $req->id)->delete();
        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }

    public function editborrow(request $req)
    {

       
        $data = DB::table('borrower')->where("id", $req->id)->get();

        if ($data) {
            echo json_encode(array("status" => 100, "data" => $data));
        } else {
            echo json_encode(array("status" => 200, "data" => $data));
        }
    }


    public function updateborrow(request $req)
    {
     
        $data = DB::table('borrower')
            ->where('id', $req->id)
            ->update([
                "fname" => $req->firstname,
                "mname" => $req->middlename,
                "lname" => $req->lastname,
                "contact_no" => $req->contact_no,
                "address" => $req->address,
                "email" => $req->email,
                "tax_id" => $req->tax_id,
            ]);
        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }


    public function calculate(request $req)
    {
      
        $data = DB::table("loan_plan")->where("id", $req->lplan)->first();

        $total_amount = ($req->amt + ($req->amt * ($data->interest_rate / 100))) / $data->month;
        $total_payout = number_format($total_amount * $data->month);

        $monthly_amount = $total_amount;
        $month_payout = number_format($monthly_amount, 2);


        $panelty = $total_amount * ($data->penalty_rate / 100);
        $panelty_payout = number_format($panelty, 2);


        echo json_encode(array("total_payout" => $total_payout, "month_payout" => $month_payout, "panelty_payout" => $panelty_payout, "status" => 100));
    }


    public function loanlist(request $req)
    {
       
        $ref_no = mt_rand(100000000, 999999999);
        $creationdate = date('y-m-d h:i:s');
        $data = DB::table('loan_list')
            ->insert(
                [
                    "ref_no" => $ref_no,
                    "loan_type_id" => $req->ltid,
                    "borrower_id" => $req->bid,
                    "purpose" => $req->purpose,
                    "amount" => $req->amt,
                    "plan_id" => $req->lpid,
                    "status" => "0",
                    "date_released" => "0000-00-00 00:00:00",
                    "next_payment_date"=>"0000-00-00 00:00:00",
                    "date_created" => $creationdate

                ]
            );

        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }

       
    }


    public function result()
    {
       


        $data = DB::table("loan_list")->join("borrower", "borrower.id", "=", "loan_list.borrower_id")->join("loan_type", "loan_type.id", "=", "loan_list.loan_type_id")
            ->join("loan_plan", "loan_plan.id", "=", "loan_list.plan_id")->select('loan_list.*', 'loan_plan.*', 'loan_type.*', 'borrower.*', 'loan_list.id')->get();

        echo $data;
    }


    public function editloan(request $req)
    {

        

        $data = DB::table("loan_list")->where("loan_list.id", $req->id)->join("borrower", "borrower.id", "=", "loan_list.borrower_id")->join("loan_type", "loan_type.id", "=", "loan_list.loan_type_id")
            ->join("loan_plan", "loan_plan.id", "=", "loan_list.plan_id")->select('loan_list.*', 'loan_plan.*', 'loan_type.*', 'borrower.*', 'loan_list.id')->first();
        echo json_encode($data);
    }

    public function uloanlist(request $req)
    {

        if ($req->approve == "0") {
            $status = "0";
            $data = "0000-00-00 00:00:00";
            $npayment = "0000-00-00 00:00:00";
        } elseif ($req->approve == "1") {
            $status = "1";
            $data = "0000-00-00 00:00:00";
            $npayment = "0000-00-00 00:00:00";
        } elseif ($req->approve == "2") {
            $status = "2";
            $data = date('Y-m-d h:i:s');
            $npayment = date('Y-m-d h:i:s',strtotime('+1 month'));
        } elseif ($req->approve == "3") {
            $status = "3";
            $data = date('Y-m-d h:i:s');
            $npayment = date('Y-m-d h:i:s',strtotime('+1 month'));
        } else {
            $status = "0";
            $data = "0000-00-00 00:00:00";
            $npayment = "0000-00-00 00:00:00";
        }



        $data = DB::table('loan_list')
            ->where('id', $req->id)
            ->update([

                "loan_type_id" => $req->ltid,
                "borrower_id" => $req->bid,
                "purpose" => $req->purpose,
                "amount" => $req->amt,
                "plan_id" => $req->lpid,
                "status" => $status,
                "date_released" => $data,
                "next_payment_date"=>$npayment

            ]);

        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }

    public function deleteloanlist(request $req)
    {
        $data = DB::table('loan_list')->where('id', $req->id)->delete();
        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }


    public function payments()
    {
        if (!session()->get("user")) {
            return redirect("/");
        }
        return view("payments");
    }


    public function newpayment()
    {
       
       $data= DB::table('loan_list')->where("status","2")->orwhere("status","3")->get();

       echo $data;
    }

    public function paymentdetail(request $req)
    {
        
        $data = DB::table("loan_list")->where("loan_list.id", $req->id)->join("borrower", "borrower.id", "=", "loan_list.borrower_id")->join("loan_type", "loan_type.id", "=", "loan_list.loan_type_id")
        ->join("loan_plan", "loan_plan.id", "=", "loan_list.plan_id")->select('loan_list.*', 'loan_plan.*', 'loan_type.*', 'borrower.*', 'loan_list.id')->first();
        

        
        if($data)
        {

         
            echo json_encode(array("status"=>"100",$data));
        } 
        else
        {
            echo json_encode(array("status"=>"200"));
        }


    }


    public function savepayment(request $req)
    {
      
        $creationdate = date('y-m-d h:i:s');
        $data = DB::table('payments')
        ->insert(
            [
                "loan_id" => $req->loan_id,
                "payee" => $req->payee,
                "amount" => $req->amt,
                "penelty_amount" => $req->penelty,
                "date_created" => $creationdate

            ]
        );
        $data = date('Y-m-d h:i:s');
        $npayment = date('Y-m-d h:i:s',strtotime('+1 month'));
        DB::table('loan_list')
        ->where('id', $req->loan_id)
        ->update([
            "date_released" => $data,
            "next_payment_date"=>$npayment
        ]);
        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }

     
    }


    public function showpayment()
    {
      
        $data= DB::table('payments')->join("loan_list","loan_list.id","=","payments.loan_id")->select("payments.*","loan_list.ref_no")->get();

        echo $data;
    }

    public function deletepayment(request $req)
    {
        
        $data = DB::table('payments')->where('id', $req->id)->delete();
        if ($data) {
            echo json_encode(array("status" => 100));
        } else {
            echo json_encode(array("status" => 200));
        }
    }


    public function allresult()
    {
       
        $total_amount = DB::table("loan_list")->whereDate("date_released", "=", date("y-m-d", time()))->sum('amount');
        

        $borrower = DB::table('borrower')->count();

        $active_loan= DB::table('loan_list')->where("status","2")->count();
        

        $total_receivable=DB::table("payments")->sum('amount');

    

        echo json_encode(array("tm"=>$total_amount,"br"=>$borrower,"al"=>$active_loan,"tr"=>$total_receivable));


    }


    public function users()
    {
       
        return view("users");
    }


}
