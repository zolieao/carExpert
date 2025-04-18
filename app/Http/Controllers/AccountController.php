<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function showAccount(Request $request){
        $id = Auth::id();
        $user = User::find($id);
        $name = $user->full_name;
        $phone = $user->phone;
        $email = $user->email;
        return view('Pages.account', compact('name','phone','email',));
    }
    public function showNotifications(){
        $id = Auth::id();
        $nots = Notification::Where('user_id', $id)->get();
        return view('Pages.notifications', compact('nots'));
    }
    public function showTickets(){
        return view('Pages.tickets');
    }
}

// $film = Film::findOrFail($filmId);
// $tickets = Ticket::Where('film_id', $filmId)->get();
// $sessions = Session::where('film_id', $filmId)->get();
// return view('Pages.filmPage', compact('film', 'sessions', 'tickets'));