<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/orders', ['as' => 'orders.index', 'uses' => 'OrderController@index']);
// Route::get('/orders/create', ['as' => 'orders.create', 'uses' => 'OrderController@create']);

Wordpress::set('foo');
Route::wordpress();
Route::get('orders', ['as' => 'orders.index', 'uses' => 'OrderController@index'])
     ->addToMenu('Orders');
Route::get('orders/create', ['as' => 'orders.create', 'uses' => 'OrderController@create'])
     ->addToMenu('Create new order', 'orders.index');

Route::get('products', ['as' => 'Products.index', 'uses' => function (Request $request) {
    dd($request);
    return 'fo';
}])->addToMenu('Products');

Route::post('orders/store', ['as' => 'orders.create', 'uses' => 'OrderController@store']);

// Route::menu('Orders', ['as' => 'orders.index', 'uses' => 'OrderController@index'])
//      ->item('Create', ['as' => 'orders.create', 'uses' => 'OrderController@create'])
//      ->route('post', 'fooa', ['as' => 'orders.store', 'uses' => 'OrderController@store']);

// dd(route('orders.index'));

/*
function adding_custom_meta_boxes( $post_type, $post ) {
    add_meta_box(
        'my-meta-box',
        __( 'My Meta Box' ),
        'render_my_meta_box',
        ['post', 'page'],
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'adding_custom_meta_boxes', 10, 2 );
*/
