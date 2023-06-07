<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvisesController extends Controller
{
  public function index()
  {
    return view(('frontend.advises.index'),);
  }

  public function store(Request $request)
  {
    $quick = $request->input('quick', false);

    if (!$quick) {
      $validated = $request->validate([
        'name' => 'required|max:120',
        'phone' => 'required|numeric|min:10'
      ]);
    }

    try {
      $alert = [
        "type" => "success",
        "title" => __("Thành công"),
        "body" => __("Cảm ơn bạn đã đặt phòng, chúng tôi sẽ sớm phản hồi cho bạn!")
      ];

      $feedback = new \App\Advise();
      $feedback->name = $request->name;
      $feedback->phone = $request->phone;
      $feedback->content = $request->content;
      $feedback->email = $request->email;
      $feedback->service = $request->service;

      // dd($feedback);
      $feedback->save();
    } catch (\Exception $e) {
      $alert = [
        "type" => "error",
        "title" => __("Không thành công"),
        "body" => __("Có lỗi đã xảy ra, vui lòng thử lại!")
      ];
    }
    return redirect()->back()->with('alert', $alert);
  }
}
