<?php

namespace App\Http\Controllers;

use App\Models\Page as ModelsPage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(ModelsPage $page)
    {
        $metatitle = $page->title;
        return view('pages/details', compact( 'page' , 'metatitle'));
    }
}
