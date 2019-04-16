<?php
use App\User;
use App\Material;
    use App\Http\Middleware\authenticated;
    use App\Http\Middleware\VerifyCsrfToken;
    use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/


Route::get('/error', [
    'uses' => 'pageController@errorReportPage',
    'as' => 'errorPage'
]);



Route::get('/', 'pageController@getWelcome')->name('welcomePage');

/* Pages under offices */
Route::get('/executive/president', [
    'uses' => 'pageController@getoffice1',
    'as' => 'president'
]);

Route::get('/executive/vice-president', [
    'uses' => 'pageController@getoffice2',
    'as' => 'vpresident'
]);
Route::get('/executive/general-secretary', [
    'uses' => 'pageController@getoffice3',
    'as' => 'gensec'
]);

Route::get('/executive/public-relations-officer', [
    'uses' => 'pageController@getoffice4',
    'as' => 'pro'
]);
Route::get('/executive/financial-secretary', [
    'uses' => 'pageController@getoffice5',
    'as' => 'finsec'
]);
Route::get('/executive/treasurer', [
    'uses' => 'pageController@getoffice6',
    'as' => 'treasurer'
]);
Route::get('/executive/welfare-director', [
    'uses' => 'pageController@getoffice7',
    'as' => 'drwelfare'
]);
Route::get('/executive/social-director', [
    'uses' => 'pageController@getoffice8',
    'as' => 'drsocial'
]);
Route::get('/executive/sports-director', [
    'uses' => 'pageController@getoffice9',
    'as' => 'drsports'
]);
Route::get('/executive/ass-general-secretary', [
    'uses' => 'pageController@getoffice10',
    'as' => 'ags'
]);

//SRC OFFICES
Route::get('legislative/senate-president', [
    'uses' => 'pageController@getSp',
    'as' => 'sp'
]);

Route::get('/legislative/deputy-senate-president', [
    'uses' => 'pageController@getDsp',
    'as' => 'dsp'
]);
Route::get('/legislative/chief-whip', [
    'uses' => 'pageController@getChiefwhip',
    'as' => 'chiefwhip'
]);

//SJC OFFICES
Route::get('/judiciary/chief-judge', [
    'uses' => 'pageController@getCj',
    'as' => 'cj'
]);
Route::get('judiciary/lord-chancellor', [
    'uses' => 'pageController@getLordChancellor',
    'as' => 'lordchancellor'
]);
Route::get('judiciary/registrar', [
    'uses' => 'pageController@getRegistrar',
    'as' => 'registrar'
]);

/* Pages under gallery */
Route::get('achievements', ['uses' => 'pageController@getgallery1']);
Route::get('pastadmin', ['uses' => 'pageController@getgallery2']);
Route::get('photos', ['uses' => 'pageController@getgallery3']);

/* Pages under about*/
Route::get('about', ['uses' => 'pageController@getabout1']);
Route::get('sub', ['uses' => 'pageController@getabout2']);

/* Pages under program */
Route::get('/foa', ['uses' => 'pageController@getprogram1'])->name('foa');
Route::get('sportsfestival', ['uses' => 'pageController@getprogram2']);


/* PAGES UNDER FOA */
/* ENCRYPT THE URL
$path = md5('voting');
Route::get('/'.$path, [
    'uses' => 'foaController@getvoting',
    'as' => 'a'
]); 
*/

Route::get('foa/voting', [
    'uses' => 'foaController@getvoting',
    'as' => 'votingnormal'
]);


Route::post('foa/proceed', [
    'uses' => 'foaController@getaccredited',
    'as' => 'savevoter',
    //'middleware'=>'auth',
]);

Route::get('foa/proceed', [
    'uses' => 'foaController@getProceedJumper',
     'as' => 'voting',

]);

Route::get('foa/vote', [
    'uses' => 'foaController@getvotenow',
    'as' => 'vote',
    //'middleware'=>'auth',
]);

Route::post('foa/vote', [
    'uses' => 'foaController@votenow',
     'as' => 'postVote',
    //'middleware'=>'auth'
]);

//TO DETECT A VOTER THAT WANTS TO JUMP NORMAL PROCEDURE
//Route::get('foa/vote', [
  //  'uses' => 'foaController@getVoteJumper',
    // 'as' => 'voting',
//]);

//TO VIEW THE VOTES SO FAR --FOA_VIEWERS
Route::get('foa/votes', [
    'uses' => 'foaController@getVotes',
     'as' => 'votes',
]);

//TO FINALLY CAST AND SAVE VOTE
Route::post('/foa', [
    'uses' => 'foaController@castVote',
    'as' => 'castVote',
    'middleware' => 'auth'
 ]);

Route::get('/finalizevoting', [
    'uses' => 'foaController@logoutVoter',
    'as' => 'logoutVoter'
]);


