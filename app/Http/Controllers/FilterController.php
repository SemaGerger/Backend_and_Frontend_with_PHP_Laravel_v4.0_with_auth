<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Main;
use App\Models\Exam;
use App\Models\Field;
use App\Models\Lesson;
use App\Models\Subject;

class FilterController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('questions.filter', compact('categories'));
    }

    public function getMains($categoryId)
    {
        $mains = Main::where('category_id', $categoryId)->get();
        return response()->json(['html' => view('partials.main_options', compact('mains'))->render()]);
    }

    public function getExams($mainId)
    {
        $exams = Exam::where('main_id', $mainId)->get();
        return response()->json(['html' => view('partials.exam_options', compact('exams'))->render()]);
    }

    public function getFields($examId)
    {
        $fields = Field::where('exam_id', $examId)->get();
        return response()->json(['html' => view('partials.field_options', compact('fields'))->render()]);
    }

    public function getLessons($fieldId)
    {
        $lessons = Lesson::where('field_id', $fieldId)->get();
        return response()->json(['html' => view('partials.lesson_options', compact('lessons'))->render()]);
    }

    public function getSubjects($lessonId)
    {
        $subjects = Subject::where('lesson_id', $lessonId)->get();
        return response()->json(['html' => view('partials.subject_options', compact('subjects'))->render()]);
    }
}
