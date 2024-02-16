<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $allQuotes = Quote::all();
        return view('admin_quotes', ['quotes' => $allQuotes]);
    }

    public function store(Request $request)
    {
        $input = $request->all();


        $quote = new Quote();
        $quote->quote = $input['quote'];
        $quote->author = $input['author'];
        $quote->save();

        return redirect(route('quote__index'));
    }
}
