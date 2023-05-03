<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Models\Blog;
use App\Models\Subscriber;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BlogController::class, 'blog'])->name('welcome.blogs');
Route::get('/show/{blog}', [BlogController::class, 'showBlog'])->name('welcome.blogs.show');
Route::get('/categories/{category}', [BlogController::class, 'category'])->name('categories.category');
Route::post('/', [SubscriberController::class, 'store'])->name('subscriber.store');

Route::middleware(['auth', 'verified'])->group(function (){
    Route::resource('blogs', BlogController::class);
    Route::get('blogs/restore/{id}', [BlogController::class, 'restore'])->name('blogs.restore');
    Route::get('/subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');
    Route::delete('/subscribers/{subscriber}', [SubscriberController::class, 'destroy'])->name('subscribers.destroy');
});

Route::get('/dashboard', function () {
    $blogs = Blog::orderBy('created_at', 'DESC')->paginate(5);
    $countBlogs = Blog::all()->count();
    $trending = Blog::where('trending', '=', 1)->count();
    $subscribers = Subscriber::orderBy('created_at', 'DESC')->paginate(5);
    $countSubscribers = Subscriber::all()->count();
    return view('dashboard', compact('subscribers', 'blogs', 'trending', 'countSubscribers', 'countBlogs'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
