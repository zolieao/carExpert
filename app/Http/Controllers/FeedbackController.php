<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function send(Request $request){
		$user = Feedback::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect()->route('сontacts')->with('success', 'Данные успешно отправлены');;

    }
}
