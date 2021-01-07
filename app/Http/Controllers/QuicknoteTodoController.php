<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class QuicknoteTodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Pass Todo Model aka(quicknotes_todo table) into $quicknoteTodo variable
        $quicknoteTodo = Todo::all();

        // $todoapi = response()->json([
        //     "success" => true,
        //     "message" => "QuickNote Todo List",
        //     "data" => $quicknoteTodo
        // ]);
        $results = json_decode($quicknoteTodo);
        // $results = 'working';

        return $results;
        // return view('layouts/admin', compact('results'));
        // return view('layouts/admin', [
        //     'results' => $results //passed down categories variable to route
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return Todo::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Todo::updateOrCreate(
            ['id' => $request->id],
            [
                'title' => $request->title,
                'description' => $request->description
            ]
        );

        return response()->json(['success' => 'Book saved successfully.']);



        // $input = $request->all();
        // $validator = Validator::make($input, [
        // 'first_name' => 'required',
        // 'last_name' => 'required',
        // 'address' => 'required'
        // ]);

        // if($validator->fails()){
        // return $this->sendError('Validation Error.', $validator->errors());       
        // }

        // $student = Student::create($input);
        // return response()->json([
        // "success" => true,
        // "message" => "Student created successfully.",
        // "data" => $student
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
        return Todo::find($id);
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
        $todo = Todo::find($id);
        $todo->update($request->all());
        return $todo;
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
        return Todo::deleted($id);
    }
}
