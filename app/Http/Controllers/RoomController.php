<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomType;
use Illuminate\Support\Facades\File;
use Validator;
use Cart;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    // List
    public function getList()
    {
        $room = Room::all();
        return view('admin.rooms.list', compact('room'));
    }

    // Edit
    public function getEdit($id)
    {
        $roomType = RoomType::all();
        $room = Room::find($id);
        return view('admin.rooms.edit', compact('room', 'roomType'));
    }

    public function postEdit(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $this->validate(
            $request,
            [
                'txtName' => 'required|min:3|max:100',
                'txtPrice' => 'required|min:50000|numeric',
                'txtDescription' => 'required|min:3|max:100',
                'image1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'image2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'image3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'txtAmount' => 'required'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên phòng',
                'txtName.min' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtName.max' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtPrice.required' => 'Bạn chưa nhập giá tiền cho phòng',
                'txtPrice.min' => 'Giá tiền phải lớn hơn 50.000vnd',
                'txtPrice.numeric' => 'Bạn phải nhập giá tiền kiểu số',
                'txtDescription.required' => 'Bạn chưa nhập mô tả phòng',
                'txtDescription.min' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtDescription.max' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
                'image1.image' => 'Ảnh bạn chọn phải có đuôi jpeg,png,jpg,gif',
                'image1.max' => 'File ảnh không quá 2m',
                'txtAmount' => 'Bạn chưa nhập số người của phòng'
            ]
        );
        $room->name = $request->txtName;
        $room->price = $request->txtPrice;
        $room->description = $request->txtDescription;
        $room->amount_people = $request->txtAmount;
        $room->status = $request->rdoStatus;
        $room->room_type_id = $request->roomTypeid;
        if ($request->hasFile('image1')) {
            $fileName = $request->image1->store('public/img/roomtype');
            $room->image1 = Storage::url($fileName);
        }
        $room->save();
        return redirect()->route('rooms.index')->with('message', 'Sửa phòng thành công');
    }

    // Create
    public function getCreate()
    {
        $roomType = RoomType::all();
        return view('admin.rooms.create', compact('roomType'));
    }

    public function postCreate(Request $request)
    {
        $this->validate(
            $request,
            [
                'txtName' => 'required|unique:rooms,name|min:3|max:100',
                'txtPrice' => 'required|min:50000|numeric',
                'txtDescription' => 'required|min:3|max:100',
                'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'image3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'txtAmount' => 'required'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên phòng',
                'txtName.min' => 'Tên phòng phải có độ dài tối thiểu 3 ký tự',
                'txtName.max' => 'Tên phòng phải có độ dài tối đa 100 ký tự',
                'txtName.unique' => 'Tên phòng đã tồn tại',
                'txtPrice.required' => 'Bạn chưa nhập giá tiền cho phòng',
                'txtPrice.min' => 'Giá tiền phải lớn hơn 50.000vnd',
                'txtPrice.numeric' => 'Bạn phải nhập giá tiền kiểu số',
                'txtDescription.required' => 'Bạn chưa nhập mô tả phòng',
                'txtDescription.min' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtDescription.max' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
                'image1.required' => 'Bạn chưa chọn hình ảnh',
                'image1.image' => 'Ảnh bạn chọn phải có đuôi jpeg,png,jpg,gif',
                'image1.max' => 'File ảnh không quá 2m',
                'txtAmount' => 'Bạn chưa nhập số người của phòng'
            ]
        );
        $room = new Room;
        $room->name = $request->txtName;
        $room->price = $request->txtPrice;
        $room->description = $request->txtDescription;
        $room->amount_people = $request->txtAmount;
        $room->status = $request->rdoStatus;
        $room->room_type_id = $request->roomTypeid;
        if ($request->hasFile('image1')) {
            $fileName = $request->image1->store('public/img/roomtype');
            $room->image1 = Storage::url($fileName);
        }
        $room->save();
        return redirect()->route('rooms.index')->with('message', 'Thêm phòng thành công');
    }

    // Delete
    public function getDelete($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('rooms.index')->with('message', 'Đã xóa thành công');
    }

    public function detailroom($id)
    {
        $room = Room::find($id);
        return view('hotel.seachroom.detailroom', compact('room'));
    }

    public function detailallroom()
    {
        $rooms = Room::all();
        return view('hotel.seachroom.detailallroom', compact('rooms'));
    }

    public function seachroomfor2people()
    {
        $rooms = Room::where('amount_people', '=', 2)->get();
        return view('hotel.seachroom.seachfor2people', compact('rooms'));
    }

    public function seachroomfor4people()
    {
        $rooms = Room::where('amount_people', '=', 4)->get();
        return view('hotel.seachroom.seachfor4people', compact('rooms'));
    }

    public function seachroomfor6people()
    {
        $rooms = Room::where('amount_people', '=', 6)->get();
        return view('hotel.seachroom.seachfor6people', compact('rooms'));
    }

    public function seachroomtypevip()
    {
        $rooms = Room::where('room_type_id', '=', 1)->get();
        return view('hotel.seachroom.seachforroomvip', compact('rooms'));
    }

    public function seachroomtypedeluxe()
    {
        $rooms = Room::where('room_type_id', '=', 2)->get();
        return view('hotel.seachroom.seachforroomdeluxe', compact('rooms'));
    }

    public function seachroomtypefamily()
    {
        $rooms = Room::where('room_type_id', '=', 3)->get();
        return view('hotel.seachroom.seachforroomfamily', compact('rooms'));
    }

    public function seachroom(Request $request)
    {

        $data = Input::all();
        $arrival = $data['arrival'];
        $from = date("Y-m-d", strtotime($arrival));
        $departure = $data['departure'];
        $to = date("Y-m-d", strtotime($departure));
        $amount_people = $data['amount_people'];
        $roomType = $data['roomType'];

        $request->session()->put('arrival', $arrival);
        $request->session()->put('departure', $departure);
        $request->session()->put('amount_people', $amount_people);
        $request->session()->put('roomType', $roomType);

        $rooms = Room::where('room_status', '=', 1)
            ->where('amount_people', '=', $request->$amount_people)
            ->whereDoesntHave('room_type_id', $request->roomType)
            ->whereDoesntHave('bookings', function ($query) use ($from) {
                $query->where('check_in_date', '<=', $from)->where('check_out_date', '>=', $from);
            })
            ->whereDoesntHave('bookings', function ($query) use ($to) {
                $query->where('check_in_date', '<=', $to)->where('check_out_date', '>=', $to);
            })
            ->whereDoesntHave('bookings', function ($query) use ($from, $to) {
                $query->where('check_in_date', '>=', $from)->where('check_out_date', '<=', $to);
            })
            ->get();
        if (count($rooms) == 0) {
            return redirect('/message');
        } else
            return view('hotel.seachroom.detailallroom', compact('rooms'));
    }
}
