<?php

use App\Models\Bureau;
use App\Models\Candidat;
use App\Models\Centre;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Region;
use App\Models\Resultat;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

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

Route::get('/test',function(){
    //regrouper les candidats et leur nombre de voix
    $users = Resultat::select('nom', Resultat::raw('SUM(nbre_voix) as count'))
    ->groupBy('nom')
    ->get();

    //trier les candidants en fonction de leur nombre de voix
    $trier=$users->sortByDesc('count');

    //recuperation du candidat ayant le plus de voix et tablire leur ballotage
    $premier=$trier->values()->get(0);
    $premier->ballotage='favorable';
    $deuxieme=$trier->values()->get(1);
    $deuxieme->ballotage='defavorable';
   
    //recuperer les 2 candidats avec le plus de voix
    $deuxpremier=$trier->take(2);

    //calcute du nombre totale des voix
     $total=Resultat::SUM('nbre_voix');

    //calcul du pourcentage obtenu par le premier candidat
    $pourcent=70;//round(($premier->count *100)/$total);

    return view('test',[
        'premier'=>$premier,
        'deuxpremier'=>$deuxpremier,
        'pourcent'=>$pourcent
    ]);
  

});

Route::get('/test2', function () {
    // //regrouper les candidats et leur nombre de voix
    // $users = Resultat::select('nom', Resultat::raw('SUM(nbre_voix) as count'))
    // ->groupBy('nom')
    // ->get();

    // // $x=Bureau::find(1);
    // // $x1=$x->Resultat->SUM('nbre_voix')->groupBy('nom');
   
    // $bureau = Bureau::withSum('resultat', 'nbre_voix')->first();

    // $x1 = $bureau->Resultat->groupBy('nom');

    // return view('test2',['x1'=>$x1]);
   // return view('test2');


   $bureau=Bureau::find(1);
   $x=$bureau->Centre->nom_centre;

   return view('test2',['x'=>$x]);
});



Route::get('/home', function () {
    return view('pages.index');
});
