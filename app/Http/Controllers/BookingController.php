<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Tour;

class BookingController extends Controller
{
    public function pageBook($id)
    {

    // 	Mail::send('mailautosend', $data, function($message){
    //                 $message->to('thainv1612@gmail.com', 'Visitor')->subject('Feedback!');
    //                 $message->from('chuhangpt96@gmail.com','Admin Kansai Book');
    //             });
    	$tour = Tour::find($id);
        return view('user.booktour.tourInfo', compact('tour'));
    }

    public function showListGuest(Request $request)
    {
        $total = $_POST['Total'];
        $adult = $_POST['adult'];
        $children = $_POST['children'];
        $small_children = $_POST['small_children'];
        $id = $_POST['tour_id'];
        $tour = Tour::find($id);
        return [
            'html' => view('user.booktour.showListGuest',compact('total','adult','small_children','children','tour'))->render(),
                ];
    }

    public function create(Request $request){
        $total  = intval($request->adult+$request->children+$request->small_children);
        $booking = new Booking();
        $booking->contact_name = $request->contact_name;
        $booking->mobilephone = $request->mobilephone;
        $booking->address = $request->address;
        $booking->adult = $request->adult;
        $booking->children = $request->children;
        $booking->small_children = $request->small_children;
        $booking->note = $request->note;
        $booking->contact_name = $request->contact_email;
        $booking->mobilephone_2 = $request->mobilephone2;
        $booking->tour = $request->idTour;

        $booking->save();

        $id_booking = $booking->id;
        for ($i=1; $i <= $total; $i++) {
            $booking_detail = new BookingDetail();
            $booking_detail->fullname = $request->fullname[$i];
            $booking_detail->gender = $request->gender[$i];
            $booking_detail->date = $request->date[$i];
            $booking_detail->person = $request->person[$i];
            $booking_detail->loaiphuthuphong = $request->loaiphuthuphong[$i];
            $booking_detail->nationality = $request->nationality[$i];
            $booking_detail->fullname = $request->fullname[$i];
            $booking_detail->passport = $request->passport[$i];
            $booking_detail->deadline_date = $request->deadline_date[$i];
            $booking_detail->price = $request->price[$i];

            $booking_detail->save();
        }
        // chuyển trang về trang nào đó
    }
}
