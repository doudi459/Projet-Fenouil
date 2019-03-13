<?php

namespace App\Http\Controllers;
use App\Article;
use App\commande;
use App\Commande_Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index()
    {

        return "OK";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $commande = $request->all();



        $commandetab = DB::select("select * from `commande` where `etat_commande` = 'encour' and `id_indevidu` = ? ", [$commande['indevidu']]);


        if($commandetab == [])
        {

            $commandetab = new Commande;

            $commandetab->etat_commande = 'encour';

            $commandetab->id_indevidu =  intval($commande['indevidu']);

            $commandetab->save();

            $id = DB::select("select `num_commande` from `commande` where `etat_commande` = 'encour' and `id_indevidu` = ? ", [$commande['indevidu']] );

        }
        else{
            foreach ($commandetab as $commandetabs)
            {
                $id=$commandetabs->num_commande;

            }

        }

        $commande_art_tab = new Commande_Article ;

        $commande_art_tab->numéro = intval($commande['numero']);

        $commande_art_tab->qantité = intval($commande['qantit']);

        $commande_art_tab->num_commande = intval($id);

        $commande_art_tab->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $art = Article::all()->find($id);

        return view('commande',compact('art'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
