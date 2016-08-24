<?php

namespace Arbitrium\Lend\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LendController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('weight') && $request->has('high')) {

            $weight = $request->get('weight');
            $high = $request->get('high');

            $lend = round($weight / ($high * $high),1);
        }

        return view('lend::index', compact('lend'));
    }
}