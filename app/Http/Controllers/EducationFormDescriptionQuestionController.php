<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationForm;
use App\Models\EducationFormAnswer;
use App\Models\EducationFormQuestion;
use Validator;

class EducationFormDescriptionQuestionController extends Controller
{
    public function create()
    {
        return view('question.create');
    }

    public function store(EducationForm $educationForms)
    {
        //dd(request()->all());

        $data = request()->validate([
            'question.question' => 'required'
        ]);

        $question = $educationForms->EducationFormQuestions()->create($data['question']);
        $question->EducationFormAnswers()->createMany($data['answers']);

        return view('education.index');
    }
}
