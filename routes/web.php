<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FeatureController;





//todo FRONT
Route::get('/', function () {
    return view('index');
});
//* site Settings
Route::resource('/site', SiteSettingController::class); //index, show, delete, create
Route::get('/filtre', [SiteSettingController::class, 'filter'])->name('front.filter'); 

//* contact
Route::get('/iletisim', [ContactController::class, 'index'])->name('contacts.index'); 
Route::get('/hakkimizda', [ContactController::class, 'aboutPage'])->name('contacts.aboutPage'); 

//* articles
Route::resource('/makaleler', ArticleController::class);
Route::get('/makale/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/makaleler', [ArticleController::class, 'index'])->name('articles.index');

//* questions
Route::resource('/questions', QuestionController::class);

//*features
Route::resource('/features', FeatureController::class);

//* filter
Route::resource('/filtre', FilterController::class);
Route::get('/filter/mains/{categoryId}', [FilterController::class, 'getMains']);
Route::get('/filter/exams/{mainId}', [FilterController::class, 'getExams']);
Route::get('/filter/fields/{examId}', [FilterController::class, 'getFields']);
Route::get('/filter/lessons/{fieldId}', [FilterController::class, 'getLessons']);
Route::get('/filter/subjects/{lessonId}', [FilterController::class, 'getSubjects']);



// //todo BACK
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/log', [AuthController::class, 'login'])->name('login');
    Route::post('/log', [AuthController::class, 'loginPost'])->name('login.post');
    Route::middleware([IsAdmin::class])->group(function () {
        
        
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // siteSettings
        //Route::resource('site-settings', SiteSettingController::class)->names(config('routes.admin.siteSettings'));
        Route::resource('site', SiteSettingController::class);
        Route::get('/site/{id}/edit', [SiteSettingController::class, 'edit'])->name('siteSettings.edit');
        Route::put('/site/{id}', [SiteSettingController::class, 'update'])->name('siteSettings.update');

        // categories
        Route::resource('categories', CategoryController::class);

        // articles
        Route::resource('articles', ArticleController::class); // index, create
        Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
        Route::delete('articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
        Route::patch('articles/{article}/toggle-status', [ArticleController::class, 'toggleStatus'])->name('articles.toggleStatus');
        Route::put('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

        // questions
        Route::resource('/questions', QuestionController::class);
        

        // featured
        Route::resource('features', FeaturedController::class); //update, store
        Route::put('featured/update/{id}', [FeaturedController::class, 'update'])->name('featured.update');
        Route::get('featured/{id}/edit', [FeaturedController::class, 'edit'])->name('featured.edit');
        
        // contacts
        Route::resource('/contacts', ContactController::class);


        Route::post('/cikis', [AuthController::class, 'logout'])->name('logout');     
    });
});