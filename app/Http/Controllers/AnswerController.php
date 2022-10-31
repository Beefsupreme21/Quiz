<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::with('question')->get();

        return view('answers.index', [
            'answers' => $answers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $questions = Question::all();

        return view('answers.create', [
            'categories' => $categories,
            'questions' => $questions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $answer = $request->validate([
            'text'=> 'required',
            'question_id'=> 'required',
        ]);

        $isCorrect = $request->boolean('is_correct');

        $answer['is_correct'] = $isCorrect;

        Answer::create($answer);
        return redirect('/answers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return view('answers.show', [
            'answer' => $answer
        ]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        $categories = Category::all();
        $questions = Question::all();

        return view('answers.edit', [
            'answer' => $answer,
            'categories' => $categories,
            'questions' => $questions,
        ]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnswerRequest  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        $updatedAnswer = $request->validate([
            'text'=> 'required',
            'question_id'=> 'required',
        ]);

        $isCorrect = $request->boolean('is_correct');

        $updatedAnswer['is_correct'] = $isCorrect;

        $answer->update($updatedAnswer);

        return redirect('/answers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
