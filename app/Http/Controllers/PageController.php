<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\BookRoom;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    // Lấy danh sách booking của khách hàng
    public function getList()
    {
        $booking = Booking::where('status', '=', '1')->where('user_id', '=', Auth::user()->id)->get();
        return view('hotel.bookingCustomer.list', compact('booking'));
    }

    // Hủy 1 đơn đặt phòng
    public function postList($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('bookingCustomer.index')
            ->with('message', 'Hủy đơn đặt phòng thành công');
    }

    // Lấy chi tiết đơn đặt phòng của khách
    public function getDetail($id)
    {
        $booking = Booking::find($id);
        return view('hotel.bookingCustomer.detail', compact('booking'));
    }

    // Xóa 1 phòng đã đặt
    public function postDetail($id)
    {
        $bookRoom = BookRoom::find($id);
        $bookRoom->delete();
        return redirect()->route('bookingCustomer.detail', $bookRoom->bookings->id)
            ->with('message', 'Hủy phòng thành công');
    }
}
