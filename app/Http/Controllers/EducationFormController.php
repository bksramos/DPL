<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\EducationForm;
use App\Models\EducationFormDetail;
use App\Models\EducationFormFinance;
use App\Models\EducationFormJustification;
use App\Models\EducationFormPrevious;
use App\Models\EducationFormFeature;
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
        return view('education-form.index')->withEducationForms($educationForms);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education-form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        /* criando array com todas as requisições que são feitas no formulário*/
        $rules = array(
        //education_forms
        'plan'                       => 'required|',
        'mission_number'             => 'required|max:2',
        'start_year'                 => 'required|max:4',
        'pronouncing_organ'          => 'required|',
        'pronouncing_om'             => 'required|',
        'training_track'             => 'required|',
        'title'                      => 'required|max:100',
        'establishment'              => 'required|',
        'city'                       => 'required|',
        'country'                    => 'required|',
        'dateline_start'             => 'required|date',
        'dateline_finish'            => 'required|date',
        'duration'                   => 'required|',
        'workload'                   => 'required|',

        //education_form_details part1
        'goals'                      => 'required|',
        'subject_description'        => 'required|',
        'research_line'              => 'required|',
        'similar_course'             => 'required|',
        'institution_similar_course' => '|',

        //education_form_previouses
        'of_gd.*'                    => '|',
        'name.*'                     => '|',
        'om.*'                       => '|',
        'current_function.*'         => '|',

        //education_form_details part2
        'importance'                 => 'required|',
        'justification'              => 'required|',
        'designated'                 => 'required|',
        'vacancies_requested'        => 'required|',
        'prerequisites'              => 'required|',
        'destination_after_course'   => 'required|',
        'function_after_course'      => 'required|',
        'desired_training'           => 'required|',
        'pac'                        => 'required|',

        //education_form_finances
        'cost_help.*'                => 'required|',
        'salary.*'                   => 'required|',
        'housing_assistance.*'       => 'required|',   
        'baggage_transport.*'        => 'required|',   
        'daily.*'                    => 'required|',
        'personal_transport_1.*'     => 'required|',   
        'personal_transport_2.*'     => 'required|',
        'course_cost.*'              => 'required|',
        'total_annual.*'             => 'required|',
        'course_year.*'              => 'required|max:1',  

        //education_form_justifications
        'detailed_justification'     => 'required|',

        //education_form_features
        'impact'                     => 'required|',
        'mission_type'               => 'required|',
        'institutional_commitments'  => 'required|',
        'training_systems'           => 'required|',
        'capacity_adherence'         => 'required|',
        'rh_training'                => 'required|',
        'bilateral'                  => 'required|',
        );

        /*regra de erro de requisição, caso haja algum erro irá aparecer uma */
        /* tela com as requisições ajax e o erro detectado */
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json([
                'error' =>  $error->errors()->all()
            ]);
        }

        /* organziando as informações para passar os dados para o banco de dados */
        //education_forms
        $plan                       = $request->plan;
        $mission_number             = $request->mission_number;
        $start_year                 = $request->start_year;
        $pronouncing_organ          = $request->pronouncing_organ;
        $pronouncing_om             = $request->pronouncing_om;
        $training_track             = $request->training_track;
        $title                      = $request->title;
        $establishment              = $request->establishment;
        $city                       = $request->city;
        $state                      = $request->state;
        $country                    = $request->country;
        $dateline_start             = $request->dateline_start;
        $dateline_finish            = $request->dateline_finish;
        $duration                   = $request->duration;
        $workload                   = $request->workload;

        //education_form_details part1
        $goals                      = $request->goals;
        $subject_description        = $request->subject_description;
        $research_line              = $request->research_line;
        $similar_course             = $request->similar_course;
        $institution_similar_course = $request->institution_similar_course;

        //education_form_previouses
        $of_gd                      = $request->of_gd;
        $name                       = $request->name;
        $om                         = $request->om;
        $current_function           = $request->current_function;

        //education_form_details part2
        $importance                 = $request->importance;
        $justification              = $request->justification;
        $designated                 = $request->designated;
        $vacancies_requested        = $request->vacancies_requested;
        $prerequisites              = $request->prerequisites;
        $destination_after_course   = $request->destination_after_course;
        $function_after_course      = $request->function_after_course;
        $desired_training           = $request->desired_training;
        $pac                        = $request->pac;

        //education_form_finances
        $cost_help                  = $request->cost_help;
        $salary                     = $request->salary;
        $housing_assistance         = $request->housing_assistance;
        $baggage_transport          = $request->baggage_transport;
        $daily                      = $request->daily;
        $personal_transport_1       = $request->personal_transport_1;
        $personal_transport_2       = $request->personal_transport_2;
        $course_cost                = $request->course_cost;
        $total_annual               = $request->total_annual;
        $course_year                = $request->course_year;

        //education_form_justifications
        $detailed_justification = $request->detailed_justification;

        //education_form_features
        $impact                    = $request->impact;
        $mission_type              = $request->mission_type;
        $institutional_commitments = $request->institutional_commitments;
        $training_systems          = $request->training_systems;
        $capacity_adherence        = $request->capacity_adherence;
        $rh_training               = $request->rh_training;
        $bilateral                 = $request->bilateral;
        

        /* organizando os dados que irão para a tabela education_forms */
        $data1 = array(
            'plan'                   => $plan,
            'mission_number'         => $mission_number,
            'start_year'             => $start_year,
            'pronouncing_organ'      => $pronouncing_organ,
            'pronouncing_om'         => $pronouncing_om,
            'training_track'         => $training_track,
            'title'                  => $title,
            'establishment'          => $establishment,
            'city'                   => $city,
            'state'                  => $state,
            'country'                => $country,
            'dateline_start'         => $dateline_start,
            'dateline_finish'        => $dateline_finish,
            'duration'               => $duration,
            'workload'               => $workload,
            'created_at'             => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'             => date("Y-m-d H:i:s", strtotime('now'))
        );

        // dd($data1);

        $education_form = new EducationForm;
        $insert_data1[] = $data1;

        EducationForm::insert($insert_data1);

        /* organizando os dados que irão para a tabela education_form_details */
        $data2 = array(
            'goals'                      => $goals,
            'subject_description'        => $subject_description,
            'research_line'              => $research_line,
            'similar_course'             => $similar_course,
            'institution_similar_course' => $institution_similar_course,
            'importance'                 => $importance,
            'justification'              => $justification,
            'designated'                 => $designated,
            'vacancies_requested'        => $vacancies_requested,
            'prerequisites'              => $prerequisites,
            'destination_after_course'   => $destination_after_course,
            'function_after_course'      => $function_after_course,
            'desired_training'           => $desired_training,
            'pac'                        => $pac,
            'created_at'                 => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'                 => date("Y-m-d H:i:s", strtotime('now'))
        );
        $data2['education_form_id'] = DB::table('education_forms')->orderBy('id', 'desc')->first()->id;

        $education_form_details = new EducationFormDetail;
        $insert_data2[] = $data2;

        EducationFormDetail::insert($insert_data2);

        /* organizando os dados que irão para a tabela education_form_justifications */
        $data3 = array(
            'detailed_justification'    => $detailed_justification,
            'created_at'                => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'                => date("Y-m-d H:i:s", strtotime('now'))
        );
        $data3['education_form_id'] = DB::table('education_forms')->orderBy('id', 'desc')->first()->id;

        $education_form_justifications = new EducationFormJustification;
        $insert_data3[] = $data3;

        EducationFormJustification::insert($insert_data3);


        /* organizando os dados que irão para a tabela education_form_features */
        $data4 = array(
            'impact'                    => $impact,
            'mission_type'              => $mission_type,
            'institutional_commitments' => $institutional_commitments,
            'training_systems'          => $training_systems,
            'capacity_adherence'        => $capacity_adherence,
            'rh_training'               => $rh_training,
            'bilateral'                 => $bilateral,
            'created_at'                => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'                => date("Y-m-d H:i:s", strtotime('now'))
        );
        $data4['education_form_id'] = DB::table('education_forms')->orderBy('id', 'desc')->first()->id;

        $education_form_features = new EducationFormFeature;
        $insert_data4[] = $data4;

        EducationFormFeature::insert($insert_data4);

        /* organizando os dados para os campos dinâmicos */

        /* dados da tabela education_form_previouses */
        for($count = 0; $count < count($of_gd); $count++)
        {
            $data5 = array(
                'of_gd'              =>  $of_gd[$count],
                'name'               =>  $name[$count],
                'om'                 =>  $om[$count],
                'current_function'   =>  $current_function[$count],
                'created_at'         => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at'         => date("Y-m-d H:i:s", strtotime('now')),
            );

            $data5['education_form_id'] = DB::table('education_forms')->orderBy('id', 'desc')->first()->id;
            $insert_data5[] = $data5;
        }
        EducationFormPrevious::insert($insert_data5);

        /* dados da tabela education_form_finances */
        for($count = 0; $count < count($cost_help); $count++)
        {
            $data6 = array(
                'cost_help' =>  $cost_help[$count],
                'salary' =>  $salary[$count],
                'housing_assistance' =>  $housing_assistance[$count],
                'baggage_transport' =>  $baggage_transport[$count],
                'daily' =>  $daily[$count],
                'personal_transport_1' =>  $personal_transport_1[$count],
                'personal_transport_2' =>  $personal_transport_2[$count],
                'course_cost' =>  $course_cost[$count],
                'total_annual' =>  $total_annual[$count],
                'course_year'  =>  $course_year[$count],
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
            );

            $data6['education_form_id'] = DB::table('education_forms')->orderBy('id', 'desc')->first()->id;
            $insert_data6[] = $data6;
        }
        EducationFormFinance::insert($insert_data6);

        return redirect()->route('education-form.index');
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

        $education_form_details = $education_form->EducationFormDetails()->get();
        $education_form_justifications = $education_form->EducationFormJustifications()->get();
        $education_form_previouses = $education_form->EducationFormPreviouses()->get();
        $education_form_finances = $education_form->EducationFormFinances()->get();
        $education_form_features = $education_form->EducationFormFeatures()->get();
        // dd($education_form_details);
        return view('education-form.show', compact('education_form', 'education_form_details', 'education_form_justifications', 'education_form_previouses', 'education_form_finances', 'education_form_features'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($education_form)
    {
        $education_form_details         = EducationForm::find($education_form)->EducationFormDetails;
        $education_form_justifications  = EducationForm::find($education_form)->EducationFormJustifications;
        $education_form_features        = EducationForm::find($education_form)->EducationFormFeatures;
        $education_form_previouses      = EducationForm::find($education_form)->EducationFormPreviouses;
        $education_form_finances        = EducationForm::find($education_form)->EducationFormFinances;
        $education_form                 = EducationForm::find($education_form);    
        // dd($education_form_features);

        return view('education-form.edit', compact('education_form', 'education_form_details', 'education_form_justifications', 'education_form_features', 'education_form_previouses', 'education_form_finances'));
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
        $education_form = EducationForm::find($id);
        
        /* criando array com todas as requisições que são feitas no formulário*/
        $rules = array(
        //education_forms
        'plan'                       => 'required|',
        'mission_number'             => 'required|max:2',
        'start_year'                 => 'required|max:4',
        'pronouncing_organ'          => 'required|',
        'pronouncing_om'             => 'required|',
        'training_track'             => 'required|',
        'title'                      => 'required|max:100',
        'establishment'              => 'required|',
        'city'                       => 'required|',
        'country'                    => 'required|',
        'dateline_start'             => 'required|date',
        'dateline_finish'            => 'required|date',
        'duration'                   => 'required|',
        'workload'                   => 'required|',

        //education_form_details part1
        'goals'                      => 'required|',
        'subject_description'        => 'required|',
        'research_line'              => 'required|',
        'similar_course'             => 'required|',
        'institution_similar_course' => '|',

        //education_form_previouses
        'of_gd.*'                    => '|',
        'name.*'                     => '|',
        'om.*'                       => '|',
        'current_function.*'         => '|',

        //education_form_details part2
        'importance'                 => 'required|',
        'justification'              => 'required|',
        'designated'                 => 'required|',
        'vacancies_requested'        => 'required|',
        'prerequisites'              => 'required|',
        'destination_after_course'   => 'required|',
        'function_after_course'      => 'required|',
        'desired_training'           => 'required|',
        'pac'                        => 'required|',

        //education_form_finances
        'cost_help.*'                => 'required|',
        'salary.*'                   => 'required|',
        'housing_assistance.*'       => 'required|',   
        'baggage_transport.*'        => 'required|',   
        'daily.*'                    => 'required|',
        'personal_transport_1.*'     => 'required|',   
        'personal_transport_2.*'     => 'required|',
        'course_cost.*'              => 'required|',
        'total_annual.*'             => 'required|',
        'course_year.*'              => 'required|max:1',  

        //education_form_justifications
        'detailed_justification'     => 'required|',

        //education_form_features
        'impact'                     => 'required|',
        'mission_type'               => 'required|',
        'institutional_commitments'  => 'required|',
        'training_systems'           => 'required|',
        'capacity_adherence'         => 'required|',
        'rh_training'                => 'required|',
        'bilateral'                  => 'required|',
        );

        /*regra de erro de requisição, caso haja algum erro irá aparecer uma */
        /* tela com as requisições ajax e o erro detectado */
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json([
                'error' =>  $error->errors()->all()
            ]);
        }

        /* organziando as informações para passar os dados para o banco de dados */
        //education_forms
        $plan                       = $request->plan;
        $mission_number             = $request->mission_number;
        $start_year                 = $request->start_year;
        $pronouncing_organ          = $request->pronouncing_organ;
        $pronouncing_om             = $request->pronouncing_om;
        $training_track             = $request->training_track;
        $title                      = $request->title;
        $establishment              = $request->establishment;
        $city                       = $request->city;
        $state                      = $request->state;
        $country                    = $request->country;
        $dateline_start             = $request->dateline_start;
        $dateline_finish            = $request->dateline_finish;
        $duration                   = $request->duration;
        $workload                   = $request->workload;

        //education_form_details part1
        $goals                      = $request->goals;
        $subject_description        = $request->subject_description;
        $research_line              = $request->research_line;
        $similar_course             = $request->similar_course;
        $institution_similar_course = $request->institution_similar_course;

        //education_form_previouses
        $of_gd                      = $request->of_gd;
        $name                       = $request->name;
        $om                         = $request->om;
        $current_function           = $request->current_function;

        //education_form_details part2
        $importance                 = $request->importance;
        $justification              = $request->justification;
        $designated                 = $request->designated;
        $vacancies_requested        = $request->vacancies_requested;
        $prerequisites              = $request->prerequisites;
        $destination_after_course   = $request->destination_after_course;
        $function_after_course      = $request->function_after_course;
        $desired_training           = $request->desired_training;
        $pac                        = $request->pac;

        //education_form_finances
        $cost_help                  = $request->cost_help;
        $salary                     = $request->salary;
        $housing_assistance         = $request->housing_assistance;
        $baggage_transport          = $request->baggage_transport;
        $daily                      = $request->daily;
        $personal_transport_1       = $request->personal_transport_1;
        $personal_transport_2       = $request->personal_transport_2;
        $course_cost                = $request->course_cost;
        $total_annual               = $request->total_annual;
        $course_year                = $request->course_year;

        //education_form_justifications
        $detailed_justification = $request->detailed_justification;

        //education_form_features
        $impact                    = $request->impact;
        $mission_type              = $request->mission_type;
        $institutional_commitments = $request->institutional_commitments;
        $training_systems          = $request->training_systems;
        $capacity_adherence        = $request->capacity_adherence;
        $rh_training               = $request->rh_training;
        $bilateral                 = $request->bilateral;
        

        /* organizando os dados que irão para a tabela education_forms */
        $data1 = array(
            'plan'                   => $plan,
            'mission_number'         => $mission_number,
            'start_year'             => $start_year,
            'pronouncing_organ'      => $pronouncing_organ,
            'pronouncing_om'         => $pronouncing_om,
            'training_track'         => $training_track,
            'title'                  => $title,
            'establishment'          => $establishment,
            'city'                   => $city,
            'state'                  => $state,
            'country'                => $country,
            'dateline_start'         => $dateline_start,
            'dateline_finish'        => $dateline_finish,
            'duration'               => $duration,
            'workload'               => $workload,
            'created_at'             => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'             => date("Y-m-d H:i:s", strtotime('now'))
        );

        $insert_data1[] = $data1;
        $education_form = EducationForm::find($id);
        $education_form->fill($data1);
        $education_form->save();


        /* organizando os dados que irão para a tabela education_form_details */
        $data2 = array(
            'goals'                      => $goals,
            'subject_description'        => $subject_description,
            'research_line'              => $research_line,
            'similar_course'             => $similar_course,
            'institution_similar_course' => $institution_similar_course,
            'importance'                 => $importance,
            'justification'              => $justification,
            'designated'                 => $designated,
            'vacancies_requested'        => $vacancies_requested,
            'prerequisites'              => $prerequisites,
            'destination_after_course'   => $destination_after_course,
            'function_after_course'      => $function_after_course,
            'desired_training'           => $desired_training,
            'pac'                        => $pac,
            'created_at'                 => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'                 => date("Y-m-d H:i:s", strtotime('now'))
        );
        
        $insert_data2[] = $data2;

        $education_form_details = EducationFormDetail::where('education_form_id', $education_form->id)->first();
        $education_form_details->fill($data2);
        $education_form_details->save();

        /* organizando os dados que irão para a tabela education_form_justifications */
        $data3 = array(
            'detailed_justification'    => $detailed_justification,
            'created_at'                => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'                => date("Y-m-d H:i:s", strtotime('now'))
        );
        
        $insert_data3[] = $data3;

        $education_form_justifications = EducationFormJustification::where('education_form_id', $education_form->id)->first();
        $education_form_justifications->fill($data3);
        $education_form_justifications->save();

        /* organizando os dados que irão para a tabela education_form_features */
        $data4 = array(
            'impact'                    => $impact,
            'mission_type'              => $mission_type,
            'institutional_commitments' => $institutional_commitments,
            'training_systems'          => $training_systems,
            'capacity_adherence'        => $capacity_adherence,
            'rh_training'               => $rh_training,
            'bilateral'                 => $bilateral,
            'created_at'                => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at'                => date("Y-m-d H:i:s", strtotime('now'))
        );

        $insert_data4[] = $data4;

        $education_form_features = EducationFormFeature::where('education_form_id', $education_form->id)->first();
        $education_form_features->fill($data4);
        $education_form_features->save();

        /* organizando os dados para os campos dinâmicos */

        /* dados da tabela education_form_previouses */
        for($count = 0; $count < count($of_gd); $count++)
        {
            $data5 = array(
                'of_gd'              =>  $of_gd[$count],
                'name'               =>  $name[$count],
                'om'                 =>  $om[$count],
                'current_function'   =>  $current_function[$count],
                'created_at'         => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at'         => date("Y-m-d H:i:s", strtotime('now')),
            );

            $insert_data5[] = $data5;
        }
        EducationFormPrevious::where('education_form_id', $education_form->id)->update($data5);

        /* dados da tabela education_form_finances */
        for($count = 0; $count < count($cost_help); $count++)
        {
            $data6 = array(
                'cost_help' =>  $cost_help[$count],
                'salary' =>  $salary[$count],
                'housing_assistance' =>  $housing_assistance[$count],
                'baggage_transport' =>  $baggage_transport[$count],
                'daily' =>  $daily[$count],
                'personal_transport_1' =>  $personal_transport_1[$count],
                'personal_transport_2' =>  $personal_transport_2[$count],
                'course_cost' =>  $course_cost[$count],
                'total_annual' =>  $total_annual[$count],
                'course_year'  =>  $course_year[$count],
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
            );

            $insert_data6[] = $data6;
        }
        $education_form_finances = EducationFormFinance::where('education_form_id', $education_form->id)->first();
        $education_form_finances->fill($data6);
        $education_form_finances->save();

        return redirect()->route('education-form.index', compact('education_form', 'education_form_details', 'education_form_justifications', 'education_form_features', 'education_form_finances'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education_form = EducationForm::find($id);
        $education_form->EducationFormFinances()->delete();
        $education_form->EducationFormDetails()->delete();
        $education_form->EducationFormJustifications()->delete();
        $education_form->EducationFormPreviouses()->delete();
        $education_form->EducationFormFeatures()->delete();
        $education_form->delete();

        Session::flash('success', 'O curso foi deletado com sucesso');
        return redirect()->route('education-form.index');
    }

}
