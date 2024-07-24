<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Massage;

class MassageController extends Controller
{
    public function index()
    {
        $massages = Massage::all();
        return view('massages.index', compact('massages'));
    }
}
