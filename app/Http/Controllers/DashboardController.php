<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class DashboardController extends Controller
{
    public function home(){
        // $transactions= Transaction::orderBy('created_at', 'desc')->get();
    //    return view('dashboard',compact('transactions'));
    return view('dashboard');
    
    }
    
    public function add(){
        return view('add');
     }

    public function submit(Request $request){
        $transaction = new Transaction;
        if( $request->card == 'credit'){
            $transaction->Credit = $request->card;
        }else{
            $transaction->Debit = $request->card;
        }
        $transaction->Description = $request->description;
        $transaction->Balance = $request->amount;
        $transaction->save();
        return redirect()->to('/');
    }
}