<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    // List
    public function getList()
    {
        $service = Service::all();
        return view('admin.services.list', compact('service'));
    }

    // Edit
    public function getEdit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function postEdit(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $this->validate(
            $request,
            [
                'txtName' => 'required|min:3|max:100',
                'txtPrice' => 'required|min:50000|numeric',
                'txtDescription' => 'required|min:3|max:2000'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên dịch vụ',
                'txtName.min' => 'Tên dịch vụ độ dài tối thiểu là 3 ký tự',
                'txtName.max' => 'Tên dịch vụ độ dài tối đa là 100 ký tự.',
                'txtPrice.required' => 'Bạn chưa nhập giá tiền cho dịch vụ',
                'txtPrice.min' => 'Giá tiền phải lớn hơn 50.000vnd',
                'txtPrice.numeric'=>'Bạn phải nhập giá tiền kiểu số',
                'txtDescription.required' => 'Bạn chưa nhập mô tả dịch vụ',
                'txtDescription.min' => 'Mô tả dịch vụ phải có độ dài từ 3 đến 2000 ký tự',
                'txtDescription.max' => 'Mô tả dịch vụ phải có độ dài từ 3 đến 2000 ký tự'
            ]
        );
        $service->name = $request->txtName;
        $service->price = $request->txtPrice;
        $service->description = $request->txtDescription;
        $service->save();
        return redirect('admin/service/list')->with('message', 'Sửa dịch vụ thành công');
    }

    // Create
    public function getCreate()
    {
        return view('admin.services.create');
    }

    public function postCreate(Request $request)
    {
        $this->validate(
            $request,
            [
                'txtName' => 'required|unique:services,name|min:3|max:100',
                'txtPrice' => 'required|min:50000|numeric',
                'txtDescription' => 'required|min:3|max:2000'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên dịch vụ',
                'txtName.min' => 'Tên dịch vụ độ dài tối thiểu là 3 ký tự',
                'txtName.max' => 'Tên dịch vụ độ dài tối đa là 100 ký tự.',
                'txtName.unique' => 'Tên dịch vụ đã tồn tại',
                'txtPrice.required' => 'Bạn chưa nhập giá tiền cho dịch vụ',
                'txtPrice.min' => 'Giá tiền phải lớn hơn 50.000vnd',
                'txtPrice.numeric'=>'Bạn phải nhập giá tiền kiểu số',
                'txtDescription.required' => 'Bạn chưa nhập mô tả dịch vụ',
                'txtDescription.min' => 'Mô tả dịch vụ phải có độ dài từ 3 đến 2000 ký tự',
                'txtDescription.max' => 'Mô tả dịch vụ phải có độ dài từ 3 đến 2000 ký tự'
            ]
        );
        $service = new Service;
        $service->name = $request->txtName;
        $service->price = $request->txtPrice;
        $service->description = $request->txtDescription;
        $service->save();
        return redirect('admin/service/list')->with('message', 'Thêm dịch vụ thành công');
    }

    // Delete
    public function getDelete($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect('admin/service/list')->with('message', 'Đã xóa thành công');
    }
}
