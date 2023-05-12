<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowController;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Category;

Route::prefix('')->group(function () {
    Route::get('home', [DashboardController::class, 'home']);
    Route::get('community', [DashboardController::class, 'community']);
    Route::get('about', [DashboardController::class, 'about']);
    Route::get('search', [DashboardController::class, 'search']);
    Route::get('results1', [DashboardController::class, 'results1']);
    Route::get('results2', [DashboardController::class, 'results2']);
    Route::get('test', [DashboardController::class, 'test']);
    Route::get('article', [DashboardController::class, 'article']);
    Route::get('help', [DashboardController::class, 'help']);
    Route::get('button', [DashboardController::class, 'button']);
    Route::get('page2', [DashboardController::class, 'page']);
    Route::post('dataInsert', [DashboardController::class, 'DataInsert']);
});



Route::get('/contact', function () {
    return view('Contact.contactPage');
});
Route::post('/contact', function () {
    $data = request(['name', 'email', 'subject', 'message']);

    \Illuminate\Support\Facades\Mail::to('janorascharles@gmail.com')
        ->send(new \App\Mail\ContactMe($data));

    return redirect('/contact')
        ->with('flash', 'Message Send Successfully');
});




//------------------------------Table--------------------------------------------
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    // Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
    Route::put('/update/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/search', [PostController::class, 'search'])->name('posts.search');
    Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');
    // Route::get('/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
});

Route::get('/button', function () {
    $android_table = DB::table('android_table')->get();
    return view('button.button',[
        'android_table' => $android_table
    ]);
});

Route::get('/page2', function () {
    $android_table = DB::table('android_table')->get();
    return view('button.page2',[
        'android_table' => $android_table
    ]);
});

/*login*/
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/post/{category}/{id}', [App\Http\Controllers\DashboardController::class, 'android1']);



// Route::post('/categories', function (Request $request) {
//     $category = Category::create($request->all());
//     return redirect()->back()->with('success', 'Category created successfully.');
// })->name('categories.store');

Route::post('/categories', 'CategoryController@store')->name('categories.store');


