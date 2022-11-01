<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::with('category')->get();

        return view('questions.index', [
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


    public function create()
    {
        $categories = Category::all();
        
        return view('questions.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $question = $request->validate([
            'text'=> 'required',
            'category_id'=> 'required',
        ]);

        Question::create($question);

        return redirect('/questions');
    }

    public function show(Question $question)
    {
        return view('questions.show', [
            'question' => $question
        ]);
    }

    public function edit(Question $question)
    {
        $categories = Category::all();

        return view('questions.edit', [
            'question' => $question,
            'categories' => $categories,
        ]);    
    }

    public function update(Request $request, Question $question)
    {
        $updatedQuestion = $request->validate([
            'text'=> 'required',
            'category_id'=> 'required',
        ]);

        $question->update($updatedQuestion);

        return redirect('/questions');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('/questions');   
    }
}