//TO VIEW AWARD CATEGORIES --FOA_VIEWERS
Route::get('foa/awardcategories', [
    'uses' => 'foaController@getCategory',
    'as' => 'awardcategories',
]);

Route::get('foa/contactFOA', [
    'uses' => 'foaController@getContactFOA',
    'as' => 'contactFOA'
]);


//TO ADD CONTESTANTS --ADMIN_FOA
Route::post('addContestant', [
    'uses' => 'foaController@AddContestant',
    'as' => 'addContestant',
    'middleware'=>'auth'
]);
//TO DELETE CONTESTANT --ADMIN_FOA
Route::get('/delete-contestant/{id}', 'foaController@deleteContestant');

//GET CATEGORY PAGE
    Route::get('foa/admin/category', [
    'uses' => 'foaController@getCategoryPage',
    'as' => 'category',
    'middleware'=>'auth'
]);

//TO ADD CATEGORIES --ADMIN_FOA
Route::post('addingCategory', [
    'uses' => 'foaController@AddCategory',
    'as' => 'addCategory',
    'middleware'=>'auth'
]);
//TO DELETE CATEGORY --ADMIN_FOA
Route::get('/delete-category/{id}', 'foaController@deleteCategory');



//TO NAVIGATE TO CONTESTANTS PAGE --ADMIN_FOA
Route::get('foa/admin/contestants', [
    'uses' => 'foaController@getContestants',
    'as' => 'contestants',
    'middleware' => 'auth'
]);

//TO GET TO ADMIN LOGIN PAGE --ADMIN_FOA
Route::get('foa/admin', [
    'uses' => 'foaController@getFoaAdmin',
    'as' => 'foaAdmin',
]);

//TO GET TO DASHBOARD --ADMIN_FOA
Route::post('/foa/admin/dashboard', [
    'uses' => 'foaController@signinFoaAdmin',
    'as' => 'foaAdminDashboard',
]);

Route::get('/foa/admin/dashboard', [
    'uses' => 'foaController@getFoaAdminDashboard',
    'as' => 'foaAdminDashboard',
    'middleware' => 'auth'
]);

//TO LOGOUT ADMIN_FOA
Route::get('/logout', [
    'uses' => 'foaController@logoutFoaAdmin',
    'as' => 'logoutfoa',
]);

/* Route::get('voting', ['uses' => 'pageController@getvoting']); */


//THE USERS PANEL BEGINS HERE

Route::post('/signup', [
    'uses' => 'aauaitesController@postSignup',
    'as' => 'signup',
]);

//Route::redirect('/foa', '/');

Route::post('login', [
    'uses' => 'aauaitesController@postLogin',
    'as' => 'login',
]);

Route::get('login', [
    'uses' => 'aauaitesController@postLogin',
    'as' => 'login',
]);

Route::get('/aauaites/home', [
    'uses' => 'aauaitesController@getLogin',
    'as' => 'loginAauaite',
    'middleware' => 'auth'
]);


Route::get('logoutAAUAITE', [
    'uses' => 'aauaitesController@getLogoutUser',
    'as' => 'logout',
]);

Route::post('logoutAAUAITE', [
    'uses' => 'aauaitesController@getLogoutUser',
    'as' => 'logout',
]);


// USER PROFILE THINGS HERE
Route::get('profile/{Username}', 'profileController@getProfile')->name('profile');
Route::get('editprofile/{user_UserId}', 'profileController@getEditProfile')->name('edit');
Route::post('/profile/{username}', 'profileController@updateProfile')->name('profile');

//Route::post('/profile/{username}', function ($username){
//    return redirect('profile/'.$username);
//});

//STATUS UPDATES
Route::post('aauaites/home/posted', [
    'uses' => 'aauaitesController@storePost',
    'as' => 'store',
]);

//Likes on Post
Route::post('/like', [
    'uses' => 'aauaitesController@postLikePost',
    'as' => 'like'
]);

//Comment on post
Route::post('aauaites/home/comment', [
    'uses' => 'aauaitesController@commentPost',
    'as' => 'commentPost',
]);

Route::get('status/{id}', 'aauaitesController@getReadPost')->name('readPost');
Route::get('/delete/{id}', 'aauaitesController@getDeletePost');
Route::get('/edit/{id}', 'aauaitesController@getEditPost');
Route::post('/update/{id}', 'aauaitesController@updatePost');

//COMMENT OPERATIONS
Route::get('/deleteComment/{id}', 'aauaitesController@getDeleteComment');
Route::get('/editComment/{id}', 'aauaitesController@getEditComment');
Route::post('/updateComment/{id}', 'aauaitesController@updateComment');

Route::post('aauaites/home/posted', [
    'uses' => 'aauaitesController@storePost',
    'as' => 'store',
]);


