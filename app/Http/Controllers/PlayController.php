<?php

namespace App\Http\Controllers;

use App\Models\Play;
use App\Models\Question;
use App\Http\Requests\StorePlayRequest;
use App\Http\Requests\UpdatePlayRequest;

class PlayController extends Controller
{
    public function index()
    {
        $questions = Question::all()->random();

        return view('play', [
            'questions' => $questions,
        ]);
    }


    // public function index()
    // {
    //     $questions = Question::all()->random();
    //     $currentQuestion = $questions->pop('1');
    //     $correctAnswer = $currentQuestion->pluck('answer');
    //     $wrongAnswers = $questions->pluck('answer')->take(3);
    //     $answers = $correctAnswer->merge($wrongAnswers)->shuffle();

    //     return view('index', [
    //         'questions' => $currentQuestion,
    //         'answers' => $answers,
    //     ]);
    // }

    // public function index()
    // {
    //     $questions = Question::all()->random();
    //     $currentQuestion = $questions->pop('1');
    //     $correctAnswer = $currentQuestion->pluck('answer');
    //     $wrongAnswers = $questions->pluck('answer')->take(3);
    //     $answers = $correctAnswer->merge($wrongAnswers)->shuffle();

    //     return view('index', [
    //         'questions' => $currentQuestion,
    //         'answers' => $answers,
    //     ]);
    // }

    // public function checkAnswer(Question $question, $id)
    // {
    //     if ($question->answer == $id) {
    //         return back()->with('message', 'Correct!');
    //     }
    //     else {
    //         return "Incorrect";
    //     }
    // }
}
