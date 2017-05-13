<?php

namespace App\Http\Api\V1\Controllers;

use App\Models\Modules\Project\OC_AFFAIRE;
use App\Transformers\OC_AFFAIRE_TRANSFORMER;

class OCAffaireController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $this->response->collection(OC_AFFAIRE::all(), new OC_AFFAIRE_TRANSFORMER(['client', 'devis']));
            //return OC_AFFAIRE::all();
        } catch(\Illuminate\Database\QueryException $e) {
            return $this->response->errorNotFound('Une erreur est survenu lors de l\'interrogation, veuillez vous assurer que le module "Affaire" est correctement installé et non corrompu.');
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $record = OC_AFFAIRE::where('ID', $id)->first();
            if ($record) {
                return $this->response->item($record, new OC_AFFAIRE_TRANSFORMER(['client', 'devis']));
            } else {
                return $this->response->errorNotFound();
            }
        } catch(\Illuminate\Database\QueryException $e) {
            return $this->response->errorInternal('It seems that PROJECT module is corrupted or not installed, re-install it.');
        }
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
