<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Service;
use App\BookRoomService;


class RoomServiceController extends Controller
{
    // List
    public function getList()
    {
        $room = Room::where('status','!=',0)->where('status','!=',1)->get();
        $service = Service::all();
        $bookRoomService = BookRoomService::all();
        return view('admin.roomservices.list', compact('room','service','bookRoomService'));
    }

    // Edit
    public function getEdit($id)
    {

    }

    public function postEdit(Request $request, $id)
    {

    }

    // Create
    public function getCreate()
    {
        $room = Room::where('status','!=',0)->where('status','!=',1)->get();
        $bookRoomService = BookRoomService::all();
        return view('admin.roomservices.create',compact('room','bookRoomService'));
    }

    public function postCreate(Request $request)
    {

    }

    // Delete
    public function getDelete($id)
    {
        $bookRoomService = BookRoomService::find($id);
        $bookRoomService->delete();

        return redirect('admin/roomservice/show')->with('message', 'Đã xóa thành công');
    }
}
