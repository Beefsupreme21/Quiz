<?php

use App\Models\Quiz;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
});

// Route::get('/form', function () {
//     $categories = Category::with(['questions' => function ($query) {
//         $query->inRandomOrder()->with(['answers' => function ($query) {
//             $query->inRandomOrder();
//         }]);
//     }])->get();

//     return view('form', [
//         'categories' => $categories,
//     ]);
// });

Route::get('/form/{quiz}', function ($id) {
    $quiz = Quiz::with(['category' => function ($query) {
        $query->with(['questions' => function ($query) {
            $query->inRandomOrder()->with(['answers' => function ($query) {
                $query->inRandomOrder();
            }]);
        }]);
    }])->findOrFail($id);

    return view('form', [
        'quiz' => $quiz,
    ]);
});


// Route::post('/form', [PlayController::class, 'store']);



Route::get('/quizzes/{quiz}/play', [PlayController::class, 'play']);
Route::post('/quizzes/{quiz}/store', [PlayController::class, 'store']);



Route::get('/quizzes/{quiz}/play', [PlayController::class, 'play']);
// Route::post('/quizzes/store', [PlayController::class, 'store']);

// Route::get('/play/{$id}', [PlayController::class, 'index']);
// Route::get('/{question}/{id}', [QuestionController::class, 'checkAnswer']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{category:name}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{category:name}', [CategoryController::class, 'update']);
Route::delete('/categories/{category:name}', [CategoryController::class, 'destroy']);
Route::get('/categories/{category:name}', [CategoryController::class, 'show']);

Route::resources(['/questions' => QuestionController::class,]);
Route::resources(['/answers' => AnswerController::class,]);
Route::resources(['/users' => UserController::class,]);
Route::resources(['/quizzes' => QuizController::class,]);