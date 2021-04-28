<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    private $root = 'frontend.pages.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->root.'booking');
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
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required',
            'members' => 'required',
            'date' => 'required',
            'time' => 'required'
        ],[
            'name.required' => 'Please, Enter Your Name',
            'phone.required' => 'Provide us your mobile no. too',
            'members.required' => 'How many of you may come?',
            'date.required' => 'Which day will you come?',
            'time.required' => 'When will you come?'
        ]);
        if($validator->fails())
        {
            $data = [
                'data' => $validator->errors(),
                'error' => true,
                'code' => 500
            ];
            return response()->json($data);
        }

        $booking = new Booking();
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->members = $request->members;
        $booking->foods = $request->foods;
        $booking->date = $request->date;
        $booking->time = $request->time;
        if($booking->save())
        {
            $data = [
                'data' => $booking,
                'code' => 201
            ];
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
