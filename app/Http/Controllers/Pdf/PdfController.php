<?php

namespace App\Http\Controllers\Pdf;

use App;
use PDF;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        //ładowanie danych do generowania bezpośrednio ze zmiennej 
        // $pdf = PDF::loadHTML('<h1>Test</h1>');
        
        //ładowanie z pliku html zlokalizowanym na serwerze
        // $pdf = PDF::loadFile(public_path().'/myfile.html');
        
        //ładowanie bezposrednio z widoku resources
        // $pdf = PDF::loadView('pdf.templates.offerUe', $Customer);
        
        //zapisanie pliku w folderze publicznym
        // $pdf->save('my_stored_file.pdf');
        
        //wyswietlenie pliku w przegladarce o wyznaczonej nazwie
        // $pdf->stream('download.pdf');
        
        //bezpośrednie pobieranie pliku pdf na dysk 
        // $pdf->download('download.pdf');
        
        $Customer = [
            'firstName' => 'Jan',
            'lastName' => 'Kowalski',
            'address' => 'ul. Miejska 6', 
            'postCode' => '12-124',
            'locality' => 'Warszawa',
            'phone' => '847-484-874'
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('pdf.templates.offerUe', $Customer);

        return $pdf->stream('download.pdf');
                
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
