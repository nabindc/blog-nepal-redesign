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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/all-blog-posts', 'IndexController@viewAllBlogPost')->name('view.allblogposts');
Route::get('/categories-posts/{slug}', 'IndexController@viewCategoriesBlogPost')->name('view.categoriesblogposts');
Route::get('/single-blog-post/{slug}', 'IndexController@viewSingleBlogPost')->name('view.singleblogposts');
Route::post('/storepost', 'IndexController@storeMessage')->name('store.message');
Route::get('google-line-chart', 'ChartController@googleLineChart');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get', 'post'], '/login', 'AdminController@login')->name('admin.login');

Route::group(['middleware' => ['auth']], function(){
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/profile/{id}', 'AdminController@profile')->name('profile');
Route::post('/admin/profile/update/{id}', 'AdminController@update_profile')->name('update.profile');

// routes for site Controller
	Route::get('/admin/admin_site', 'SiteController@create')->name('create.site');
	Route::post('/admin/admin_store', 'SiteController@store')->name('store.site');
	Route::get('/admin/view_site', 'SiteController@index')->name('index.site');
	Route::get('/admin/edit_site/{id}', 'SiteController@edit')->name('edit.site');
	Route::post('/admin/update_site/{id}', 'SiteController@update')->name('update.site');
	Route::get('/admin/delete_site/{id}', 'SiteController@delete')->name('delete.site');


	// for About sections

	Route::get('/admin/admin_aboutsite', 'AboutController@create')->name('create.about');
	Route::post('/admin/admin_aboutstore', 'AboutController@store')->name('store.about');
	Route::get('/admin/view_aboutsite', 'AboutController@index')->name('index.about');
	Route::get('/admin/edit_aboutsite/{id}', 'AboutController@edit')->name('edit.about');
	Route::post('/admin/update_aboutsite/{id}', 'AboutController@update')->name('update.about');
	Route::get('/admin/delete_aboutsite/{id}', 'AboutController@delete')->name('delete.about');

	// end of about section 


	// Services Section 
	Route::get('/admin/admin_service', 'ServiceController@create')->name('create.service');
	Route::post('/admin/admin_storeservice', 'ServiceController@store')->name('store.service');
	Route::get('/admin/view_service', 'ServiceController@index')->name('index.service');
	Route::get('/admin/edit_service/{id}', 'ServiceController@edit')->name('edit.service');
	Route::post('/admin/update_service/{id}', 'ServiceController@update')->name('update.service');
	Route::get('/admin/delete_service/{id}', 'ServiceController@delete')->name('delete.service');

	// contact section
	Route::get('/admin/admin_contact', 'ContactController@create')->name('create.contact');
	Route::post('/admin/admin_storecontact', 'ContactController@store')->name('store.contact');
	Route::get('/admin/view_contact', 'ContactController@index')->name('index.contact');
	Route::get('/admin/edit_contact/{id}', 'ContactController@edit')->name('edit.contact');
	Route::post('/admin/update_contact/{id}', 'ContactController@update')->name('update.contact');
	Route::get('/admin/delete_contact/{id}', 'ContactController@delete')->name('delete.contact');

	Route::get('/admin/view_messages', 'ContactController@viewMessages')->name('view.messages');



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


     // Services Section 
	Route::get('/admin/admin_social', 'SocialLinkController@create')->name('create.social');
	Route::post('/admin/admin_storesocial', 'SocialLinkController@store')->name('store.social');
	Route::get('/admin/view_social', 'SocialLinkController@index')->name('index.social');
	Route::get('/admin/edit_social/{id}', 'SocialLinkController@edit')->name('edit.social');
	Route::post('/admin/update_social/{id}', 'SocialLinkController@update')->name('update.social');


});

Route::get('/logout', 'AdminController@logout')->name('adminlogout');