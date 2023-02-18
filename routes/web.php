<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Person;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

Route::get('/', function () {
    // a product-list component is used in the welcome view (and in the dashboard view)
    // the component is defined in app\View\Components\ProductList.php
    // the component is rendered in the welcome view with the following line:
    // <x-product-list />
    //return view('welcome', ['products' => ['pizza', 'pasta', 'salad', 'dessert', 'drinks']]);
    return view('index');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// management routes protected by the role middleware for management and the admin user
Route::middleware(['role:management|admin'])->group(function () {
    Route::resource('persons', PersonController::class);
});

// the route for management to create an employee from a user (change the role)
Route::middleware(['role:management|admin'])->group(function () {
    Route::resource('persons', PersonController::class);
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';


// test routes
// Voorbeeld van een model met een one-to-one relatie
// en het gebruik van roles en permissions
// hier wordt de mysql database gebruikt en niet de test omgeving
Route::get('test', function () {
    // maar één keer uitvoeren
    $role = Role::create(['name' => 'tester']);
    $permission = Permission::create(['name' => 'testen']);
    $role->givePermissionTo($permission);
    $user = User::first();
    $user->assignRole('tester');
    dd($user);
});
Route::get('test2', function () {
    // check desnoods in de db welke id te gebruiken
    $user = User::where('id', 11)->first();
    dd($user->person);
});
Route::get('test3', function () {
    $person = Person::first();
    dd($person->user);
});


// Eigen routes (ideeën)
// Voor de pizza's bijvoorbeeld(nog te maken):
// enkel personeel mag pizza's toevoegen, bewerken en verwijderen
// Route::resource('pizza', PizzaController::class)->except(['index', 'show']);
// enkel management mag personen bekijken, toevoegen, bewerken en verwijderen
// of dit gebeurt tijdens het aanmaken van een klant door een klant
// een klant mag enkel zichzelf bekijken en bewerken. geen andere klanten
// dus de route is altijd beschermd autorisatie moet gebeuren in de controller of in de views
// Dat gebeurt al hierboven in de middeleware role:management|admin

// pizza's mogen door iedereen bekeken worden
// Route::resource('pizza', pizzaController::class)->only(['index', 'show']);
// een klant mag zichzelf aanmaken zonder ingelogd te zijn
// het aanmaken van een klant is in feite het aanmaken van een persoon
// en het aanmaken van een gebruiker (user)
//pizzas
Route::get('/pizzas', [ProductController::class, 'index'])->Name('products.index');
Route::post('/pizzas/', [SessionController::class, 'store'])->Name('session.store');
Route::delete('/pizzas/{id}/delete', [ProductController::class, 'destroy'])->middleware('auth')->Name('products.delete');
Route::put('/pizzas/{id}', [ProductController::class, 'update'])->middleware('auth')->Name('products.update');

Route::get('/cart/show', [SessionController::class, 'show'])->Name('session.show');
Route::get('/cart/clear', [SessionController::class, 'clear'])->Name('session.clear');
Route::delete('/cart/{id}/delete', [SessionController::class, 'destroy'])->middleware('auth')->Name('session.delete');


Route::get('/overons', function () { return view('overons');})->name("overons");
