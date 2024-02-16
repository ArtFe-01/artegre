<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loadAbout(Request $request) {
        //dd($request->all());
        return view('about', $request->all());
    }

    public function saveQuote(Request $request)
    {
        $input = $request->all();

        $quote = new Quote();
        $quote->quote = $input['quote'];
        $quote->save();

        return redirect(route('home'));
    }
}
