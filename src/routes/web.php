<?php
// MyVendor\contactform\src\routes\web.php
Route::group(['namespace' => 'mzakyalaydrus\contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});

?>