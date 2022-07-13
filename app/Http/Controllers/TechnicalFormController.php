<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\TechnicalForm;
use App\Models\TechnicalFormMember;
use Validator;
use DB;
class TechnicalFormController extends Controller
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
        $technicalForms = TechnicalForm::orderBy('id', 'desc')->paginate(10);

        // return a view and pass in the above variable
        //dd($education_forms);
        return view('technical-form.index')->withTechnicalForms($technicalForms);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('technical-form.create');
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
        'mission_number'            => 'required|max:2',
        'bilateral_activity'        => 'required|',
        'fpab_number'               => 'max:13',
        'mission_burden'            => 'required|',
        'title'                     => 'required|',
        'establishment'             => 'required|max:100',
        'address'                   => 'required|max:100',
        'city'                      => 'required|',
        'country'                   => 'required|',
        'dateline_start'            => 'required|date',
        'dateline_finish'           => 'required|date',
        'event_duration'            => 'required|',
        'outward_transit'           => 'required|max:2',
        'back_transit'              => 'required|max:2',
        'mission_duration'          => 'required|max:2',
        'third_party_service'       => 'required|',
        'mi_daily'                  => 'required|',
        'cv_daily'                  => 'required|',
        'mi_tickets'                => 'required|',
        'cv_tickets'                => 'required|',
        'supply_30'                 => 'required|',
        'supply_39'                 => 'required|',
        'justifications'            => 'required|',
        'observations'              => 'required|',
        'impact'                    => 'required|',
        'mission_type'              => 'required|',
        'institutional_commitments' => 'required|',
        'training_systems'          => 'required|',
        'capacity_adherence'        => 'required|',
        'rh_training'               => 'required|',
        'bilateral'                 => 'required|',
        'of_amount.*'               => 'required',
        'of_title.*'                => 'required',
        'gr_amount.*'               => 'required',
        'gr_title.*'                => 'required',
        'cv_amount.*'               => 'required',
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
        $mission_number            = $request->mission_number;
        $bilateral_activity        = $request->bilateral_activity;
        $fpab_number               = $request->fpab_number;
        $mission_burden            = $request->mission_burden;
        $title                     = $request->title;
        $establishment             = $request->establishment;
        $address                   = $request->address;
        $city                      = $request->city;
        $country                   = $request->country;
        $dateline_start            = $request->dateline_start;
        $dateline_finish           = $request->dateline_finish;
        $event_duration            = $request->event_duration;
        $outward_transit           = $request->outward_transit;
        $back_transit              = $request->back_transit;
        $mission_duration          = $request->mission_duration;
        $third_party_service       = $request->third_party_service;
        $mi_daily                  = $request->mi_daily;
        $cv_daily                  = $request->cv_daily;
        $mi_tickets                = $request->mi_tickets;
        $cv_tickets                = $request->cv_tickets;
        $supply_30                 = $request->supply_30;
        $supply_39                 = $request->supply_39;
        $justifications            = $request->justifications;
        $observations              = $request->observations;
        $impact                    = $request->impact;
        $mission_type              = $request->mission_type;
        $institutional_commitments = $request->institutional_commitments;
        $training_systems          = $request->training_systems;
        $capacity_adherence        = $request->capacity_adherence;
        $rh_training               = $request->rh_training;
        $bilateral                 = $request->bilateral;
        $of_amount   =   $request->of_amount;
        $of_title    =   $request->of_title;
        $gr_amount   =   $request->gr_amount;
        $gr_title    =   $request->gr_title;
        $cv_amount   =   $request->cv_amount;

        /* organizando os dados que irão para a tabela technical_forms */
        $data_ = array(
            'mission_number'            => $mission_number,
            'bilateral_activity'        => $bilateral_activity,
            'fpab_number'               => $fpab_number,
            'mission_burden'            => $mission_burden,
            'title'                     => $title,
            'establishment'             => $establishment,
            'address'                   => $address,
            'city'                      => $city,
            'country'                   => $country,
            'dateline_start'            => $dateline_start,
            'dateline_finish'           => $dateline_finish,
            'event_duration'            => $event_duration,
            'outward_transit'           => $outward_transit,
            'back_transit'              => $back_transit,
            'mission_duration'          => $mission_duration,
            'third_party_service'       => $third_party_service,
            'mi_daily'                  => $mi_daily,
            'cv_daily'                  => $cv_daily,
            'mi_tickets'                => $mi_tickets,
            'cv_tickets'                => $cv_tickets,
            'supply_30'                 => $supply_30,
            'supply_39'                 => $supply_39,
            'justifications'            => $justifications,
            'observations'              => $observations,
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
        // dd($data6);

        $technical_form = new TechnicalForm;
        $insert_data_[] = $data_;

        TechnicalForm::insert($insert_data_);

        /* inserindo os dados nas duas tabelas do banco de dados */

        /* organizando os dados para os campos dinâmicos */
        /* os campos dinâmicos serão inseridos na tabela technical_form_members */
        for($count = 0; $count < count($of_title); $count++)
        {
            $data = array(
                'of_title'   =>  $of_title[$count],
                'of_amount'  =>  $of_amount[$count],
                'gr_title'   =>  $gr_title[$count],
                'gr_amount'  =>  $gr_amount[$count],
                'cv_amount'  =>  $cv_amount[$count],
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
            );

            $data['technical_form_id'] = DB::table('technical_forms')->orderBy('id', 'desc')->first()->id;
            $insert_data[] = $data;
        }
        TechnicalFormMember::insert($insert_data);

        // return response()->json(['success'=>'Ajax request submitted successfully']);
        return redirect()->route('technical-form.index');
    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TechnicalForm $technicalForms, $id)
    {
        $technicalForms = TechnicalForm::find($id);
        $relations = $technicalForms->TechnicalFormMembers()->get();
        // dd($relations);
        return view('technical-form.show', compact('technicalForms', 'relations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($technical_form)
    {
        $technical_form_members = TechnicalForm::find($technical_form)->TechnicalFormMembers;
        $technical_form         = TechnicalForm::find($technical_form);
        // dd($technical_form_members);
        return view('technical-form.edit', compact('technical_form', 'technical_form_members'));
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
        $technical_form = TechnicalForm::find($id);


        /* criando array com todas as requisições que são feitas no formulário*/
        $rules = array(
        'mission_number'            => 'required|max:2',
        'bilateral_activity'        => 'required|',
        'fpab_number'               => 'max:13',
        'mission_burden'            => 'required|',
        'title'                     => 'required|',
        'establishment'             => 'required|max:100',
        'address'                   => 'required|max:100',
        'city'                      => 'required|',
        'country'                   => 'required|',
        'dateline_start'            => 'required|date',
        'dateline_finish'           => 'required|date',
        'event_duration'            => 'required|',
        'outward_transit'           => 'required|max:2',
        'back_transit'              => 'required|max:2',
        'mission_duration'          => 'required|max:2',
        'third_party_service'       => 'required|',
        'mi_daily'                  => 'required|',
        'cv_daily'                  => 'required|',
        'mi_tickets'                => 'required|',
        'cv_tickets'                => 'required|',
        'supply_30'                 => 'required|',
        'supply_39'                 => 'required|',
        'justifications'            => 'required|',
        'observations'              => 'required|',
        'impact'                    => 'required|',
        'mission_type'              => 'required|',
        'institutional_commitments' => 'required|',
        'training_systems'          => 'required|',
        'capacity_adherence'        => 'required|',
        'rh_training'               => 'required|',
        'bilateral'                 => 'required|',
        'of_amount.*'               => 'required',
        'of_title.*'                => 'required',
        'gr_amount.*'               => 'required',
        'gr_title.*'                => 'required',
        'cv_amount.*'               => 'required',
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
        $mission_number            = $request->mission_number;
        $bilateral_activity        = $request->bilateral_activity;
        $fpab_number               = $request->fpab_number;
        $mission_burden            = $request->mission_burden;
        $title                     = $request->title;
        $establishment             = $request->establishment;
        $address                   = $request->address;
        $city                      = $request->city;
        $country                   = $request->country;
        $dateline_start            = $request->dateline_start;
        $dateline_finish           = $request->dateline_finish;
        $event_duration            = $request->event_duration;
        $outward_transit           = $request->outward_transit;
        $back_transit              = $request->back_transit;
        $mission_duration          = $request->mission_duration;
        $third_party_service       = $request->third_party_service;
        $mi_daily                  = $request->mi_daily;
        $cv_daily                  = $request->cv_daily;
        $mi_tickets                = $request->mi_tickets;
        $cv_tickets                = $request->cv_tickets;
        $supply_30                 = $request->supply_30;
        $supply_39                 = $request->supply_39;
        $justifications            = $request->justifications;
        $observations              = $request->observations;
        $impact                    = $request->impact;
        $mission_type              = $request->mission_type;
        $institutional_commitments = $request->institutional_commitments;
        $training_systems          = $request->training_systems;
        $capacity_adherence        = $request->capacity_adherence;
        $rh_training               = $request->rh_training;
        $bilateral                 = $request->bilateral;
        $of_amount   =   $request->of_amount;
        $of_title    =   $request->of_title;
        $gr_amount   =   $request->gr_amount;
        $gr_title    =   $request->gr_title;
        $cv_amount   =   $request->cv_amount;

        /* organizando os dados que irão para a tabela technical_forms */
        $data_ = array(
            'mission_number'            => $mission_number,
            'bilateral_activity'        => $bilateral_activity,
            'fpab_number'               => $fpab_number,
            'mission_burden'            => $mission_burden,
            'title'                     => $title,
            'establishment'             => $establishment,
            'address'                   => $address,
            'city'                      => $city,
            'country'                   => $country,
            'dateline_start'            => $dateline_start,
            'dateline_finish'           => $dateline_finish,
            'event_duration'            => $event_duration,
            'outward_transit'           => $outward_transit,
            'back_transit'              => $back_transit,
            'mission_duration'          => $mission_duration,
            'third_party_service'       => $third_party_service,
            'mi_daily'                  => $mi_daily,
            'cv_daily'                  => $cv_daily,
            'mi_tickets'                => $mi_tickets,
            'cv_tickets'                => $cv_tickets,
            'supply_30'                 => $supply_30,
            'supply_39'                 => $supply_39,
            'justifications'            => $justifications,
            'observations'              => $observations,
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
        // dd($data6);

        $insert_data_[] = $data_;
        $technical_form = TechnicalForm::find($id);
        $technical_form->fill($data_);
        $technical_form->save();

        /* organizando os dados para os campos dinâmicos */
        /* os campos dinâmicos serão inseridos na tabela technical_form_members */
        for($count = 0; $count < count($of_title); $count++)
        {
            $data = array(
                'of_title'   =>  $of_title[$count],
                'of_amount'  =>  $of_amount[$count],
                'gr_title'   =>  $gr_title[$count],
                'gr_amount'  =>  $gr_amount[$count],
                'cv_amount'  =>  $cv_amount[$count],
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
            );

            $insert_data[] = $data;
        }
        TechnicalFormMember::where('technical_form_id', $technical_form->id)->update($data);

        // return response()->json(['success'=>'Ajax request submitted successfully']);
        return redirect()->route('technical-form.index', compact('technical_form'));
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

}
