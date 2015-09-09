<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $students = Student::all()->sortByDesc('nazwisko');
        return View('students.index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->imie = $request->imie;
        $student->nazwisko = $request->nazwisko;
        $student->adres = $request->adres;
        $student->kod_pocztowy = $request->kod_pocztowy;
        $student->miejscowosc = $request->miejscowosc;
        $student->telefon = $request->telefon;
        $student->save();
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', ['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', ['student' => $student]);
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
        $student = Student::findOrFail($id);
        $student->imie = $request->imie;
        $student->nazwisko = $request->nazwisko;
        $student->adres = $request->adres;
        $student->kod_pocztowy = $request->kod_pocztowy;
        $student->miejscowosc = $request->miejscowosc;
        $student->telefon = $request->telefon;
        $student->save();
        return 'Poprawnie dokonano aktualizacji';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return 'Student usuni�ty';
    }
}
