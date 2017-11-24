<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookRoom;
use App\BookRoomService;
use Illuminate\Support\Facades\Input;
use App\Service;
use App\Room;

class BookingRoomController extends Controller
{
    // List
    public function getList()
    {
        $bookRoom = BookRoom::all();
        return view('admin.bookingrooms.list', compact('bookRoom'));
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
        $bookRoom = BookRoom::all();
        $service = Service::all();
        return view('admin.bookingrooms.create', compact('bookRoom','service'));
    }

    public function postCreate(Request $request)
    {

    }

    // Delete
    public function getDelete($id)
    {

    }
}
