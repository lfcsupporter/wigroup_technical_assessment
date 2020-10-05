<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WigroupController extends Controller
{

    public function autoSearch()
    {
        return view('wigroup.wigroup', [
            'pageTitle' => 'Auto Search',
            'page' => 'auto_search'
        ]);
    }

    public function wiki()
    {
        return view('wigroup.wigroup', [
            'pageTitle' => 'Wiki',
            'page' => 'wiki'
        ]);
    }

    public function wikiDetails(Request $request, $title, $pageid)
    {
        return view('wigroup.wigroup', [
            'pageTitle' => $title,
            'page' => 'wiki_details',
            'pageid' => $pageid,
            'wiki_url' => 'https://en.wikipedia.org/?curid=' . $pageid
        ]);
    }
}
