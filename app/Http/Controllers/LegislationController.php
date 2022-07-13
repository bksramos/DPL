<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Legislation;
use Illuminate\Support\Facades\Storage;
use DB;

class LegislationController extends Controller
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
        $legislations = Legislation::orderBy('id', 'desc')->paginate(10);

        // return a view and pass in the above variable
        return view('legislation.index')->withLegislations($legislations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('legislation.create');
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
                'title'            => 'required|max:255',
                'type'             => 'required|max:10',
                'number'           => 'required|integer',
                'digit_initials'   => 'required|',
                'year'             => 'required|integer',
                'publish_date'     => 'required|date', 
            ));

        //store in database
        
        $legislation = new Legislation;

        //dd($legislation);

        $legislation->title          = $request->title;
        $legislation->type           = $request->type;
        $legislation->number         = $request->number;
        $legislation->digit_initials = $request->digit_initials;
        $legislation->year           = $request->year;
        $legislation->publish_date   = $request->publish_date;

        //save Dashboard
        if ($request->hasfile('featured_file')) {
            $file = $request->file('featured_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $location = public_path('legislations/');
            $file->move($location,  $filename);

            $legislation->file = $filename;
        }
        
        //dd($legislation);

        $legislation->save();

        Session::flash('success', 'Legislação Adicionada com sucesso!');

        return redirect()->route('legislation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $legislations = Legislation::find($id);
        return view('legislation.show')->withLegislation($legislations);
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
        $legislation = Legislation::find($id);    

        // return the view and pass in the var we previously created
        return view('legislation.edit')->withLegislation($legislation);
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
        $legislation = Legislation::find($id);

            $this->validate($request, array(
                'title'            => 'required|max:255',
                'type'             => 'required|max:10',
                'number'           => 'required|integer',
                'digit_initials'   => 'required|',
                'year'             => 'required|integer',
                'publish_date'     => 'required|date', 
                'featured_file'    => 'mimes:pdf'
            ));

        // save new data in database

        $legislation = Legislation::find($id);

        $legislation->title          = $request->input('title');
        $legislation->type           = $request->input('type');
        $legislation->number         = $request->input('number');
        $legislation->digit_initials = $request->input('digit_initials');
        $legislation->year           = $request->input('year');
        $legislation->publish_date   = $request->input('publish_date');
           
        if ($request->hasfile('featured_file')) {
            //add new report
            $report = $request->file('featured_file');
            $filename = time() . '.' . $report->getClientOriginalExtension();
            $location = public_path('legislations/');
            $report->move($location, $filename);

            $oldFile = $legislation->file;
            //update the database

            $legislation->file = $filename;
            //delete the old report
            Storage::delete($oldFile);
        }

        $legislation->save();

        // set flash data with success message
        Session::flash('success', 'As atualizações desta legislação foram salvas com sucesso');

        // redirect with flash data to course.show
        return redirect()->route('legislation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $legislation = Legislation::find($id);

        $legislation->delete();

        Session::flash('success', 'A legislação foi deletada com sucesso');
        return redirect()->route('legislation.index');
    }

    public function file($id)
    {
        $legislation = Legislation::find($id);
        // dd($course);
        return view('legislation.file')->withLegislation($legislation);
    }

    public function npa()
    {
        $legislations = DB::table('legislations')
             ->select('id', 'title', 'type', 'number', 'digit_initials',
                      'year', 'publish_date', 'created_at', 'updated_at')
             ->where('type','=', 'NPA')
             ->get();
        return view('legislation.npa')->withLegislations($legislations);
    }

    public function tca()
    {
        $legislations = DB::table('legislations')
             ->select('id', 'title', 'type', 'number', 'digit_initials',
                      'year', 'publish_date', 'created_at', 'updated_at')
             ->where('type','=', 'TCA')
             ->get();
        return view('legislation.tca')->withLegislations($legislations);
    }
}
