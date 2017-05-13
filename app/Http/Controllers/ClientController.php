<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dropwire\Passport\Client;
use Dropwire\Passport\ClientRepository;
use App\Models\Common\OC_SOCIETECOMMON;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::where('personal_access_client', '=', true)
            ->orderBy('id','DESC')
            /*->union(
                OC_SOCIETECOMMON::where('ID', '=', 42)->pluck('NOM')
            )*/
            ->paginate(5);
        return view('clients.index',compact('clients'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = OC_SOCIETECOMMON::where('NOM', '<>', ' ')
            ->orderBy('ID','ASC')
            ->get()
            ->pluck('NOM', 'ID');

        return View::make('clients.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|min:5',
            'company_id' => 'required'
        );
        $input = Input::all();
        $validation = Validator::make($input, $rules);

        if ($validation->passes())
        {
            $client = (new Client)->forceFill([
                'id' => str_random(40),
                'user_id' => null,
                'company_id' => $input['company_id'],
                'name' => $input['name'],
                'secret' => str_random(40),
                'redirect' => 'http://localhost',
                'personal_access_client' => true,
                'password_client' => false,
                'revoked' => false,
            ]);

            $client->save();

            return Redirect::route('clients.index');
        }

        return Redirect::route('clients.index')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = OC_SOCIETECOMMON::where('NOM', '<>', ' ')
            ->orderBy('ID','ASC')
            ->get()
            ->pluck('NOM', 'ID');

        $client = Client::find($id);
        if (is_null($client))
        {
            return Redirect::route('clients.index');
        }
        return View::make('clients.edit', compact('client', 'companies'));
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
        $rules = array(
            'name' => 'required|min:5',
            'company_id' => 'required'
        );
        $input = Input::all();
        $validation = Validator::make($input, $rules);
        if ($validation->passes())
        {
            $client = Client::find($id);
            $client->update($input);
            return Redirect::route('clients.index', $id);
        }

        return Redirect::route('clients.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return Redirect::route('clients.index');
    }

    public function revoke($id) {
        $rules = array(
            'revoked' => 'required'
        );
        $input = Input::all();
        $validation = Validator::make($input, $rules);
        if ($validation->passes())
        {
            $client = Client::find($id);

            if ($input['revoked'] == true) {
                $client->tokens()->update(['revoked' => true]);
                $client->forceFill(['revoked' => true]);
            } else {
                $client->forceFill(['revoked' => false]);
            }

            $client->save();

            return Redirect::route('clients.index');
        }

        return Redirect::route('clients.index', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }
}
