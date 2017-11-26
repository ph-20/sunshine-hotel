<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckCreatPromotionRequest;
use App\Promotion;
use Toastr;

class PromotionController extends Controller
{
    public function home()
    {
        return redirect('admin/promotions/index');
    }

    public function index()
    {
        $promotions = Promotion::all();
        return view('admin.promotions.index', compact('promotions'));
    }

    public function create(Promotion $promotion)
    {
        return view('admin.promotions.create', compact('promotion'));
    }

    public function save(Promotion $promotion, CheckCreatPromotionRequest $request)
    {
        $data = $request->all();
        $promotion = Promotion::create($data);
        Toastr::success('Create Thành Công');
        return redirect()->route('promotions.index');
    }

    public function delete(Promotion $promotion)
    {
        $promotion->delete();
        Toastr::info('Delete Thành Công');
        return redirect()->route('promotions.index');
    }
}
