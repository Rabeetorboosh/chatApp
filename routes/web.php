<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\MassegesController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::Get('/',[MainController::class,'login'])->name('login');

Route::Get('/addtogroup/{group}',[UsersController::class,'addusertogroup'])->name('usertogroup.add');
Route::POST('/group/store',[GroupsController::class,'store'])->name('group.stor');
 Route::get('/{user}/{group}',[MainController::class,'index'])->name('home.index');
// Route::Get('/users',[UsersController::class,'index'])->name('users');
Route::Get('/signin',[UsersController::class,'signin'])->name('signin');
 Route::Post('/signcheck',[UsersController::class,'signcheck'])->name('signcheck');
Route::Get('/group/add/{user}',[GroupsController::class,'create'])->name('group.add');
// Route::Get('/useradd',[UsersController::class,'create'])->name('user.add');
 Route::POST('/userstore',[UsersController::class,'store'])->name('user.sore');
// Route::POST('/masseges',[MassegesController::class,'store'])->name('massege.send');

// Route::Get('/chat',Index::class)->name('chat');

 Route::Post('/togroupstore',[UsersController::class,'usertogroupstore'])->name('usertogroup.store');


require __DIR__.'/auth.php';
