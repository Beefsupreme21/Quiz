<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;


class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::with('question')->get();

        return view('answers.index', [
            'answers' => $answers,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $questions = Question::all();

        return view('answers.create', [
            'categories' => $categories,
            'questions' => $questions,
        ]);
    }

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

    public function show(Answer $answer)
    {
        return view('answers.show', [
            'answer' => $answer
        ]);    
    }

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

    public function destroy(Answer $answer)
    {
        $answer->delete();
        return redirect('/answers');    
    }
}
