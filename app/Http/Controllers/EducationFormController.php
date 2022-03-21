<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\EducationForm;
use App\Models\EducationFormDetail;
use App\Models\EducationFormFinance;
use Validator;
use DB;
class EducationFormController extends Controller
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
        $educationForms = EducationForm::orderBy('id', 'desc')->paginate(10);

        // return a view and pass in the above variable
        //dd($education_forms);
        return view('education.index')->withEducationForms($educationForms);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        $this->validate($request, array(
                'plan'              => 'required|',
                'mission_number'    => 'required|max:2',
                'start_year'        => 'required|integer',
                'pronouncing_organ' => 'required|',
                'pronouncing_om'    => 'required|max:255',
                'training_track'    => 'required|max:10',
                'title'             => 'required|',
                'establishment'     => 'required|',
                'city'              => 'required|',
                'state_id'          => 'required|',
                'country'           => 'required|',
                'dateline_start'    => 'required|date',
                'dateline_finish'   => 'required|date',
                'duration'          => 'required|',
                'workload'          => 'required|'
            ));

        //store in database
        
        $education_form = new EducationForm;

        //dd($education_form);

        $education_form->plan              = $request->plan;
        $education_form->mission_number    = $request->mission_number;
        $education_form->start_year        = $request->start_year;
        $education_form->pronouncing_organ = $request->pronouncing_organ;
        $education_form->pronouncing_om    = $request->pronouncing_om;
        $education_form->training_track    = $request->training_track;
        $education_form->title             = $request->title;
        $education_form->establishment     = $request->establishment;
        $education_form->city              = $request->city;
        $education_form->state_id          = $request->state_id;
        $education_form->country           = $request->country;
        $education_form->dateline_start    = $request->dateline_start;
        $education_form->dateline_finish   = $request->dateline_finish;
        $education_form->duration          = $request->duration;
        $education_form->workload          = $request->workload;


        // dd($education_form);

        $education_form->save();

        Session::flash('success', 'Primeira parte PLAMENS preenchida com Sucesso!');

        return redirect()->route('education.details', $education_form->id);
    }

    public function details($id)
    {
        $educationForms = EducationForm::find($id);
        //dd($education_form);
        return view('education.details')->withEducationForms($educationForms);
    }

    public function storeDetails(EducationForm $educationForms)
    {
        //dd(request()->all());
        $data = request()->validate([
                'goals'                          => 'required',
                'subject_description'            => 'required',
                'research_line'                  => 'required',
                'similar_course'                 => 'required',
                'similar_course_name'            => 'required',
                'similar_course_last_5_years'    => 'required',
                'importance'                     => 'required',
                'justification'                  => 'required',
                'designated_id'                  => 'required',
                'vacancies_requested'            => 'required',
                'prerequisites'                  => 'required',
                'destination_after_course'       => 'required',
                'function_after_course'          => 'required',
                'desired_training'               => 'required',
                'pac'                            => 'required',
            ]);
        $data['education_form_id'] = DB::table('education_forms')->orderBy('id', 'desc')->first()->id;
        //dd($data);
        
        //dd($educationDetails);

        $educationDetails = EducationFormDetail::create($data);

        Session::flash('success', 'Segunda parte PLAMENS preenchida com Sucesso!');
        //$educationForms = EducationForms::find($id);
        return redirect()->route('education.finances', ['id' => $data['education_form_id']]);
    }

    public function finances($id)
    {
        $educationForms = EducationForm::find($id);
        //dd($education_form);
        return view('education.finances')->withEducationForms($educationForms);
    }

    public function storeFinances(EducationForm $educationForms, Request $request)
    {
        //dd(request()->ajax());
        if ($request->all()) 
        {
            $rules = array(
                'cost_help.*'            =>    'required',
                'salary.*'               =>    'required',
                'housing_assistance.*'   =>    'required',
                'baggage_transport.*'    =>    'required',
                'daily.*'                =>    'required',
                'personal_transport_1.*' =>    'required',
                'personal_transport_2.*' =>    'required',
                'course_cost.*'          =>    'required',
                'total_annual.*'         =>    'required',
                'course_year.*'          =>    'required',
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json([
                    'error' =>  $error->errors()->all()
                ]);
            }

            $cost_help =            $request->cost_help;
            $salary =               $request->salary;
            $housing_assistance =   $request->housing_assistance;
            $baggage_transport =    $request->baggage_transport;
            $daily =                $request->daily;
            $personal_transport_1 = $request->personal_transport_1;
            $personal_transport_2 = $request->personal_transport_2;
            $course_cost =          $request->course_cost;
            $total_annual =         $request->total_annual;
            $course_year  =         $request->course_year;

            for($count = 0; $count < count($cost_help); $count++)
            {
                $data = array(
                    'cost_help' =>  $cost_help[$count],
                    'salary' =>  $salary[$count],
                    'housing_assistance' =>  $housing_assistance[$count],
                    'baggage_transport' =>  $baggage_transport[$count],
                    'daily' =>  $daily[$count],
                    'personal_transport_1' =>  $personal_transport_1[$count],
                    'personal_transport_2' =>  $personal_transport_2[$count],
                    'course_cost' =>  $course_cost[$count],
                    'total_annual' =>  $total_annual[$count],
                    'course_year'  =>  $course_year[$count]
                );

                $data['education_form_id'] = DB::table('education_forms')->orderBy('id', 'desc')->first()->id;
                //dd($data);

                $insert_data[] = $data;
            }
            
            EducationFormFinance::insert($insert_data);

            return redirect()->route('education.justifications', ['id' => $data['education_form_id']]);
        }
    }

    public function justifications($id)
    {
        $educationForms = EducationForm::find($id);
        //dd($education_form);
        return view('education.justifications')->withEducationForms($educationForms);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $education_form = EducationForm::find($id);
        return view('education.show')->withEducationForm($education_form);
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
    }

    public function insert(Request $request)
    {

        dd(request()->all());
        if ($request->ajax()) 
        {
            $rules = array(
                'cost_help.*'            =>    'required',
                'salary.*'               =>    'required',
                'housing_assistance.*'   =>    'required',
                'baggage_transport.*'    =>    'required',
                'daily.*'                =>    'required',
                'personal_transport_1.*' =>    'required',
                'personal_transport_2.*' =>    'required',
                'course_cost.*'          =>    'required',
                'total_annual.*'         =>    'required',
                'course_year.*'          =>    'required',
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json([
                    'error' =>  $error->errors()->all()
                ]);
            }

            $cost_help =            $request->cost_help;
            $salary =               $request->salary;
            $housing_assistance =   $request->housing_assistance;
            $baggage_transport =    $request->baggage_transport;
            $daily =                $request->daily;
            $personal_transport_1 = $request->personal_transport_1;
            $personal_transport_2 = $request->personal_transport_2;
            $course_cost =          $request->course_cost;
            $total_annual =         $request->total_annual;
            $course_year  =         $request->course_year;

            for($count = 0; $count < count($first_name); $count++)
            {
                $data = array(
                    'cost_help' =>  $cost_help[$count],
                    'salary' =>  $salary[$count],
                    'housing_assistance' =>  $housing_assistance[$count],
                    'baggage_transport' =>  $baggage_transport[$count],
                    'daily' =>  $daily[$count],
                    'personal_transport_1' =>  $personal_transport_1[$count],
                    'personal_transport_2' =>  $personal_transport_2[$count],
                    'course_cost' =>  $course_cost[$count],
                    'total_annual' =>  $total_annual[$count],
                    'course_year'  =>  $course_year[$count]
                );

                $data['education_form_id'] = EducationForm::find($id);
                $insert_data[] = $data;
            }
            
            EducationFormFinance::insert($insert_data);

            return response()->json([
                'success'      =>   'Data Added Successfully!'
            ]);
        }
    }


}
