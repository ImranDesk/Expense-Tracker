<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ItemController;
use App\Models\ItemGroup;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpenseController;
use App\Models\Expenditure;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// create groups
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::view('Create-Groups', 'creategroups');
});
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::post('create-group', [ItemController::class, 'createGroup']);
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::any('All-Groups', function (Request $req) {

        $fetch_groups = ItemGroup::select('item_groups.*')->get();

        return View('/groups', compact('fetch_groups'));
    });
});
// Items 
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::any('Add-Items', function (Request $req) {

        $fetch_groups = ItemGroup::select('item_groups.*')->get();

        return View('additems', compact('fetch_groups'));
    });
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::middleware(['auth', 'role:1'])->group(function () {
        Route::post('add-item', [ItemController::class, 'addItem']);
    });
});
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::any('All-Items', function (Request $req) {

        $fetch_items = Item::select('items.*')->get();

        return View('/items', compact('fetch_items'));
    });
});

// ......... 
// Route::middleware(['auth', 'role:1'])->group(function () {

Route::get('dashboard', [AdminController::class, 'AdminDashboard'])->name('dashboard');
// });

// Route::middleware(['auth', 'role:0'])->group(function () {

//     Route::get('user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
// });





// Expenditures


Route::middleware(['auth', 'role:0'])->group(function () {
    Route::any('View-Expenditures', function (
        Request $req
    ) {

        $expenditures = Expenditure::select('expenditures.*')->where('user_id', auth()->id())->get();

        return View('user/items', compact('expenditures'));
    });
});

// Route::middleware(['auth', 'role:0'])->group(function () {
//     Route::get('View-Expenditures', [ExpenseController::class, 'getItems'])->name('View-Expenditures');
// });

Route::middleware(['auth', 'role:0'])->group(function () {
    Route::any('Add-Expense', function (Request $req) {

        // $fetch_items = ItemGroup::select('item_groups.*')->get();
        $fetch_items = Item::select('items.*')->get();

        return View('user/addexpense', compact('fetch_items'));
    });
});

Route::middleware(['auth', 'role:0'])->group(function () {
    Route::post('add-expense', [ExpenseController::class, 'addExpense']);
});
