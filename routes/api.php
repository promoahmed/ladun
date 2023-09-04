<?php

use App\Http\Resources\DepartmentResource;
use App\Http\Resources\LatestProjectsResource;
use App\Http\Resources\MediaCenterResource;
use App\Http\Resources\ProjectResource;
use App\Models\Brief;
use App\Models\Department;
use App\Models\Project;
use App\Models\Structure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/companies',function (){
    return response ([
        'companies'=>\App\Models\Company::with('media')->get()
    ]);
});


Route::get('/financials',function (){


    $financials = \App\Models\Financial::orderBy('created_at','DESC')->get();


    return response ([
        'financials'=>$financials->groupBy(function($val) {
            return Carbon::parse($val->financial_date)->format('Y');
        })
    ]);
});


Route::get('/investors',function (){
    return response ([
        'investors'=>\App\Models\Investor::with('media')->orderBy('created_at','ASC')->get()
    ]);
});
Route::get('/investors/{id}',function ($id){
    return response ([
        'investor'=>\App\Models\Investor::where('id', $id)->with('media')->first()
    ]);
});

Route::get('/media-center',function (){

    return response ([
        'mediaCenter'=>\App\Models\MediaCenter::with('media')->get()
    ]);
});


Route::post('/uploadCsv',function (Request $request){
    $validated = $request->validate([
        'file' => 'required|file',
    ]);
   Excel::import(new \App\Imports\ProjectImport, $request->file );
   return response(['message'=>'success']);

});

Route::post('/media-center/{id}',function ($id){
    return response ([
        'mediaCenter'=>\App\Models\MediaCenter::where('id', $id)->with('media')->get()
    ]);
});

Route::get('/about',function (){
    $briefs = Brief::with('media')->get();
    return response ($briefs);
});

Route::post('/contact',[\App\Http\Controllers\SendEmailController::class,'contact']);
Route::post('/join-us',[\App\Http\Controllers\JoinUsController::class,'store']);
Route::get('/join-us',[\App\Http\Controllers\JoinUsController::class,'index']);

// projects
Route::group(['prefix' => 'projects'], function () {
    // projects list
    Route::get('/',function (){
        $projects = Project::with(['downloads', 'projectModelsWithUtilities', 'location', 'utilities','media'])->where('is_published','=',1)->orderBy('id')->get();
        return ProjectResource::collection($projects);

    });
    // latest 4 projects
    Route::get('/latest',function (){
        $latest = Project::orderBy('created_at', 'DESC')

        ->get();
        return ProjectResource::collection($latest);
    });
    // project details
    Route::get('/{id}', function(string $id){
        $project = Project::where('id', $id)->first();
        return (new ProjectResource($project));
    });

});

// board of directors

Route::get('/structure',function (){
    $structure = Structure::all();
    return response([
        'structure' => $structure,
    ]);
});

// departments

Route::get('/departments', function(){
    $departs = Department::all();
    return DepartmentResource::collection($departs);
});

Route::get('/departments/latest/projects', function(){

    $departs = Department::all();

    return LatestProjectsResource::collection($departs);
});

Route::get('/units/{id}',function ($id){
    return response ([
        'units'=>\App\Models\Unit::where('phase_id',$id)->get()->groupBy('type')
    ]);


});


Route::get("/settings",function (){
    return response(["settings"=>\App\Models\setting::all()]);
});

// pages api

Route::get('/pages/{slug}', function($slug){
    $page = Brief::with('media')->get()->filter(function($val) use ($slug){
        return $val->getTranslation('slug', 'en') == $slug;
    })->first();
    return response([
        'page' => $page,
    ]);
});


Route::post('/search ',function (Request $request){
//    $request->query
//        $request->local
    return response([
       'projects'=> ProjectResource::collection(Project::with('media')->where('content->'.$request->local, 'LIKE','%'.$request->q.'%')->get()) ,
       'mediaCenter'=>  \App\Models\MediaCenter::with('media')->where('content->'.$request->local, 'LIKE','%'.$request->q.'%')->get()
    ]);


});
