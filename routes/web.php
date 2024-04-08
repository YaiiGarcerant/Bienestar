<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FichacaracterizacionController;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\P04Controller;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\RemisionesController;
use App\Http\Controllers\RegistrarseController;
use Illuminate\Support\Facades\DB;
// use Barryvdh\DomPDF\Facade\Pdf;

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
// ROUTES GET
Route::get('/BienestarSena', function () {
$conjunto1=[
    "item" => "active",
    "imagen1" => [
        "url" => asset('img/autoctonos.jpeg'),
        "texto" => "Aprendices"
    ],
    "imagen2"=> [
        "url" => asset('img/team.jpeg'),
        "texto" => "Team Bienestar"
    ]
];
$conjunto2=[
    "imagen1"=> [
        "url" => asset('img/festiarte.jpeg'),
        "texto" => "Festiarte"
    ],
    "imagen2" => [
        "url" => asset('img/salud.jpeg'),
        "texto" => "Salud"
    ]
];
$conjunto3=[
    "imagen1"=> [
        "url" => asset('img/imagen1.jpeg'),
        "texto" => "Aprendices CNCA"
    ],
    "imagen2" => [
        "url" => asset('img/imagen3.jpeg'),
        "texto" => "Aprendices CNCA"
    ]
];
return view('landingpage.index')->with('carusel',[$conjunto1,$conjunto2,$conjunto3]);
})->name('landingpage');

Route::get('/BienestarSena/Encuesta', function () {return view('landingpage.index');});
Route::get('/BienestarSena/FichaCaracterización', function () {return view('landingpage.index');});
Route::get('/Enviarencuesta', function () {return view('landingpage.index');});
Route::get('/Registrarse', function () {return view('registrarse');});

Route::get('/BienestarCNCA/Reporte', function () {
    return view('layouts.admin');
})->name('reporte')->middleware('auth');

Route::get('/DIBA', function () {
    return view('layouts.admin');
})->middleware('auth');

Route::get('/listadoAprendices',[FichacaracterizacionController::class, 'exportAllFichascaracterizacion'])->name('encuesta.export')->middleware('auth');
Route::get('/listadoPorCoordinacion/pdf',[FichacaracterizacionController::class, 'exportFichasCaracterizacionByCoordinacion'])->name('encuesta.coor');
Route::get('/listadoPorFicha/pdf', [FichacaracterizacionController::class, 'exportFichasCaracterizacionByFicha'])->name('encuesta.ficha');
Route::get('/Encuesta/pdf/{id}', [FichacaracterizacionController::class, 'exportFichaCaracterizacion'])->name('encuesta.pdf');
//ROUTES POST
Route::post('/BienestarSena/FichaCaracterización',[AprendicesController::class, 'index'])->name('buscarFicha');
Route::post('/departamentos',[AprendicesController::class, 'listaDepartamentos']);
Route::post('/municipios',[AprendicesController::class, 'listaMunicipios']);
Route::post('/BienestarSena/Encuesta',[AprendicesController::class, 'validarAprendiz'])->name('validarAprendiz');
Route::post('/Enviarencuesta',[FichacaracterizacionController::class, 'store'])->name('enviarEncuesta');
Route::post('/EnviarPE04',[P04Controller::class, 'store'])->name('EnviarPE04');

Route::post('/registerSena',[RegistrarseController::class, 'register'])->name('registroInstructor');

Route::resource('caracterizados',FichacaracterizacionController::class)->names([
    'index' => 'caracterizados.index',
    'edit' => 'caracterizados.edit'
])->middleware('auth');

//routes p04
Route::resource('p04',P04Controller::class)->names([
    'index' => 'p04.index',
    'edit' => 'p04.edit',
])->middleware('auth');
Route::get('p04Excel/{id}',[P04Controller::class, 'P04Excel'])->name('P04Excel');

Route::resource('sedes',SedesController::class);

Route::resource('seguimiento',RemisionesController::class)->names([
    'create' => 'seguimiento.create',
    'index' => 'seguimiento.index',
])->middleware('auth');
Route::get('/seguimientoPDF/{id}', [RemisionesController::class, 'seguimientoPdf'])->name('seguimiento.pdf');
//routes aprendices
Route::get('/aprendices', function () {
    return view('aprendices.index');
})->middleware('auth')->name('aprendices.index');


/*Ruta Login */
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/municipios/{id}', function ($id_departamento) {
    $id_departamento = DB::table('municipios')
        ->where('departamento_id', $id_departamento)
        ->get();
   return ['id_departamento' => $id_departamento];
});

// Route::get('/pdf', function (){
//     $pdf = Pdf::loadView('power_by');
//     return $pdf->stream();
// })->name('pdf');
