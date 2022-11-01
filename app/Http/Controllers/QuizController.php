<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();

        return view('quizzes.index', [
            'quizzes' => $quizzes,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        
        return view('quizzes.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $quiz = $request->validate([
            'name'=> 'required',
        ]);

        Quiz::create($quiz);
        
        return redirect('/quizzes');
    }

    public function show(Quiz $quiz)
    {
        return view('quizzes.show', [
            'quiz' => $quiz
        ]);    
    }

    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', [
            'quiz' => $quiz,
        ]);        
    }

    public function update(Request $request, Quiz $quiz)
    {
        $updatedQuiz = $request->validate([
            'name'=> 'required',
        ]);

        $quiz->update($updatedQuiz);

        return redirect('/quizzes');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect('/quizzes');    
    }
}
