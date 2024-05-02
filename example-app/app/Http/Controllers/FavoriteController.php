<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function listFavoritie()
    {
        $favorities = Favorite::all();
        return view('crud_user.favorites',['favorities' => $favorities]);
    }
}
