<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckCreatPromotionRequest;
use App\Http\Requests\CheckEditPromotionRequest;
use App\Promotion;

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
        //        Toastr::info('Delete Thanh Cong');
        return redirect()->route('promotions.index');
    }

    public function delete(Promotion $promotion)
    {
        $promotion->delete();
//        Toastr::info('Delete Thanh Cong');
        return redirect()->route('promotions.index');
    }
}
