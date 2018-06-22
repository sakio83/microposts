<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FavController extends Controller
{
    
     public function store(Request $request, $id)
    {
        \Auth::user()->favs($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return redirect()->back();
    }

}
