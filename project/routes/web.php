<?php

// ************************************ CRON JOBS **********************************************
Route::get('/checkvalidity', 'Front\FrontendController@checkvalidity')->name('front.checkvalidity');
// ************************************ CRON JOBS **********************************************




// ************************************ ADMIN SECTION **********************************************

//Route::prefix('admin')->group(function() {

  //------------ ADMIN LOGIN SECTION ------------

  Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
  Route::get('/forgot', 'Admin\LoginController@showForgotForm')->name('admin.forgot');
  Route::post('/forgot', 'Admin\LoginController@forgot')->name('admin.forgot.submit');
  Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

  //------------ ADMIN LOGIN SECTION ENDS ------------


  //------------ ADMIN DASHBOARD & PROFILE SECTION ------------
  Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
  Route::get('/profile', 'Admin\DashboardController@profile')->name('admin.profile');
  Route::get('/password', 'Admin\DashboardController@passwordreset')->name('admin.password');
  Route::post('/forgot', 'Admin\LoginController@forgot')->name('admin.forgot.submit');
  Route::post('/profile/update', 'Admin\DashboardController@profileupdate')->name('admin.profile.update');
  Route::post('/password/update', 'Admin\DashboardController@changepass')->name('admin.password.update');
  //------------ ADMIN DASHBOARD & PROFILE SECTION ENDS ------------



  //------------ ADMIN BLOG SECTION ------------

  Route::get('/blog/datatables', 'Admin\BlogController@datatables')->name('admin-blog-datatables'); //JSON REQUEST
  Route::get('/blog', 'Admin\BlogController@index')->name('admin-blog-index');
  Route::get('/blog/create', 'Admin\BlogController@create')->name('admin-blog-create');
  Route::get('/blog/edit/{id}', 'Admin\BlogController@edit')->name('admin-blog-edit');
  Route::post('/blog/create', 'Admin\BlogController@store')->name('admin-blog-store');
  Route::post('/blog/edit/{id}', 'Admin\BlogController@update')->name('admin-blog-update');
  Route::get('/blog/delete/{id}', 'Admin\BlogController@destroy')->name('admin-blog-delete');

  Route::get('/blog/category/datatables', 'Admin\BlogCategoryController@datatables')->name('admin-cblog-datatables'); //JSON REQUEST
  Route::get('/blog/category', 'Admin\BlogCategoryController@index')->name('admin-cblog-index');
  Route::get('/blog/category/create', 'Admin\BlogCategoryController@create')->name('admin-cblog-create');
  Route::get('/blog/category/edit/{id}', 'Admin\BlogCategoryController@edit')->name('admin-cblog-edit');
  Route::post('/blog/category/create', 'Admin\BlogCategoryController@store')->name('admin-cblog-store');
  Route::post('/blog/category/edit/{id}', 'Admin\BlogCategoryController@update')->name('admin-cblog-update');
  Route::get('/blog/category/delete/{id}', 'Admin\BlogCategoryController@destroy')->name('admin-cblog-delete');


  //------------ ADMIN BLOG SECTION ENDS ------------



  //------------ ADMIN CATEGORY SECTION ------------

  Route::get('/category/datatables/{type}', 'Admin\CategoryController@datatables')->name('admin-cat-datatables'); //JSON REQUEST
  Route::get('/category', 'Admin\CategoryController@index')->name('admin-cat-index');
  Route::get('/category/create', 'Admin\CategoryController@create')->name('admin-cat-create');
  Route::post('/category/create', 'Admin\CategoryController@store')->name('admin-cat-store');
  Route::get('/category/edit/{id}', 'Admin\CategoryController@edit')->name('admin-cat-edit');
  Route::post('/category/edit/{id}', 'Admin\CategoryController@update')->name('admin-cat-update');
  Route::get('/category/delete/{id}', 'Admin\CategoryController@destroy')->name('admin-cat-delete');
  Route::get('/category/status/{id1}/{id2}', 'Admin\CategoryController@status')->name('admin-cat-status');

  //------------ ADMIN CATEGORY SECTION ENDS------------


  //------------ ADMIN BRAND SECTION ------------

  Route::get('/brand/datatables', 'Admin\BrandController@datatables')->name('admin-brand-datatables'); //JSON REQUEST
  Route::get('/brand', 'Admin\BrandController@index')->name('admin-brand-index');
  Route::get('/brand/create', 'Admin\BrandController@create')->name('admin-brand-create');
  Route::post('/brand/create', 'Admin\BrandController@store')->name('admin-brand-store');
  Route::get('/brand/edit/{id}', 'Admin\BrandController@edit')->name('admin-brand-edit');
  Route::post('/brand/edit/{id}', 'Admin\BrandController@update')->name('admin-brand-update');
  Route::get('/brand/delete/{id}', 'Admin\BrandController@destroy')->name('admin-brand-delete');
  Route::get('/brand/status/{id1}/{id2}', 'Admin\BrandController@status')->name('admin-brand-status');

  //------------ ADMIN BRAND SECTION ENDS------------


  //------------ ADMIN MODEL SECTION ------------

  Route::get('/model/datatables', 'Admin\ModelController@datatables')->name('admin-model-datatables'); //JSON REQUEST
  Route::get('/model', 'Admin\ModelController@index')->name('admin-model-index');
  Route::get('/model/create', 'Admin\ModelController@create')->name('admin-model-create');
  Route::post('/model/create', 'Admin\ModelController@store')->name('admin-model-store');
  Route::get('/model/edit/{id}', 'Admin\ModelController@edit')->name('admin-model-edit');
  Route::post('/model/edit/{id}', 'Admin\ModelController@update')->name('admin-model-update');
  Route::get('/model/delete/{id}', 'Admin\ModelController@destroy')->name('admin-model-delete');
  Route::get('/model/status/{id1}/{id2}', 'Admin\ModelController@status')->name('admin-model-status');

  //------------ ADMIN MODEL SECTION ENDS------------


  //------------ ADMIN BODY TYPE SECTION ------------

  Route::get('/body/datatables', 'Admin\BodyController@datatables')->name('admin-body-datatables'); //JSON REQUEST
  Route::get('/body', 'Admin\BodyController@index')->name('admin-body-index');
  Route::get('/body/create', 'Admin\BodyController@create')->name('admin-body-create');
  Route::post('/body/create', 'Admin\BodyController@store')->name('admin-body-store');
  Route::get('/body/edit/{id}', 'Admin\BodyController@edit')->name('admin-body-edit');
  Route::post('/body/edit/{id}', 'Admin\BodyController@update')->name('admin-body-update');
  Route::get('/body/delete/{id}', 'Admin\BodyController@destroy')->name('admin-body-delete');
  Route::get('/body/status/{id1}/{id2}', 'Admin\BodyController@status')->name('admin-body-status');

  //------------ ADMIN BODY TYPE SECTION ENDS------------

  //------------ ADMIN FUEL TYPE SECTION ------------

  Route::get('/fuel/datatables', 'Admin\FuelController@datatables')->name('admin-fuel-datatables'); //JSON REQUEST
  Route::get('/fuel', 'Admin\FuelController@index')->name('admin-fuel-index');
  Route::get('/fuel/create', 'Admin\FuelController@create')->name('admin-fuel-create');
  Route::post('/fuel/create', 'Admin\FuelController@store')->name('admin-fuel-store');
  Route::get('/fuel/edit/{id}', 'Admin\FuelController@edit')->name('admin-fuel-edit');
  Route::post('/fuel/edit/{id}', 'Admin\FuelController@update')->name('admin-fuel-update');
  Route::get('/fuel/delete/{id}', 'Admin\FuelController@destroy')->name('admin-fuel-delete');
  Route::get('/fuel/status/{id1}/{id2}', 'Admin\FuelController@status')->name('admin-fuel-status');

  //------------ ADMIN FUEL TYPE SECTION ENDS------------


  //------------ ADMIN TRANSMISSION TYPE SECTION ------------

  Route::get('/transmission/datatables', 'Admin\TransmissionController@datatables')->name('admin-transmission-datatables'); //JSON REQUEST
  Route::get('/transmission', 'Admin\TransmissionController@index')->name('admin-transmission-index');
  Route::get('/transmission/create', 'Admin\TransmissionController@create')->name('admin-transmission-create');
  Route::post('/transmission/create', 'Admin\TransmissionController@store')->name('admin-transmission-store');
  Route::get('/transmission/edit/{id}', 'Admin\TransmissionController@edit')->name('admin-transmission-edit');
  Route::post('/transmission/edit/{id}', 'Admin\TransmissionController@update')->name('admin-transmission-update');
  Route::get('/transmission/delete/{id}', 'Admin\TransmissionController@destroy')->name('admin-transmission-delete');
  Route::get('/transmission/status/{id1}/{id2}', 'Admin\TransmissionController@status')->name('admin-transmission-status');

  //------------ ADMIN TRANSMISSION TYPE SECTION ENDS------------


  //------------ ADMIN CONDITION SECTION ------------

  Route::get('/condtion/datatables', 'Admin\ConditionController@datatables')->name('admin-condtion-datatables'); //JSON REQUEST
  Route::get('/condtion', 'Admin\ConditionController@index')->name('admin-condtion-index');
  Route::get('/condtion/create', 'Admin\ConditionController@create')->name('admin-condtion-create');
  Route::post('/condtion/create', 'Admin\ConditionController@store')->name('admin-condtion-store');
  Route::get('/condtion/edit/{id}', 'Admin\ConditionController@edit')->name('admin-condtion-edit');
  Route::post('/condtion/edit/{id}', 'Admin\ConditionController@update')->name('admin-condtion-update');
  Route::get('/condtion/delete/{id}', 'Admin\ConditionController@destroy')->name('admin-condtion-delete');
  Route::get('/condtion/status/{id1}/{id2}', 'Admin\ConditionController@status')->name('admin-condtion-status');

  //------------ ADMIN CONDITION SECTION ENDS------------


  //------------ ADMIN PRICING RANGE SECTION ------------

  Route::get('/pricing/datatables', 'Admin\PricingController@datatables')->name('admin-pricing-datatables'); //JSON REQUEST
  Route::get('/pricing', 'Admin\PricingController@index')->name('admin-pricing-index');
  Route::get('/pricing/create', 'Admin\PricingController@create')->name('admin-pricing-create');
  Route::post('/pricing/create', 'Admin\PricingController@store')->name('admin-pricing-store');
  Route::get('/pricing/edit/{id}', 'Admin\PricingController@edit')->name('admin-pricing-edit');
  Route::post('/pricing/edit/{id}', 'Admin\PricingController@update')->name('admin-pricing-update');
  Route::get('/pricing/delete/{id}', 'Admin\PricingController@destroy')->name('admin-pricing-delete');
  Route::get('/pricing/status/{id1}/{id2}', 'Admin\PricingController@status')->name('admin-pricing-status');

  //------------ ADMIN PRICING RANGE SECTION ENDS------------


  //------------ ADMIN SUBSCRIPTION PLAN SECTION ------------

  Route::get('/plan/datatables', 'Admin\PlanController@datatables')->name('admin-plan-datatables'); //JSON REQUEST
  Route::get('/plan', 'Admin\PlanController@index')->name('admin-plan-index');
  Route::get('/plan/create', 'Admin\PlanController@create')->name('admin-plan-create');
  Route::post('/plan/create', 'Admin\PlanController@store')->name('admin-plan-store');
  Route::get('/plan/edit/{id}', 'Admin\PlanController@edit')->name('admin-plan-edit');
  Route::post('/plan/edit/{id}', 'Admin\PlanController@update')->name('admin-plan-update');
  Route::get('/plan/delete/{id}', 'Admin\PlanController@destroy')->name('admin-plan-delete');
  Route::get('/plan/status/{id1}/{id2}', 'Admin\PlanController@status')->name('admin-plan-status');

  //------------ ADMIN SUBSCRIPTION PLAN SECTION ENDS------------


  //------------ ADMIN CAR MANAGEMENT SECTION ------------
  Route::get('/car/datatables/{type}', 'Admin\CarController@datatables')->name('admin.car.datatables'); //JSON REQUEST
  Route::get('/car', 'Admin\CarController@index')->name('admin.car.index');
  Route::get('/car/{brandid}/models', 'Admin\CarController@getmodels')->name('admin.car.getmodels');
  Route::post('/car/upload', 'Admin\CarController@upload')->name('admin.car.upload');
  Route::post('/car/store', 'Admin\CarController@store')->name('admin.car.store');
  Route::get('/car/{id}/edit', 'Admin\CarController@edit')->name('admin.car.edit');
  Route::post('/car/update', 'Admin\CarController@update')->name('admin.car.update');
  Route::get('/car/delete/{id}', 'Admin\CarController@destroy')->name('admin.car.delete');
  Route::get('/car/status/{id1}/{id2}', 'Admin\CarController@status')->name('admin.car.status');
  Route::get('/car/featured/{id1}/{id2}', 'Admin\CarController@featured')->name('admin.car.featured');
  //------------ ADMIN CAR MANAGEMENT SECTION ENDS ------------


  //------------ ADMIN USER MANAGEMENT SECTION ------------

  Route::get('/user/datatables', 'Admin\UserController@datatables')->name('admin-user-datatables'); //JSON REQUEST
  Route::get('/user', 'Admin\UserController@index')->name('admin-user-index');
  Route::get('/user/edit/{id}', 'Admin\UserController@edit')->name('admin-user-edit');
  Route::post('/user/update', 'Admin\UserController@update')->name('admin-user-update');
  Route::post('/user/upload', 'Admin\UserController@uploadPropic')->name('admin-user-propic-upload');
  Route::get('/user/status/{id1}/{id2}', 'Admin\UserController@status')->name('admin-user-status');

  //------------ ADMIN USER MANAGEMENT ENDS------------








  //------------ ADMIN EMAIL SETTINGS SECTION ------------

  Route::get('/email-templates/datatables', 'Admin\EmailController@datatables')->name('admin-mail-datatables');
  Route::get('/email-templates', 'Admin\EmailController@index')->name('admin-mail-index');
  Route::get('/email-templates/{id}', 'Admin\EmailController@edit')->name('admin-mail-edit');
  Route::post('/email-templates/{id}', 'Admin\EmailController@update')->name('admin-mail-update');
  Route::get('/email-config', 'Admin\EmailController@config')->name('admin-mail-config');
  Route::get('/groupemail', 'Admin\EmailController@groupemail')->name('admin-group-show');
  Route::post('/groupemailpost', 'Admin\EmailController@groupemailpost')->name('admin-group-submit');
  Route::get('/issmtp/{status}', 'Admin\GeneralSettingController@issmtp')->name('admin-gs-issmtp');

  //------------ ADMIN EMAIL SETTINGS SECTION ENDS ------------




// ************************************ ADMIN SECTION ENDS**********************************************





