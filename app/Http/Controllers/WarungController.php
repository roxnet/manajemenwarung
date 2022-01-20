<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\SettingRequest;
use Carbon\Carbon;
use \App\Models\Warung;

class WarungController extends Controller
{
    /**
    * Show Warung
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $warung = Warung::paginate(7);
        return view('admin.warung.warung',compact('warung'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Warung::create($request->all());
        //dd($request->all());
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $warung_id = Warung::FindOrFail($request->id_warung);
        $warung_id->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $warung_id = Warung::FindOrFail($request->id_warung);
        $warung_id->delete();
        return back();
    }

    public function search(Request $request)
    {
        $query = $request->get('cari');
        $hasil = Warung::where('warung', 'LIKE', '%' . $query . '%')->paginate(7);

        return view('warung.result', compact('hasil', 'query'));
    }
}
