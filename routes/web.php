<?php

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

////////////////////////////////////////
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//para proteger uma rota para só ser possivel acessá-lo estando logado.
Route::get('/produtos', 'ProdutosControlador@index'); // 1)
    //->middleware('auth');
    //->name('produtos');

//Route::get('/produtos', 'ProdutosControlador@index')->name('produtos')->middleware('auth'); // 2)

Route::get('/departamentos', 'DepartamentosControlador@index'); // 5)


Route::get('/usuario', function() {
    return view('usuario');
}); // 6)


Route::get('/logar/{email}/{passwd}', function($email, $passwd) {
    $credentials = ['email'=>$email, 'password'=>$passwd];
    if (Auth::attempt($credentials)) {
        echo "Logado!!";
    } 
    else {
        echo "Nome ou senha inválido(a)";
    }
}); //7
