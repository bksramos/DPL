<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
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
        $courses = Course::orderBy('id', 'desc')->paginate(10);

        // return a view and pass in the above variable
        return view('course.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
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
                'title'             => 'required|max:255',
                'initials'          => 'required|max:10',
                'class'             => 'required|integer',
                'dateline_start'    => 'required|date'
            ));

        //store in database
        
        $course = new Course;

        // dd($request);

        $course->title = $request->title;
        $course->initials = $request->initials;
        $course->class = $request->class;
        $course->dateline_start = $request->dateline_start;

        //save Dashboard
        if ($request->hasfile('featured_dashboard')) {
            $dashboard = $request->file('featured_dashboard');
            $filename = time() . '.' . $dashboard->getClientOriginalExtension();
            // $location = public_path('dashboards/' . $filename);
            // Storage::disk($location);

            $location = public_path('dashboards/');
            $dashboard->move($location,  $filename);

            $course->dashboard = $filename;
        }
        
        //save Report
        if ($request->hasfile('featured_report')) {
            $report = $request->file('featured_report');
            $filename = time() . '.' . $report->getClientOriginalExtension();
            // $location = public_path('reports/' . $filename);
            // $report->save($location);

            $location = public_path('reports/');
            $report->move($location, $filename);

            $course->report = $filename;
        }
        // dd($course);

        $course->save();

        Session::flash('success', 'Curso criado com sucesso!');

        return redirect()->route('course.show', $course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('course.show')->withCourse($course);
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
        $course = Course::find($id);    

        // return the view and pass in the var we previously created
        return view('course.edit')->withCourse($course);
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
        $course = Course::find($id);

            $this->validate($request, array(
                'title'              => 'required|max:255',
                'initials'           => 'required|max:10',
                'class'              => 'required|integer',
                'dateline_start'     => 'required|date',
                'featured_dashboard' => 'mimes:html',
                'featured_report'    => 'mimes:pdf'
            ));

        // save new data in database

        $course = Course::find($id);

        $course->title              = $request->input('title');
        $course->initials           = $request->input('initials');
        $course->class              = $request->input('class');
        $course->dateline_start     = $request->input('dateline_start');
           
         if ($request->hasfile('featured_dashboard')) {
            //add new dashboard
            $dashboard = $request->file('featured_dashboard');
            $filename = time() . '.' . $dashboard->getClientOriginalExtension();
            $location = public_path('dashboards/');
            $dashboard->move($location,  $filename);

            $oldDashboard = $course->dashboard;
            //update the database

            $course->dashboard = $filename;
            //delete the old dashboard
            Storage::delete($oldDashboard);
        }
            if ($request->hasfile('featured_report')) {
            //add new report
            $report = $request->file('featured_report');
            $filename = time() . '.' . $report->getClientOriginalExtension();
            $location = public_path('reports/');
            $report->move($location, $filename);

            $oldReport = $course->report;
            //update the database

            $course->report = $filename;
            //delete the old report
            Storage::delete($oldReport);
        }

        $course->save();

        // set flash data with success message
        Session::flash('success', 'As atualizações deste curso foram salvas com sucesso');

        // redirect with flash data to course.show
        return redirect()->route('course.show', $course->id);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        $course->delete();

        Session::flash('success', 'O curso foi deletado com sucesso');
        return redirect()->route('course.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard($id)
    {
        $course = Course::find($id);
        // dd($course);
        return view('course.dashboard')->withCourse($course);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function report($id)
    {
        $course = Course::find($id);
        // dd($course);
        return view('course.report')->withCourse($course);
    }
}
