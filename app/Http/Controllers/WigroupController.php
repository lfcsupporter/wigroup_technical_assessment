<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WigroupController extends Controller
{

    public function autoSearch()
    {
        return view('wigroup.wigroup', [
            'pageName' => 'Auto Search',
            'page' => 'auto_search'
        ]);
    }

    public function wiki()
    {
        return view('wigroup.wiki');
    }

    public function storeData()
    {
        return view('wigroup.store_data');
    }
}
