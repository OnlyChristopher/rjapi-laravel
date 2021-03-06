<?php
// >>>routes>>>
// Tag routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/tag/bulk', 'TagController@createBulk');
    Route::patch('/tag/bulk', 'TagController@updateBulk');
    Route::delete('/tag/bulk', 'TagController@deleteBulk');
    // basic routes
    Route::get('/tag', 'TagController@index');
    Route::get('/tag/{id}', 'TagController@view');
    Route::post('/tag', 'TagController@create');
    Route::patch('/tag/{id}', 'TagController@update');
    Route::delete('/tag/{id}', 'TagController@delete');
    // relation routes
    Route::get('/tag/relationships/{relations}', 'TagController@relations');
    Route::post('/tag/relationships/{relations}', 'TagController@createRelations');
    Route::patch('/tag/relationships/{relations}', 'TagController@updateRelations');
    Route::delete('/tag/relationships/{relations}', 'TagController@deleteRelations');
});
// <<<routes<<<

// >>>routes>>>
// Article routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/article/bulk', 'ArticleController@createBulk');
    Route::patch('/article/bulk', 'ArticleController@updateBulk');
    Route::delete('/article/bulk', 'ArticleController@deleteBulk');
    // basic routes
    Route::get('/article', 'ArticleController@index');
    Route::get('/article/{id}', 'ArticleController@view');
    Route::post('/article', 'ArticleController@create');
    Route::patch('/article/{id}', 'ArticleController@update');
    Route::delete('/article/{id}', 'ArticleController@delete');
    // relation routes
    Route::get('/article/relationships/{relations}', 'ArticleController@relations');
    Route::post('/article/relationships/{relations}', 'ArticleController@createRelations');
    Route::patch('/article/relationships/{relations}', 'ArticleController@updateRelations');
    Route::delete('/article/relationships/{relations}', 'ArticleController@deleteRelations');
});
// <<<routes<<<

// >>>routes>>>
// User routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/user/bulk', 'UserController@createBulk');
    Route::patch('/user/bulk', 'UserController@updateBulk');
    Route::delete('/user/bulk', 'UserController@deleteBulk');
    // basic routes
    Route::get('/user', 'UserController@index');
    Route::get('/user/{id}', 'UserController@view');
    Route::post('/user', 'UserController@create');
    Route::patch('/user/{id}', 'UserController@update');
    Route::delete('/user/{id}', 'UserController@delete');
    // relation routes
    Route::get('/user/relationships/{relations}', 'UserController@relations');
    Route::post('/user/relationships/{relations}', 'UserController@createRelations');
    Route::patch('/user/relationships/{relations}', 'UserController@updateRelations');
    Route::delete('/user/relationships/{relations}', 'UserController@deleteRelations');
});
// <<<routes<<<

// >>>routes>>>
// Menu routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/menu/bulk', 'MenuController@createBulk');
    Route::patch('/menu/bulk', 'MenuController@updateBulk');
    Route::delete('/menu/bulk', 'MenuController@deleteBulk');
    // basic routes
    Route::get('/menu', 'MenuController@index');
    Route::get('/menu/{id}', 'MenuController@view');
    Route::post('/menu', 'MenuController@create');
    Route::patch('/menu/{id}', 'MenuController@update');
    Route::delete('/menu/{id}', 'MenuController@delete');
    // relation routes
    Route::get('/menu/relationships/{relations}', 'MenuController@relations');
    Route::post('/menu/relationships/{relations}', 'MenuController@createRelations');
    Route::patch('/menu/relationships/{relations}', 'MenuController@updateRelations');
    Route::delete('/menu/relationships/{relations}', 'MenuController@deleteRelations');
});
// <<<routes<<<

// >>>routes>>>
// Template routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/template/bulk', 'TemplateController@createBulk');
    Route::patch('/template/bulk', 'TemplateController@updateBulk');
    Route::delete('/template/bulk', 'TemplateController@deleteBulk');
    // basic routes
    Route::get('/template', 'TemplateController@index');
    Route::get('/template/{id}', 'TemplateController@view');
    Route::post('/template', 'TemplateController@create');
    Route::patch('/template/{id}', 'TemplateController@update');
    Route::delete('/template/{id}', 'TemplateController@delete');
    // relation routes
    Route::get('/template/relationships/{relations}', 'TemplateController@relations');
    Route::post('/template/relationships/{relations}', 'TemplateController@createRelations');
    Route::patch('/template/relationships/{relations}', 'TemplateController@updateRelations');
    Route::delete('/template/relationships/{relations}', 'TemplateController@deleteRelations');
});
// <<<routes<<<

// >>>routes>>>
// CategoryTemplate routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/category_template/bulk', 'CategoryTemplateController@createBulk');
    Route::patch('/category_template/bulk', 'CategoryTemplateController@updateBulk');
    Route::delete('/category_template/bulk', 'CategoryTemplateController@deleteBulk');
    // basic routes
    Route::get('/category_template', 'CategoryTemplateController@index');
    Route::get('/category_template/{id}', 'CategoryTemplateController@view');
    Route::post('/category_template', 'CategoryTemplateController@create');
    Route::patch('/category_template/{id}', 'CategoryTemplateController@update');
    Route::delete('/category_template/{id}', 'CategoryTemplateController@delete');
    // relation routes
    Route::get('/category_template/relationships/{relations}', 'CategoryTemplateController@relations');
    Route::post('/category_template/relationships/{relations}', 'CategoryTemplateController@createRelations');
    Route::patch('/category_template/relationships/{relations}', 'CategoryTemplateController@updateRelations');
    Route::delete('/category_template/relationships/{relations}', 'CategoryTemplateController@deleteRelations');
});
// <<<routes<<<
