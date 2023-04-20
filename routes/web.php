


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
    Route::get('/dashboard', function () {
        return view('dashbord');
    });

    // Route::get('/hotel', function () {
    //     return view('hotel');
    // });
   
    Route::get('/hotelHome', function () {
        return view('hotelHome');
    });

    Route::get('/profileUser', function () {
        return view('profile');
    });
         
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('articles', ArticleController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('likes', LikeController::class);
    Route::resource('hotel', HotelController::class);
    Route::resource('transports', TransportController::class);
    Route::resource('blogDashboard', ArticleAdminController::class);
  
    Route::get('/noha',[StatistiquesController::class ,'count']);
    Route::get('/hotels',[HotelController::class ,'indexClient'])->name('hotels');

    Route::get('/transportClient',[TransportController::class ,'indexClient'])->name('transportClient');
    Route::resource('voyageDashboard', VoyageController::class);
    Route::get('/voyageOrganise',[VoyageController::class ,'showHome'])->name('voyageOrganise');
    Route::resource('reservation', ReservationController::class);
    Route::get('/indexHome',[HotelController::class ,'indexHome'])->name('indexHome');
    // patsh::resource('profile', UserController::class);
    // Route::post('/profile/update', 'App\Http\Controllers\UserController@update')->name('profile.update');
    // Route::get('password/reset', ForgotPasswordController::class,'howLinkRequestForm')->name('password.request');

    // Route::post('password/email', ForgotPasswordController::class ,'sendResetLinkEmail')->name('password.email');
    
    // Route::get('password/reset/{token}', ResetPasswordController::class , 'showResetForm')->name('password.reset');
    
    // Route::post('password/reset', ResetPasswordController::class ,'reset')->name('password.update');
    Route::get('/forgot-password', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm');
    Route::prefix('profile')->group(function () {
        Route::put('/{id}', [UserController::class, 'update'])->name('profile.update');
        Route::delete('/{id}', [UserController::class, 'delete'])->name('profile.delete');
    });
 