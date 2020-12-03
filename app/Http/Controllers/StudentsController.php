<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalForm;
use Illuminate\Http\Request;
use App\Student;
use App\Info;

class StudentsController extends Controller
{

    public function create()
    {

        return view('info.create');
    }

    //Create users

    public function store(MedicalForm $request)
    {
        $request->validate();
            
        $student = Student::create($request->all());

        $student->info()->create($request->only('view', 'age', 'date', 'doza', 'seria', 'reakcia', 'info'));

        return redirect()->route('info.create', $student)
            ->with('message', 'Карточка создана....');
    }
    //About user

    public function show($id)
    {
        $student = Student::find($id);

        if ($student === null) {
            return abort(404);
        }
        return view('info.info', compact('student'));
    }

    //Edit Users

    public function edit($id)
    {

        $student = Student::find($id);
        if ($student === null) {
            return abort(404);
        }

        return view('info.edit', compact('student'));
    }
    //View Table

    public function add($id)
    {
        $student = Student::find($id);

        if ($student === null) {
            return abort(404);
        }

        return view('info.add_table', compact('student'));
    }
    //Add new Table

    public function add_table(Request $request, $id)
    {

        $student = Student::find($id);

        if ($student === null) {
            return abort(404);
        }

        $request->validate();

        $student->info()->create($request->only('view', 'age', 'date', 'doza', 'seria', 'reakcia', 'info'));

        return redirect()->route('info.edit', compact('student'))->with('message', 'Таблица добавленна');
    }

    //Update users

    public function update(Request $request, $id)
    {
        $request->validate();

        $student = Student::find($id);

        $student->update($request->all());

        return redirect()->route('content')
            ->with('message', 'Карточка успешно изменена!');
    }

    //Delete users

    public function del($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('content', $student)->with('delete', 'Карточка успешно удалена!');
    }
}
