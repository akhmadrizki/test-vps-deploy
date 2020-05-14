<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Band;

class BandController extends Controller
{
    public function index()
    {
        $bands = Band::all();
        return response()->json(['data' => $bands]);
    }
}
