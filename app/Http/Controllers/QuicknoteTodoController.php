<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Validator;

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
        $quicknoteTodos = Todo::all();

        // $todoapi = response()->json([
        //     "success" => true,
        //     "message" => "QuickNote Todo List",
        //     "data" => $quicknoteTodo
        // ]);
        $results = json_decode($quicknoteTodos);
        // $results = response()->json($quicknoteTodos, 200);
        return $results;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ////No create function---Creating is handled through "Store" function
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

        //Ajax

        // $validator = Validator::make($input, [
        // 'first_name' => 'required',
        // 'last_name' => 'required',
        // 'address' => 'required'
        // ]);

        // if($validator->fails()){
        // return $this->sendError('Validation Error.', $validator->errors());       
        // }

        Todo::updateOrCreate(
            ['id' => $request->id],
            [
                'title' => $request->title,
                'description' => $request->description
            ]
        );

        return response()->json(['success' => 'Task saved successfully.']);



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
        //get QuickTodo by $id
        $quicknoteTodo = Todo::find($id);

        //returns if there is no such $id
        if (is_null($quicknoteTodo)) {
            return response()->json(['message' => 'No such task']);
        }
        //else return QuickTodo
        return response()->json($quicknoteTodo, 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //No edit function---Editing is handled through "Store" function
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
        //get QuickTodo by $id
        $quicknoteTodo = Todo::find($id);

        //returns if there is no such $id
        if (is_null($quicknoteTodo)) {
            return response()->json(['message' => 'No such task'], 404);
        }

        //else return QuickTodo and update it
        $quicknoteTodo->update($request->all());
        return response()->json($quicknoteTodo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //get QuickTodo by $id
        $quicknoteTodo = Todo::find($id);

        //returns if there is no such $id
        if (is_null($quicknoteTodo)) {
            return response()->json(['message' => 'No such task'], 404);
        }

        //else return QuickTodo and update it
        $quicknoteTodo->delete();
        return response()->json(null, 204);
    }
}
