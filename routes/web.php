


 <?php
    
  
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\LikeController;
    use App\Http\Controllers\HotelController;
    use App\Http\Controllers\ArticleController;
    use App\Http\Controllers\CommentController;
    use App\Http\Controllers\TransportController;
    use App\Http\Controllers\ArticleAdminController;
    use App\Http\Controllers\StatistiquesController;
    use App\Http\Controllers\VoyageController;
    use App\Http\Controllers\ReservationController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\Auth\ForgotPasswordController;
    use App\Http\Controllers\Auth\ResetPasswordController;


    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    

    Route::get('/hotelHome', function () {
        return view('hotelHome');
    });

    Route::get('/profileUser', function () {
        return view('profile');
    });
         
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('articles', ArticleController::class)->middleware('auth');
    Route::resource('comments', CommentController::class)->middleware('auth');
    Route::resource('likes', LikeController::class)->middleware('auth');
    Route::resource('hotel', HotelController::class)->middleware('auth');
    Route::resource('transports', TransportController::class)->middleware('auth');
    Route::resource('blogDashboard', ArticleAdminController::class)->middleware('auth');
  
    Route::get('/dashboard',[StatistiquesController::class ,'count'])->middleware('auth');

    Route::get('/hotels',[HotelController::class ,'indexClient'])->name('hotels');

    Route::get('/transportClient',[TransportController::class ,'indexClient'])->name('transportClient');
    Route::resource('voyageDashboard', VoyageController::class);
    Route::get('/voyageOrganise',[VoyageController::class ,'showHome'])->name('voyageOrganise')->middleware('auth');
    Route::resource('reservation', ReservationController::class);
    Route::get('/indexHome',[HotelController::class ,'indexHome'])->name('indexHome')->middleware('auth');
   
        Route::get('/forgot-password', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->middleware('auth');
    Route::prefix('profile')->group(function () {
        Route::put('/{id}', [UserController::class, 'update'])->name('profile.update')->middleware('auth');
        Route::delete('/{id}', [UserController::class, 'delete'])->name('profile.delete')->middleware('auth');
    });
 