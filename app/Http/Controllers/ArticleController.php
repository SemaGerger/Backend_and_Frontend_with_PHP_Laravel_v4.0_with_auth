<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\ArticleService;
use App\Models\ArticleTag;
use App\Models\Subject;
use App\Models\Ad;
use App\Models\Tag;
use App\Models\Main;
use App\Models\Exam;
use App\Models\Field;
use App\Models\Lesson;
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
    public function index()
    {
        return view(config('routes.views.articles.index'));
    }

    public function list()
    {
        return view(config('routes.views.articles.list'));
    }
    

    public function show($slug)
{
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('pages.articles.show', compact('article'));
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
        $validated = $request->validate($this->articleService->getValidationRules());
        $fileName = $request->hasFile('file_path') ? $this->articleService->uploadFile($request->file('file_path')) : null;
        $this->articleService->handleArticleAttributes($validated, $fileName);
    
        return redirect()->route(config('routes.routes.articles.index'))->with('success', 'Article created successfully!');
    }
    

    public function edit(Article $article)
    {
        $data = $this->getAllData();
        $data['article'] = $article; 
        return view(config('routes.routes.articles.edit'), $data);
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate($this->articleService->getValidationRules());

        // Handle file upload
        $fileName = $article->image_table;
        if ($request->hasFile('file_path')) {
            if ($fileName) {
                Storage::delete('public/articles/' . $fileName);
            }
            $fileName = $this->articleService->uploadFile($request->file('file_path'));
        }

        $article->update($this->articleService->handleArticleAttributes($validated, $fileName));
        return redirect()->route(config('routes.routes.articles.index'))->with('success', 'Article updated successfully!');
    }


    public function destroy(Article $article)
    {
        if ($article->file_path) {
            Storage::delete('public/articles/' . $article->file_path);
        }
        $article->delete();
        return redirect()->route(config('routes.routes.articles.index'))->with('success', 'Article deleted successfully!');
    }
}
