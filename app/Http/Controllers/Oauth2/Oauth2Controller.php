<?php

namespace App\Http\Controllers\Oauth2;

use Illuminate\Http\Request;
use Authorizer;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Oauth2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('oauth2.index');
    }
    
    public function generatetoken()
    {
        $params = [ 
            'grant_type'    => 'password',
            'client_id'     => 'f3d259ddd3ed8ff3843839b',
            'client_secret' => '4c7f6f8fa93d59c45502c0ae8c4a95b',
            'username'         => Auth::user()->email,
            'password'         => 'kowal'
        ];
        
        $request = \Request::instance();
        
        $request->request->replace($params);
        Authorizer::setRequest($request);
        return view('oauth2.generatetoken', ['token' => Authorizer::issueAccessToken()]);
    }
    
    public function getuser()
    {
        $user_id = Authorizer::getResourceOwnerId();
        $user=\App\User::find($user_id);
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
