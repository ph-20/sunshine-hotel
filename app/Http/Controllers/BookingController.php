<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Cart;
use App\Booking;
use App\Room;

class BookingController extends Controller
{
    // List
    public function getList()
    {
        $booking = Booking::where('status', '!=', 3)->where('status', '!=', 4)->get();
        return view('admin.bookings.list', compact('booking'));
    }

    // Edit
    public function getEdit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.bookings.detail', compact('booking'));
    }

    public function postEdit(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $status = $request->status;
        $listRoom = $booking->rooms;
        if ($status == 2) {
            $booking->status = $status;
            foreach ($listRoom as $list) {
                $list->status = 1;
                $list->update();
            }
            $booking->update();
            return redirect()->route('carts.index')->with('message', 'Xác nhận thành công');
        }
        if ($status == 3) {
            $booking->status = $status;
            $booking->check_in = date('Y-m-d h-i-s');
            foreach ($listRoom as $list) {
                $list->status = 1;
                $list->update();
            }
            $booking->update();
            return redirect()->back()->withSuccess('Đã Check-in Đơn Đặt Phòng Có Id : ' . $booking->id);
        }
        if ($status == 4) {
            $booking->status = $status;
            $booking->check_out = date('Y-m-d h-i-s');
            foreach ($listRoom as $list) {
                $list->status = 2;
                $list->update();
            }
            $booking->update();
            return redirect()->back()->withSuccess('Đã Check-out Đơn Đặt Phòng Có Id : ' . $booking->id);
        }
        if ($status == 5) {
            $booking->status = $status;
            foreach ($listRoom as $list) {
                $list->status = 2;
                $list->update();
            }
            $booking->update();
            return redirect()->back()->withSuccess('Đã Hủy Đơn Đặt Phòng Có Id :' . $booking->id);
        }
    }

    //Show Cart
    public function getShow()
    {
        $cart = Cart::content();
        $subtotal = Cart::subtotal(0, '.', ',');
        $count = Cart::count();
        return view('hotel.seachroom.shoppingcart', compact('cart', 'subtotal','count'));
    }

    // Add Cart
    public function addCart($id)
    {
        $room = Room::find($id);
        Cart::add(
            [
                'id' => $room->id,
                'name' => $room->name,
                'qty' => 1,
                'price' => $room->price,
                'options' =>
                    [
                        'roomtype' => $room->roomTypes->name,
                        'person' => $room->amount_people,
                        'image' => $room->image1
                    ]
            ]
        );
        return redirect()->route('carts.show');
    }

    // Create
    public function getCreate()
    {
    }

    public function postCreate()
    {
    }

    // Delete
    public function getDelete($id)
    {
        Cart::remove($id);
        return redirect()->route('carts.show');
    }
}
