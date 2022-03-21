<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class SectionController extends Controller
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
        $sections = Section::all();
        
        return view('section.index')->withSections($sections);
    }
    
    public function headship()
    {
        return view('section.headship');
    }

    public function secretary()
    {
        return view('section.secretary');
    }

    public function SDO()
    {
        return view('section.SDO');
    }

    public function SEN()
    {
        return view('section.SEN');
    }

    public function SRH()
    {
        return view('section.SRH');
    }

    public function SED()
    {
        return view('section.SED');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();

        return view('section.create')->withSections($sections);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save a new section and then redirect back to index
        $this->validate($request, array(
                'name'     => 'required|max:255',
                'initials' => 'required|max:5',
            ));

        //store in database
        
        $section = new Section;

        $section->name = $request->name;
        $section->initials = $request->initials;
        $section->save();

        Session::flash('success', 'Nova Seção foi Criada com Sucesso!');

        return redirect()->route('section.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Section::find($id);
        return view('section.show')->withSection($section);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        if(Section::find($id) == $id){
            return redirect()->route('section.create');
        }

        return view('section.edit')->with(['section' => Section::find($id), 'sections' => Section::all()]);
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
        
        $section = Section::find($id);
        $section->name = $request->input('sectionName');
        $section->initials = $request->input('sectionInitials');
        $section->update();
        //dd($section);

        return redirect()->route('section.create')->with('sucess', 'Seção atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sections = Section::all();
        if (Section::find($id) == $id) {
            return redirect()->route('section.create');
        }

        $section = Section::find($id);

        if($section){
            //$sections->users()->detach();
            $section->delete();
            return redirect()->route('section.create')->with('sucess', 'Seção deletada');
        }

        Section::destroy($id);
        return redirect()->route('section.create')->with('warning', 'Esta Seção Não Pode ser Deletada');
    }
}
