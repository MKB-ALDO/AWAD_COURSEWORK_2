<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $booking= new Booking();
            $booking->firstName=$request->input('firstName');
             $booking->lastName=$request->input('lastName');
             $booking->email=$request->input('email');
               $booking->phone=$request->input('phone');
                $booking->packageoption=$request->input('packageoption');
                 $booking->checkIn=$request->input('checkIn');
                  $booking->checkOut=$request->input('checkOut');
                   $booking->guests=$request->input('guests');
                    
        $booking->save();
         return view('about');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
         $bookings= Booking::all();
        return view('display',compact('bookings'));

       

       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $booking =Booking::find($id);
        return view('edit', compact('booking'));
        // return redirect()->route('booking.display');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $booking= Booking::find($id);
        $booking->firstName=$request->input('firstName');
        $booking->lastName=$request->input('lastName');
        $booking->email=$request->input('email');
        $booking->phone=$request->input('phone');
        $booking->packageoption=$request->input('packageoption');
        $booking->checkIn=$request->input('checkIn');
        $booking->checkOut=$request->input('checkOut');
        $booking->guests=$request->input('guests');
        $booking->save();
        return redirect()->route('dashboard')->with('success', 'Booking updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Booking $booking)
{
    $booking->delete();
    return redirect()->route('dashboard');
}
}
