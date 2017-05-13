<?php

namespace App\Http\Api\V1\Controllers;

use App\Models\Common\OC_SOCIETECOMMON;
use App\Transformers\OC_SOCIETE_TRANSFORMER;

class OCSocieteController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = OC_SOCIETECOMMON::where('NOM', '<>', ' ')->get();

        return $this->response->collection($companies, new OC_SOCIETE_TRANSFORMER);
        //return $this->response->collection(OC_SOCIETECOMMON::all(), new OC_SOCIETE_TRANSFORMER);
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
        $record = OC_SOCIETECOMMON::where('ID', $id)->first();
        if ($record) {
            return $this->response->item($record, new OC_SOCIETE_TRANSFORMER);
        } else {
            return $this->response->errorNotFound();
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
