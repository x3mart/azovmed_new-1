<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offers.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if ($request->hasFile('kpfile')) {
            $data['kpfile'] = $request->file('kpfile')->store('attachments');
        }
        if ($request->hasFile('ipcard')) {
            $data['ipcard'] = $request->file('ipcard')->store('attachments');
        }
        Offer::create($data);
        dd($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.offers.edit', ['offer' => Offer::first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $data = $request->except('_token');
        if ($request->hasFile('kpfile')) {
            $data['kpfile'] = $request->file('kpfile')->store('attachments');
            Storage::delete($offer->kpfile);
        }
        if ($request->hasFile('ipcard')) {
            $data['ipcard'] = $request->file('ipcard')->store('attachments');
            Storage::delete($offer->ipcard);
        }
        $offer->update($data);
        return view('admin.offers.edit', ['offer' => $offer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
