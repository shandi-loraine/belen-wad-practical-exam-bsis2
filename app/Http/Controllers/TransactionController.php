<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showAll()
    {
        $transactions = Transaction::all();
        return view ('transactions', ['transactions' => $transactions]);
    }

    public function createTransaction()
    {
        return view('create-transaction');
    }

    public function storeTransaction(Request $request)
    {
        $validated = $request->validate([
            'transaction_title'=> 'required|string|max:100',
            'description' => 'required|string|max:2000',
            'status' => 'required',
            'total_amount'=> 'required|string',
            'transaction_number'=> 'required|string',
        ]);

        $transactions = new Transaction();
        $transactions->transaction_title = $validated['transaction_title'];
        $transactions->description = $validated['description'];
        $transactions->status = $validated['status'];
        $transactions->total_amount = $validated['total_amount'];
        $transactions->transaction_number = $validated['transaction_number'];
        $transactions->save();

        return redirect()->route('showAll')->with('success', 'Successfully created');
    }

    public function viewTransaction(Request $request)
    {
        $transaction = Transaction::find($request->id);
        return view('transaction', ['transaction' => $transaction]);
    }

    public function editTransaction(Request $request)
    {
        $transaction = Transaction::find($request->id);
        return view('edit-transaction', ['transaction' => $transaction]);
    }

    public function updateTransaction(Request $request)
    {
        $validated = $request->validate([
            'transaction_title'=> 'required|string|max:100',
            'description' => 'required|string|max:2000',
            'status' => 'required',
            'total_amount'=> 'required|string',
            'transaction_number'=> 'required|string',
        ]);

        $transaction = Transaction::find($request->id);

        $transaction->transaction_title = $validated['transaction_title'];
        $transaction->description = $validated['description'];
        $transaction->status = $validated['status'];
        $transaction->total_amount = $validated['total_amount'];
        $transaction->transaction_number = $validated['transaction_number'];
        $transaction->save();

        return redirect()->route('viewTransaction', ['id' => $transaction->id])->with('success', 'successfully updated');

    }

    public function deleteTransaction(Request $request)
    {
        $transaction = Transaction::find($request->id);

        if ($transaction)
        {
            $transaction->delete();

        }
        
        return redirect()->route('showAll', ['id' => $transaction->id])->with('success', 'deleted updated');
    }

}
