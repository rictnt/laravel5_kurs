<?php

namespace App\Http\Controllers\Angular;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AngularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('angular.index');
    }

    public function api()
    {
        $time = Carbon::now();
        return $time->toDateTimeString();
    }
}
