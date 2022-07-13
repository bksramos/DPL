<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\PsychoEvaluation;
use Illuminate\Support\Facades\Storage;
use DB;

class PsychoEvaluationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psychoEvaluations = PsychoEvaluation::orderBy('id', 'desc')->paginate(10);

        // return a view and pass in the above variable
        return view('psycho.index')->withPsychoEvaluation($psychoEvaluations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psycho.create');
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
                'title'            => 'required|max:50',
                'description'      => 'required|max:255',
                'type'             => 'required|max:9',
                'number'           => 'required|max:2', 
                'year'             => 'required|integer',
                'publish_date'     => 'required|date', 
            ));

        //store in database
        
        $psychoEvaluation = new PsychoEvaluation;

        //dd($psychoEvaluation);

        $psychoEvaluation->title          = $request->title;
        $psychoEvaluation->description    = $request->description;
        $psychoEvaluation->type           = $request->type;
        $psychoEvaluation->number         = $request->number;
        $psychoEvaluation->year           = $request->year;
        $psychoEvaluation->publish_date   = $request->publish_date;

        //save Dashboard
        if ($request->hasfile('featured_file')) {
            $file = $request->file('featured_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $location = public_path('psycho/');
            $file->move($location,  $filename);

            $psychoEvaluation->file = $filename;
        }
        
        //dd($psychoEvaluation);

        $psychoEvaluation->save();

        Session::flash('success', 'Legislação Adicionada com sucesso!');

        return redirect()->route('psycho.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $psychoEvaluations = PsychoEvaluation::find($id);
        return view('psycho.show')->withPsychoEvaluation($psychoEvaluations);
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
        $psychoEvaluation = PsychoEvaluation::find($id);    

        // return the view and pass in the var we previously created
        return view('psycho.edit')->withPsychoEvaluation($psychoEvaluation);
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
        $psychoEvaluation = PsychoEvaluation::find($id);

            $this->validate($request, array(
                'title'            => 'required|max:50',
                'description'      => 'required|max:255',
                'type'             => 'required|max:9',
                'number'           => 'required|max:2', 
                'year'             => 'required|integer',
                'publish_date'     => 'required|date', 
                'featured_file'    => 'mimes:pdf'
            ));

        // save new data in database

        $psychoEvaluation = PsychoEvaluation::find($id);

        $psychoEvaluation->title          = $request->input('title');
        $psychoEvaluation->description    = $request->input('description');
        $psychoEvaluation->type           = $request->input('type');
        $psychoEvaluation->number         = $request->input('number');
        $psychoEvaluation->year           = $request->input('year');
        $psychoEvaluation->publish_date   = $request->input('publish_date');
           
        if ($request->hasfile('featured_file')) {
            //add new report
            $report = $request->file('featured_file');
            $filename = time() . '.' . $report->getClientOriginalExtension();
            $location = public_path('psycho/');
            $report->move($location, $filename);

            $oldFile = $psychoEvaluation->file;
            //update the database

            $psychoEvaluation->file = $filename;
            //delete the old report
            Storage::delete($oldFile);
        }

        $psychoEvaluation->save();

        // set flash data with success message
        Session::flash('success', 'As atualizações desta legislação foram salvas com sucesso');

        // redirect with flash data to course.show
        return redirect()->route('psycho.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psychoEvaluation = PsychoEvaluation::find($id);

        $psychoEvaluation->delete();

        Session::flash('success', 'A legislação foi deletada com sucesso');
        return redirect()->route('psycho.index');
    }

    public function file($id)
    {
        $psychoEvaluation = PsychoEvaluation::find($id);
        // dd($course);
        return view('psycho.file')->withPsychoEvaluation($psychoEvaluation);
    }

    public function evaluation()
    {
        $psychoEvaluations = DB::table('psycho_evaluations')
             ->select('id', 'description', 'title', 'type', 'number',
                      'year', 'publish_date', 'created_at', 'updated_at')
             ->where('type','=', 'Avaliação')
             ->get();
        return view('psycho.evaluation')->withPsychoEvaluation($psychoEvaluations);
    }

    public function profile()
    {
        $psychoEvaluations = DB::table('psycho_evaluations')
             ->select('id', 'description', 'title', 'type', 'number',
                      'year', 'publish_date', 'created_at', 'updated_at')
             ->where('type','=', 'Perfil')
             ->get();
        return view('psycho.profile')->withPsychoEvaluation($psychoEvaluations);
    }

}
