<?php

namespace App\Http\Controllers;

//import Model "subjektif
use App\Models\Subjektif;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class SubjektifController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get subjektifs
        $subjektifs = subjektif::latest()->paginate(5);

        //render view with subjektifs
        return view('subjektif.index', compact('subjektifs'));
    }
}
