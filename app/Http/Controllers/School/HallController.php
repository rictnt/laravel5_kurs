<?php

namespace App\Http\Controllers\School;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('school.hall.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $html = 'Odpowiedź kontrolera School\HallController.<br>';
        $html .= 'Zwrot z funkcji create()<br><br>';
        $html .= 'Ta funkcja może zwracać formularz do wypełnienia danymi nowej sali.';
        return $html;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $numerSali = $request->input('numerSali');
        $pietro = $request->input('pietro');
        $html = 'Odpowiedź kontrolera School\HallController.<br>';
        $html .= 'Zwrot z funkcji store()<br><br>';
        $html .= 'Funkcja ta doda do bazy danych obiekt, z wartościami pochodzącymi z formularza do tworzenia nowej sali.<br><br>';
        $html .= 'Przesyłane wartości: ' . $numerSali . ', ' . $pietro;
        return $html;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($sala)
    {
        $html = 'Odpowiedź kontrolera School\HallController.<br>';
        $html .= 'Zwrot z funkcji show()<br><br>';
        $html .= 'Fukcja przykładowo pojazuje szczegóły o sali nr:' . $sala;
        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($sala)
    {
        $html = 'Odpowiedź kontrolera School\HallController.<br>';
        $html .= 'Zwrot z funkcji edit()<br><br>';
        $html .= 'Funkcja generuje formularz do edycji danych o sali nr: ' . $sala;
        return $html;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $sala)
    {
        $numerSali = $request->input('numerSali');
        $pietro = $request->input('pietro');
        $html = 'Odpowiedź kontrolera School\HallController.<br>';
        $html .= 'Zwrot z funkcji update()<br><br>';
        $html .= 'Funkcja aktualizuje dane sali nr: ' . $sala . '<br><br>';
        $html .= 'Przesyłane wartości: ' . $numerSali . ', ' . $pietro;
        return $html;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($sala)
    {
        $html = 'Odpowiedź kontrolera School\HallController.<br>';
        $html .= 'Zwrot z funkcji destroy()<br><br>';
        $html .= 'Funkcja usuwa wpis z bazy danych, dostyczący sali nr: ' . $sala;
        return $html;
    }
}
