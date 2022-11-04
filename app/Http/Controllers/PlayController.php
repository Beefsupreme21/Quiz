<?php

namespace App\Http\Controllers;

use App\Models\Play;
use App\Models\Quiz;
use App\Models\Category;
use App\Models\Question;
use App\Http\Requests\StorePlayRequest;
use App\Http\Requests\UpdatePlayRequest;

class PlayController extends Controller
{
    public function play(Quiz $quiz)
    {
        return view('play', [
            'quiz' => $quiz,
        ]);
    }

    public function show(Category $category)
    {
        // $category = Category::with('questions.answers')->get();
        return view('categories.show', [
            'category' => $category
        ]);
    }

}



















// public function index()
// {
//     $questions = Question::with('answers')->get();
//     $currentQuestion = $questions->pop(1);
//     $correctAnswer = $currentQuestion->pluck('answer');
//     $wrongAnswers = $questions->pluck('answer')->take(3);
//     $answers = $correctAnswer->merge($wrongAnswers)->shuffle();
    
//     return view('play', [
//         'questions' => $currentQuestion,
//         'answers' => $answers,
//     ]);
// }