<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Phrase;
use App\Models\Letter;
use App\Models\Number;
use App\Models\TimeExpression;
use Illuminate\Http\Request;

class SignLanguageController extends Controller
{
    public function index(Request $request)
{
    $inputText = $request->input('inputText');
    $signs = collect();

    if ($inputText) {
        // Check for a single letter
        $letters = strlen($inputText) === 1 && ctype_alpha($inputText)
                    ? Letter::where('letter', $inputText)->get()
                    : collect();

        // Check if input is numeric and treat it as a word/phrase for numbers
        $numbers =  Number::whereRaw('LOWER(number) = ?', [strtolower($inputText)])->get();

        // Check if input matches a phrase (words or multi-word phrase)
        $phrases = Phrase::whereRaw('LOWER(phrase) = ?', [strtolower($inputText)])->get();

        // Check if input matches a phrase (words or multi-word phrase)
        $foods = Food::whereRaw('LOWER(food) = ?', [strtolower($inputText)])->get();

        // Check if input matches a time expression (words or multi-word time expressions)
        $timeExpressions = TimeExpression::whereRaw('LOWER(time_expression) = ?', [strtolower($inputText)])->get();

        // Merge all results into a single collection
        $signs = $signs->merge($letters)
                       ->merge($numbers)
                       ->merge($phrases)
                       ->merge($foods)
                       ->merge($timeExpressions);
    }

    return view('welcome', compact('inputText', 'signs'));
}



}
