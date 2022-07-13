<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoalForm;
use Session;
use DB;
use Validator;

class GoalFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goalForm = GoalForm::orderBy('year', 'desc')->paginate(10);

        return view('goal.index')->withGoalForms($goalForm);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'division'          => 'required|max:10',
                'urgency'           => 'required|max:10',
                'priority'          => 'required|integer',
                'description'       => 'required|max:255',
                'unity'             => 'required|max:5',
                'quantity'          => 'required|integer',
                'unitary_value'     => 'required|between:0,99.99',
                'amount'            => 'required|between:0,99.99',
                'year'              => 'required|'
            ));

        //store in database
        
        $goalForm = new GoalForm;

        $goalForm->division        = $request->division;
        $goalForm->urgency         = $request->urgency;
        $goalForm->priority        = $request->priority;
        $goalForm->description     = $request->description;
        $goalForm->unity           = $request->unity;
        $goalForm->quantity        = $request->quantity;
        $goalForm->unitary_value   = $request->unitary_value;
        $goalForm->amount          = $request->amount;
        $goalForm->year            = $request->year; 

        //dd($goalForm);

        $goalForm->save();

        Session::flash('success', 'Item criado com sucesso!');

        return redirect()->route('goal.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the course in the database and save as a variable
        $goalForm = GoalForm::find($id);    

        // return the view and pass in the var we previously created
        return view('goal.edit')->withGoalForms($goalForm);
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

        //validate the data
        $goalForms = GoalForm::find($id);

            $this->validate($request, array(
                'division'          => 'required|max:10',
                'urgency'           => 'required|max:10',
                'priority'          => 'required|integer',
                'description'       => 'required|max:255',
                'unity'             => 'required|max:5',
                'quantity'          => 'required|integer',
                'unitary_value'     => 'required|between:0,99.99',
                'amount'            => 'required|between:0,99.99',
                'year'              => 'required|'
            ));

        // save new data in database

        $goalForms = GoalForm::find($id);

        $goalForms->division        = $request->input('division');
        $goalForms->urgency         = $request->input('urgency');
        $goalForms->priority        = $request->input('priority');
        $goalForms->description     = $request->input('description');
        $goalForms->unity           = $request->input('unity');
        $goalForms->quantity        = $request->input('quantity');
        $goalForms->unitary_value   = $request->input('unitary_value');
        $goalForms->amount          = $request->input('amount');
        $goalForms->year            = $request->input('year'); 

        $goalForms->save();

        // set flash data with success message
        Session::flash('success', 'As atualizações deste item foram salvas com sucesso');

        // redirect with flash data to course.show
        return redirect()->route('goal.index', $goalForms->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goalForms = GoalForm::find($id);

        $goalForms->delete();

        Session::flash('success', 'O item foi deletado com sucesso');
        return redirect()->route('goal.index');
    }
}
