<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listEvent = Event::all();
        return view('demo.table',['list'=>$listEvent]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $events = new Event();
//            $events->eventName=$request->get('eventName');
//            $events->bandName=$request->get('bandName');
//            $events->startDate=$request->get('startDate');
//            $events->endDate=$request->get('endDate');
//            $events->portfolio=$request->get('portfolio');
//            $events->ticketPrice=$request->get('ticketPrice');
//            $events->status=$request->get('status');
            $events->fill($request->all());
            $events->save();
            return redirect('/admin/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Event::find($id);
        if ($obj == null){
            return view('demo.error_404');
        }
        return view('demo.edit',['obj'=>$obj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Event::find($id);
        if ($obj == null){
            return view('demo.err_404');
        }
        $obj->fill($request->all());
        $obj->save();
        return redirect('/admin/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Event::find($id);
        if ($obj == null){
            return view('demo.err_404');
        }
        $obj->delete();
        return redirect('admin/event');
    }
}
