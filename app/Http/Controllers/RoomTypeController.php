<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;
use Validator;

class RoomTypeController extends Controller
{
    // List
    public function getList()
    {
        $roomTypes = RoomType::all();
        return view('admin.roomtypes.list', compact('roomTypes'));
    }

    // Edit
    public function getEdit($id)
    {
        $roomTypes = RoomType::find($id);
        return view('admin.roomtypes.edit', compact('roomTypes'));
    }

    public function postEdit(Request $request, $id)
    {
        $roomTypes = RoomType::findOrFail($id);
        $this->validate(
            $request,
            [
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:100'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên loại phòng',
                'name.min' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'name.max' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'description.required' => 'Bạn chưa nhập mô tả cho tên loại phòng',
                'description.min' => 'Tên mô tả phải có độ dài từ 3 đến 100 ký tự',
                'description.max' => 'Tên mô tả phải có độ dài từ 3 đến 100 ký tự'
            ]
        );
        $roomTypes->name = $request->name;
        $roomTypes->description = $request->description;
        $roomTypes->save();
        return redirect('admin/roomtypes/list')->with('message', 'Sửa thành công');
    }

    // Create
    public function getCreate()
    {
        return view('admin.roomtypes.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate(
            $request,
            [
            'name' => 'required|min:3|max:100|unique:room_types,name'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên loại phòng',
                'name.min' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'name.max' => 'Tên phòng phải có độ dài từ 3 đến 100 ký tự',
                'name.unique' => 'Tên loại phòng đã tồn tại'
            ]
        );
        $roomTypes = new RoomType;
        $roomTypes->name = $request->name;
        $roomTypes->description = $request->description;
        $roomTypes->save();
        return redirect('admin/roomtypes/list')->with('message', 'Thêm thành công');
    }

    // Delete
    public function getDelete($id)
    {
        $roomTypes = RoomType::find($id);
        $roomTypes->delete();
        return redirect('admin/roomtypes/list')->with('message', 'Đã xóa thành công');
    }
}
