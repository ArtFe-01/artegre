<?php

namespace App\Services;

use App\Models\Quote;

class QuotesService
{
    public function getRandomQuote()
    {
        $randomQuote = Quote::inRandomOrder()->first();
        //dd($randomQuote['quote']);
        return $randomQuote;
    }
}
