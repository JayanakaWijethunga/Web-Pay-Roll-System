<?php

namespace App\Http\Controllers\Calender;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::all();
        $event=[];
        
        foreach($events as $row){
            //$enddate= $row->end_date." 24.00.00";
            $event[] = \Calendar::event(
            $row->title,
            true,
            new \dateTime($row->start_date),
            new \dateTime($row->end_date),
            $row->id,
            [
                'color' => $row->color,
            ]
        );
        }
        $calendar= \Calendar::addEvents($event);

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();

        return view('events.event_page',compact(['events','calendar','propic']));
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
        //
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
    public function update(Request $request, $id)
    {
        //
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
