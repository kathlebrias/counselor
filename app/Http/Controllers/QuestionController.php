<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;


class QuestionController extends Controller
{
  // **
  //    * Display a listing of the resource.
  //  *
  //     * @return \Illuminate\Http\Response
  //   */
    public function index()
     {

        // $counselor= Counselor:: orderBy('category_type','question_type','question','counselor_name')->paginate(20);
        // return view('counselor.index')->with('counselor',$counselor);

     }

    /*
    * Show the form for creating a new resource.
    *
    *@return \Illuminate\Http\Response
    */
     public function create()
    {
        return view('question/create');
    }

    /*
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
     {
       $this->validate($request,[
         'category_type' => 'required',
         'question_type' => 'required',
         'question'      => 'required',
         'counselor_name'  => 'required'
       ]);

       //Creating Post

      // return $request->input();

        $question = new Question;
        $question->id = NULL;
        $question->counselor_id= $request->input('counselor_name');
        $question->category_id=$request->input('category_type');
        $question->type=$request->input('question_type');
        $question->question=$request->input('question');
        $question->save();


       return redirect()->route('question.create')->with('success','Question Added');
     }

     /*
    * Display the specified resource.
    *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
     {


     }

    /*
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {


    }

    /*
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {


    }

    /*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {

    }
}
