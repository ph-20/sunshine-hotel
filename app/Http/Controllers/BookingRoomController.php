<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookRoom;
use App\BookRoomService;
use Illuminate\Support\Facades\Input;
use App\Service;

class BookingRoomController extends Controller
{
    // List
    public function getList()
    {
        $bookRooms = BookRoom::all();
        return view('admin.bookingrooms.list', compact('bookRooms'));
    }

    // Create
    public function getCreate($booking_id, $room_id)
    {
        $bookRoom = BookRoom::where('booking_id', $booking_id)->where('room_id', $room_id)->first();
        $service = Service::all();
        return view('admin.bookingrooms.create', compact('bookRoom', 'service'));
    }

    public function postCreate(Request $request, $booking_id, $room_id)
    {
        $this->validate(
            $request,
            [
                'unit' => 'required|min:1|numeric'
            ],
            [
                'unit.required' => 'Bạn chưa nhập đơn vị',
                'unit.min' => 'Đơn vị tối thiểu là 1',
                'unit.numeric' => 'Bạn phải nhập đơn vị kiểu số'
            ]
        );
        $bookRoom = BookRoom::where('booking_id', $booking_id)->where('room_id', $room_id)->first();
        $data = Input::all();
        $data['book_room_id'] = $bookRoom->id;
        BookRoomService::create($data);
        return redirect()->route('bookings.index')->with('message', 'Thêm dịch vụ thành công');
    }

    // Delete
    public function getDelete($id)
    {
        $bookRoomService = BookRoomService::find($id);
        $bookRoomService->delete();
        return redirect()->route('bookings.index')->with('message', 'Đã xóa thành công');
    }
}
