<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {        
        $quizzes = Quiz::with(['category', 'user'])->get();

        return view('quizzes.index', [
            'quizzes' => $quizzes,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('quizzes.create', [
            'categories' => $categories,
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $quiz = $request->validate([
            'name'=> 'required',
            'category_id'=> 'required',
            'user_id'=> 'required',

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
        $categories = Category::all();
        $users = User::all();

        return view('quizzes.edit', [
            'quiz' => $quiz,
            'categories' => $categories,
            'users' => $users,
        ]);        
    }

    public function update(Request $request, Quiz $quiz)
    {
        $updatedQuiz = $request->validate([
            'name'=> 'required',
            'category_id'=> 'required',
            'user_id'=> 'required',

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
