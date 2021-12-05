<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user_id = Auth::user()->id;
       $clients = Client::where('userId',$user_id)->get();
       return view('user.client.clients',compact('clients','user_id'));
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
        return 'test';
    }

    public function storeClient(Request $req){
        Client::create($req->except('_token'));
        return redirect()->back();
    }

       public function deleteClient($id){
        $user_id = Auth::user()->id;

           Client::where('id',$id,)->where('userId',$user_id)->delete();
           return redirect()->back();
      
    }

    public function updateclient($id)
    {
        $user_id = Auth::user()->id;
        $client = Client::where('userId',$user_id)->where('id',$id)->first();
      return view('user.client.edit',compact('client','user_id')) ;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
 

    public function updatePost(Request $req){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        //
        return 'test';
        return $req;
    }
}
