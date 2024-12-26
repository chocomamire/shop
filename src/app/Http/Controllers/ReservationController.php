<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function create(Request $request)
    {
        $form = $request->all();
        $users=User::all();
        
        Reservation::create($form);
        return redirect('detail');
    }

    public function delete(Request $request)
    {
        Reservation::find($request->id)->delete();
        return redirect('/');
    }
}
