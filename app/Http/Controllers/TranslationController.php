<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class TranslationController extends Controller
{
    public function loadTranslations($locale, Request $request): \Illuminate\Http\JsonResponse
    {
	    // Define a unique cache key based on the locale
	    $cacheKey = "translations_{$locale}";

	    // Attempt to get the translations from cache
	    $translations = Cache::get($cacheKey);

	    // If translations are not found in cache, load them from files
	    if ($translations === null) {
		    $path = storage_path("../lang/$locale");
		    $files = File::files($path);

		    $translations = [];

		    foreach ($files as $file) {
			    $filename = $file->getFilenameWithoutExtension();
			    $translations[$filename] = require $file->getPathname();
		    }

		    // Store the loaded translations in cache
		    // We can adjust the duration (now()->addMinutes(24)) as per your needs
		    Cache::put($cacheKey, $translations, now()->addMinutes(config('custom_settings.translations_cache_limit')));
	    }

	    return response()->json($translations);
    }
}
