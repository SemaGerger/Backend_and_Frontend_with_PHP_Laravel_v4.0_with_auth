<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\ArticleService;
use App\Models\Tag;
use App\Models\Main;
use App\Models\Exam;
use App\Models\Field;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\ArticleTag;
use App\Models\Ad;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    private function getAllData()
    {
        return [
            'allMains' => Main::all(),
            'allExams' => Exam::all(),
            'allFields' => Field::all(),
            'allLessons' => Lesson::all(),
            'allSubjects' => Subject::all(),
            'allTags' => Tag::all(),
            'allAds' => Ad::where('id', 1)->get(),
            'allContacts' => Contact::first(),

         
        ];
    }
    // private function getValidationRules()
    // {
    //     return [
    //         'title' => 'required|string|max:255',
    //         'meta_author' => 'nullable|string|max:255',
    //         'meta_keywords' => 'nullable|string|max:255',
    //         'main_id' => 'nullable|exists:mains,id',
    //         'exam_id' => 'nullable|exists:exams,id',
    //         'field_id' => 'nullable|exists:fields,id',
    //         'lesson_id' => 'nullable|exists:lessons,id',
    //         'content1' => 'required|string',
    //         'content2' => 'required|string',
    //         'status' => 'required|string|max:255',
    //         'file_path' => 'nullable|file|mimes:jpg,png,jpeg,pdf|max:2048',
    //         'published_at' => 'nullable|date',
    //     ];
    // }
    public function index()
    {
      
        // $articles = Article::with('subjects', 'tags')->get();   
        // return view(config('routes.views.articles.index'), compact('articles'));
        return view(config('routes.views.articles.index'));
    }
    public function list()
    {
        $data = $this->getAllData();
       
        $articles = Article::with('subjects', 'tags')->get();
        return view(config('views.articles.list'), compact('articles', 'data'));
    }
    public function show(Article $article)
    {
        $data = $this->getAllData();
        // $articles = Article::with('subjects', 'tags')->get();    
        return view(config('routes.views.articles.show'), compact('data'));
    }

    public function toggleStatus(Article $article)
    {
        $article->status = $article->status == 'active' ? 'inactive' : 'active';
        $article->save();

        return redirect()->route('admin.articles.index')->with('status', 'Article status updated successfully!');
    }

    public function create()
    {
        $data = $this->getAllData();
        $articles = Article::with('subject', 'tag')->get();
        return view('pages.articles.create', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->getValidationRules());

        $fileName = null;
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = $this->articleService->uploadFile($file);
        }

        Article::create($this->articleService->handleArticleAttributes($validated, $fileName));

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully!');
    }

    public function edit(Article $article)
    {
        $data = $this->getAllData();
        // $data['article'] = $article;
        return view('pages.articles.edit', $data);
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate($this->getValidationRules());
    
  
        // eski fotosunu silip yenisini kaydet
        if ($request->hasFile('file_path')) {
            if ($article->image_table) {
                Storage::delete('public/articles/' . $article->image_table);
            }
            $file = $request->file('file_path');
            $fileName = $file->getClientOriginalName();
            $fileName = $file->getClientOriginalName() . '_' . Str::random(10);
            $file->storeAs('public/articles', $fileName);
            $article->image_table = $fileName;
        }

        $article->update($this->handleArticleAttributes($validated, $fileName));
        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully!');
    }


    public function destroy(Article $article)
    {
        if ($article->file_path) {
            Storage::delete($article->file_path);
        }
    }
}
