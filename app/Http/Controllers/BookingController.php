<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use Cart;
use App\Booking;
use App\Room;
use App\BookRoom;
use Illuminate\Support\Facades\Auth;
use Mail;

class BookingController extends Controller
{
    // Danh sách quản lý đặt phòng của admin
    public function getList()
    {
        $booking = Booking::where('status', '!=', 3)->where('status', '!=', 4)->get();
        return view('admin.bookings.list', compact('booking'));
    }

    // Update danh sách booking
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

    // Hiển thị thông tin chi tiết đặt phòng của customer
    public function getEdit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.bookings.detail', compact('booking'));
    }

    // Update thông tin booking customer
    public function postDB($id)
    {
        $bookRoom = BookRoom::findOrFail($id);
        $bookRoom->delete();
        return redirect()->route('bookingManager.show', Auth::user()->id)->with('message', 'Hủy đơn hàng thành công');
    }

    //Show Cartqlykhachsan@localhost
    public function getShow()
    {
        $cart = Cart::content();
        //dd($cart);
        $subtotal = Cart::subtotal(0, '.', ',');
        $count = Cart::count();
        return view('hotel.bookings.shoppingcart', compact('cart', 'subtotal', 'count'));
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

    // Booking Detail
    public function getBookingDetail($id)
    {
        $users = User::find($id);
        $cart = Cart::content();
        $subtotal = Cart::subtotal(0, '.', '');
        return view('hotel.bookings.bookingdetail', compact('users', 'cart', 'subtotal'));
    }

    // Update Booking Detail
    public function postBookingDetail(Request $request)
    {
        $arrival = date("Y-m-d", strtotime($request->checkin));
        $departure = date("Y-m-d", strtotime($request->checkout));
        $cart = Cart::content();
        $subtotal = Cart::subtotal(0, '.', '');
        $booking = new Booking;
        $booking->user_id = Auth::user()->id;
        $booking->check_in = $arrival;
        $booking->check_out = $departure;
        $booking->code = $request->code;
        $booking->status = 1;
        $booking->total = $subtotal;
        $booking->promotion_id = 1;
        $booking->save();

        foreach ($cart as $row) {
            $book_room = new BookRoom();
            $book_room->room_id = $row->id;
            $book_room->booking_id = $booking->id;
            $book_room->save();
        }
        Cart::destroy();
        $this->postReview($booking);
        return redirect()->route('bookingCustomer.index');
    }

    //Get Review
    public function getReview()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        foreach ($bookings as $bk) {
            if ($bk->user_id == Auth::id()) {
                return view('hotel.bookings.review', compact('bookings'));
            }
        }
    }

    // Gửi mail
    private function postReview($booking)
    {
        Mail::send('hotel.mail', ['booking' => $booking], function ($m) {
            $m->from('hoangninh30496dn@gmail.com', 'Ninh Nguyễn Hữu Hoàng');
            $m->to(Auth::user()->email, 'Customer')->subject('Booking Code from Sunshine Hotel');
        });
    }

    // Xóa 1 booking
    public function getDelete($id)
    {
        Cart::remove($id);
        return redirect()->route('carts.show');
    }
}
