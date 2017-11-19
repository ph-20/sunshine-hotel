<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomType;
use Illuminate\Support\Facades\File;
use Validator;
use Cart;

class RoomsController extends Controller
{
    // Show
    public function getShow()
    {
        $room = Room::all();
        return view('admin.rooms.show', compact('room'));
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
            'txtName' => 'required|unique:rooms,name|min:3|max:100',
            'txtPrice' => 'required|min:6|max:100',
            'txtDescription' => 'required|min:3|max:100',
            'txtAmount' => 'required'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên phòng',
                'txtName.min' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtName.max' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtName.unique' => 'Tên phòng đã tồn tại',
                'txtPrice.required' => 'Bạn chưa nhập giá tiền cho phòng',
                'txtPrice.min' => 'Giá tiền phải có độ dài từ 6 đến 100 ký tự',
                'txtPrice.max' => 'Giá tiền phải có độ dài từ 6 đến 100 ký tự',
                'txtDescription.required' => 'Bạn chưa nhập mô tả phòng',
                'txtDescription.min' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtDescription.max' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
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
            $fileImage = $request->image1;
            $tail = $fileImage->getClientOriginalExtension();
            if ($tail != 'jpg' && $tail != 'png' && $tail != 'jpeg') {
                return redirect('admin/room/create')->with('message', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $fileImage->getClientOriginalName();
            $image = str_random(4) . '_' . $name;
            while (file_exists(asset('img' . '_' . $image))) {
                $image = str_random(4) . '_' . $name;
            }
            $fileImage->move('img', $image);
            File::delete('img/' . $room->image1);
            $room->image1 = $image;
        }
        $room->save();
        return redirect('admin/room/show')->with('message', 'Sửa phòng thành công');
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
            'txtPrice' => 'required|min:6|max:100',
            'txtDescription' => 'required|min:3|max:100',
            'txtAmount' => 'required'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên phòng',
                'txtName.min' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtName.max' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtName.unique' => 'Tên phòng đã tồn tại',
                'txtPrice.required' => 'Bạn chưa nhập giá tiền cho phòng',
                'txtPrice.min' => 'Giá tiền phải có độ dài từ 6 đến 100 ký tự',
                'txtPrice.max' => 'Giá tiền phải có độ dài từ 6 đến 100 ký tự',
                'txtDescription.required' => 'Bạn chưa nhập mô tả phòng',
                'txtDescription.min' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
                'txtDescription.max' => 'Mô tả phòng phải có độ dài từ 3 đến 100 ký tự',
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
            $fileImage = $request->image1;
            $tail = $fileImage->getClientOriginalExtension();
            if ($tail != 'jpg' && $tail != 'png' && $tail != 'jpeg') {
                return redirect('admin/room/create')->with('message', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $fileImage->getClientOriginalName();
            $image = str_random(4) . '_' . $name;
            while (file_exists(asset('img' . '_' . $image))) {
                $image = str_random(4) . '_' . $name;
            }
            $fileImage->move('img', $image);
            $room->image1 = $image;
        } else {
            $room->image1 = "";
        }
        $room->save();
        return redirect('admin/room/show')->with('message', 'Thêm phòng thành công');
    }

    // Delete
    public function getDelete($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect('admin/room/show')->with('message', 'Đã xóa thành công');
    }
}
