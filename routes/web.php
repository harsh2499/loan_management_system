<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\loan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::post("alogin", [admin::class, "adminlogin"]);



 Route::group(['middleware' => ['test']], function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/welcomes', function () {
        return view('welcomes');
    });


    Route::get("loan_type", [admin::class, "loantype"]);

    Route::get("loan_type", [admin::class, "loantype"]);

    Route::post("/savetype", [admin::class, "savetype"]);

    Route::get("/showtype", [admin::class, "showtype"]);

    Route::get("/deletetype", [admin::class, "deletetype"]);

    Route::get("/edittype", [admin::class, "edittype"]);

    Route::post("/updatetype", [admin::class, "updatetype"]);

    Route::get("/loan_plan", [admin::class, "loanplan"]);

    Route::post("/saveplan", [loan::class, "saveplan"]);

    Route::get("/showplan", [loan::class, "showplan"]);

    Route::get("/deleteplan", [loan::class, "deleteplan"]);


    Route::get("/editplan", [loan::class, "editplan"]);


    Route::post("/updateplan", [loan::class, "updateplan"]);

    Route::get("borrowers", [admin::class, "borrowers"]);



    Route::post("/saveborrow", [loan::class, "saveborrow"]);


    Route::get("/showborrow", [loan::class, "showborrow"]);

    Route::get("/deleteborrow", [loan::class, "deleteborrow"]);

    Route::get("/editborrow", [loan::class, "editborrow"]);

    Route::post("/updateborrow", [loan::class, "updateborrow"]);


    Route::get("loans", [admin::class, "loans"]);

    Route::get("/calculate", [loan::class, "calculate"]);


    Route::post("/loanlist", [loan::class, "loanlist"]);

    Route::get("/result", [loan::class, "result"]);


    Route::get("/editloan", [loan::class, "editloan"]);

    Route::post("/updateloanlist", [loan::class, "uloanlist"]);

    Route::get("/deleteloanlist", [loan::class, "deleteloanlist"]);


    Route::get("payments", [loan::class, "payments"]);

    Route::get("/newpayment", [loan::class, "newpayment"]);

    Route::get("/paymentdetail", [loan::class, "paymentdetail"]);

    Route::post("/savepayment", [loan::class, "savepayment"]);

    Route::get("/showpayment", [loan::class, "showpayment"]);

    Route::get("/deletepayment", [loan::class, "deletepayment"]);

    Route::get("/logout", function () {
        if (session()->has('user')) {
            session()->pull('user');
        }
        return redirect('/');
    });



    Route::get("allresult", [loan::class, "allresult"]);


    Route::get("users", [loan::class, "users"]);


    Route::post("saveuser", [admin::class, "saveuser"]);

    Route::get("showuser", [admin::class, "showuser"]);

    Route::get("deleteuser", [admin::class, "deleteuser"]);


    Route::get("edituser", [admin::class, "edituser"]);

    Route::post("updateuser", [admin::class, "updateuser"]);
 });


 Route::view("home","home");