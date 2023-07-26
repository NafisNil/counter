<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;
use App\Http\Requests\PrivacyRequest;
class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $privacy = Privacy::orderBy('id', 'desc')->first();
        $privacyCount = Privacy::count();
        return view('backend.privacy.index',['privacy'=>$privacy, 'privacyCount'=>$privacyCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.privacy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrivacyRequest $request)
    {
        //
        $privacy = Privacy::create($request->all());
       
        return redirect()->route('privacy.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function show(Privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Privacy $privacy)
    {
        //
        return view('backend.privacy.edit',[
            'edit' => $privacy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function update(PrivacyRequest $request, Privacy $privacy)
    {
        //
        $privacy->update($request->all());
       
        return redirect()->route('privacy.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privacy $privacy)
    {
        //
        $privacy->update($request->all());
       
        return redirect()->route('privacy.index')->with('success','Data inserted successfully');
    }
}
