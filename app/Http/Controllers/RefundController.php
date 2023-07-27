<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use Illuminate\Http\Request;
use App\Http\Requests\RefundRequest;
class RefundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $refund = Refund::orderBy('id', 'desc')->first();
        $refundCount = Refund::count();
        return view('backend.refund.index',['refund'=>$refund, 'refundCount'=>$refundCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.refund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RefundRequest $request)
    {
        //
        $refund = Refund::create($request->all());
       
        return redirect()->route('refund.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function show(Refund $refund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function edit(Refund $refund)
    {
        //
        return view('backend.refund.edit',[
            'edit' => $refund
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function update(RefundRequest $request, Refund $refund)
    {
        //
        $refund->update($request->all());
       
        return redirect()->route('refund.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refund $refund)
    {
        //
        $refund->update($request->all());
       
        return redirect()->route('refund.index')->with('success','Data inserted successfully');
    }
}
