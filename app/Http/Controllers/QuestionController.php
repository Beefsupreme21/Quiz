<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        return view('questions.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = $request->validate([
            'text'=> 'required',
            'category_id'=> 'required',
        ]);

        Question::create($question);

        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions.show', [
            'question' => $question
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $categories = Category::all();

        return view('questions.edit', [
            'question' => $question,
            'categories' => $categories,
        ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $updatedQuestion = $request->validate([
            'text'=> 'required',
            'category_id'=> 'required',
        ]);

        $question->update($updatedQuestion);

        return redirect('/questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('/questions');   
    }
}