//CHATS AND CONVERSATIONS
Route::get('/all-chats', [
    'uses' => 'chatController@getPChat',
    'as' => 'pchats',
    'middleware' => 'auth'
]);
//to start a new chat
Route::get('/start-new-chat', [
    'uses' => 'chatController@getNewChat',
    'as' => 'newPchat',
    'middleware' => 'auth'
]);

//create new conversation
Route::post('/new-conversation', [
    'uses' => 'chatController@postStartConversation',
    'as' => 'newConversation',
    'middleware' => 'auth'
]);


Route::get('/conversation/{conversationId}', [
   'uses' => 'chatController@getConversation',
    'as' => 'conversation',
    'middleware' => 'auth'
]);

Route::post('/sendMessage', [
    'uses' => 'chatController@postThisMessage',
    'as' => 'sendmessage',
    'middleware' => 'auth'
]);


//PUBLIC CHAT STARTS HERE
Route::get('/discussion-room', 'chatController@getPublicChat')->name('publicChat');
Route::post('/send', 'chatController@send');


//USER ACADEMICS STARTS HERE
Route::get('/my-courses/', [
    'uses' => 'academicsController@getCourses',
    'as' => 'courses',
    'middleware' => 'auth'
]);
Route::post('/my-courses/{id}', [
    'uses' => 'academicsController@postCourses',
    'as' => '/my-courses/{id}',
]);
Route::get('/removeCourse/{id}', 'academicsController@deleteCourseAndResult');
Route::post('/updateGrade/{id}', 'academicsController@updateGrade');

//USER GRADE POINT SYSTEM
Route::get('/my-gradepoints/', [
    'uses' => 'cgpaController@getGradePoint',
    'as' => 'gradepoint',
    'middleware' => 'auth'
]);

Route::post('/my-gradepoints/', [
    'uses' => 'cgpaController@postPopulateGpa',
    'as' => 'gpaPopulate',
    'middleware' => 'auth'
]);

//MATERIALS PAGES
Route::get('/materials', [
    'uses' => 'documentController@getMaterials',
    'as' => 'materials',
    /*'middleware' => 'auth'*/
]);
Route::post('uploadFile', 'documentController@sendMaterial')->name('uploadMaterial');


Route::get('api/get-faculty','profileController@getFaculty');
Route::get('api/get-department','profileController@getDepartment');

Route::get('api/dependent-dropdown','APIController@index');
Route::get('api/dependent-dropdown','APIController@index');
Route::get('api/get-state-list','APIController@getStateList');


//ADMIN PAGES HERE

Route::get('/admini', 'Auth\adminLoginController@getAdminLoginPage')->name('adminLoginPage');

Route::post('/postAdminLogin', 'Auth\adminLoginController@loginAdmin')->name('loginAdmin');
Route::get('/admin-dashboard', [
    'uses' => 'Auth\adminLoginController@getAdminDashboard',
    'as' => 'get-admin-dashboard',
]);

Route::get('/admin-material-checking', 'adminController@materialCheck')->name('materialCheck');
Route::post('/admin-material-approve', 'adminController@approveMaterial')->name('approve');
Route::post('/admin-material-disapprove', 'adminController@disapproveMaterial')->name('disapprove');
Route::get('/admin-add-news', 'adminController@getAddNews')->name('addNews');
Route::post('/admin-edit-news', 'adminController@editNews')->name('editNews');
Route::get('/delete-news/{id}', 'adminController@deleteNews');
Route::post('/admin-createNews', 'adminController@createNews')->name('createNews');
Route::post('logout-admin', 'Auth\adminLoginController@logoutAdmin')->name('logoutAdmin');



Route::get('testi', function(){
    $appMaterials = Material::whereApproval('1')->get();

    $Myarray = array();
    foreach($appMaterials as $appMaterial){
        //PUSHING THE VALUES OF THE OBJECT $appMaterials INTO THE ARRAY $Myarray
        array_push($Myarray, $appMaterial);

    }
    //THIS GETS THE INDEX OF ANY MEMBER OF $Myarray AT RANDOM
    $materials = array_rand($Myarray, 1);
    return $Myarray[$materials];
});






Route::get('/training', [
    'uses' => 'foaController@getTraining',
    'as' => 'training',
]);

//THIS COVERS THE AJAX CRUD | TO USE, COMMENT POST EDIT AND DELETE IN THIS APP ABOVE
/*Route::group(['prefix' => 'posts'], function() {
    Route::get('/', 'postController@index');
    Route::match(['get', 'post'], 'create', 'postController@create');
    Route::match(['get', 'put'], 'update/{id}', 'postController@update');
    Route::get('show/{id}', 'postController@show');
    Route::delete('deletePost/{id}', 'postController@destroy');
});*/