 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get', 'post'], '/adminLogin', 'AdminController@login')->name('admin.login');

Route::group(['middleware' => ['auth']], function(){
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/profile/{id}', 'AdminController@profile')->name('profile');
Route::post('/admin/profile/update/{id}', 'AdminController@update_profile')->name('update.profile');

// routes for Categories
Route::match(['get','post'], '/admin/add_category', 'CategoryController@addCategory')->name('add.category');
Route::get('/admin/view_categories', 'CategoryController@viewCategory')->name('view.category');
Route::match(['get', 'post'], '/admin/delete_category/{id}', 'CategoryController@deleteCategory')->name('delete.category');

Route::match(['get','post'], '/admin/edit_category/{id}', 'CategoryController@editCategory')->name('edit.category');

// routes for blogposts

Route::match(['get','post'], '/admin/add_blogpost', 'BlogPostController@addBlogPost')->name('add.blogpost');
Route::get('/admin/view_blogpost', 'BlogPostController@viewBlogPost')->name('view.blogpost');

Route::match(['get','post'], '/admin/delete_blogpost/{id}', 'BlogPostController@deleteBlogPost')->name('delete.blogpost');

Route::match(['get','post'], '/admin/edit_blogpost/{id}', 'BlogPostController@editBlogPost')->name('edit.blogpost');


// delete blogpost image from database and everywhere
     Route::get('/admin/delete_blogpost_image/{id}', 'BlogPostController@deleteBlogPostImage')->name('delete.blogpostimage');


});

Route::get('/logout', 'AdminController@logout')->name('adminlogout');