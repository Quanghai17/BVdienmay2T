<?php

namespace App\Http\Controllers;
use Cart;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function index()
  {
    return view(('frontend.register.index'),);
  }

  public function show()
  {
    return view(('frontend.register.show'),);
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

      $feedback = new \App\Book();
      $feedback->name = $request->name;
      $feedback->phone = $request->phone;
      $feedback->province = $request->province;
      $feedback->district = $request->district;
      $feedback->village = $request->village;
      $feedback->date = $request->date;
      $feedback->hour = $request->hour;
      $feedback->content = $request->content;
      $feedback->services = $request->services;
      $feedback->subtotal = $request->subtotal;

        // dd($feedback);
      $feedback->save();
    } catch (\Exception $e) {
      $alert = [
        "type" => "error",
        "title" => __("Không thành công"),
        "body" => __("Có lỗi đã xảy ra, vui lòng thử lại!")
      ];
    }
    Cart::destroy();
    return redirect('/')->with('alert', $alert);
  }
}
