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
    public function play($id)
    {
        $quiz = Quiz::with(['category', 'category.questions', 'category.questions.answers'])->findOrFail($id);

        return view('play', [
            'quiz' => $quiz,
        ]);
    }

    
    // Route::get('/', function () {
    //     $categories = Category::with(['questions', 'questions.answers'])->get();
    
    //     return view('memory', [
    //         'categories' => $categories,
    //     ]);
    // });

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