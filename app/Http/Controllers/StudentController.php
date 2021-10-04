<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Ville;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //READ
        // $student = Student::all(); // select * from Sudent
       
        return view("index" , [
            'students' => Student::all(),
            'villes' => Ville::all(),
        ]);
        // return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //On cree une variable pour cree un Student a partir du Model Student
        Student::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
          ]);
        
        //   //Autre maniere plus simple de l'ecrire au lieux de declarer chaque champ pour faire un $request
        //   $student = new Student();
        //   $student->fill($request->all());


        // On redirige vers page Index avec le new Student
        return redirect('home/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('show', ['student' =>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('edit', [
                'student' =>$student,
                'villes' => Ville::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        
        $student->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
          ]);
          // Une fois le update on redirige vers la page Index
          return redirect('home/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student ->delete();
        //On redirige vers la page index une fois l"operation Destroy completer
        return redirect("/home");

    }
}
