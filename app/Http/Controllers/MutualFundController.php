<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;
use App\MutualFunds;

class MutualFundController extends Controller
{
    public function index() {
        $mutual_Funds = MutualFunds::all();
        return view('mutualFunds.index', compact('mutual_Funds'));
    }

    public function show($id)
    {

        $mutual_Fund = MutualFunds::findOrFail($id);
        return view('mutualFunds.show',compact('mutual_Fund'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('mutualFunds.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $mutual_Fund= new MutualFunds($request->all());
        $mutual_Fund->save();

        return redirect('mutualFunds');
    }

    public function edit($id)
    {
        $mutual_Fund=MutualFunds::find($id);
        return view('mutualFunds.edit',compact('mutual_Fund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $mutual_Funds= new MutualFunds($request->all());
        $mutual_Fund=MutualFunds::find($id);
        $mutual_Fund->update($request->all());
        return redirect('mutualFund');
    }

    public function destroy($id)
    {
        MutualFunds::find($id)->delete();
        return redirect('mutualFunds');
    }
}
