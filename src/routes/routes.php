<?php
Route::get('/mpPayment','jorgelsaud\Mercadopago\controllers\MercadopagoController@index');
Route::post('/mpPayment','jorgelsaud\Mercadopago\controllers\MercadopagoController@save');
Route::get('/success','jorgelsaud\Mercadopago\controllers\MercadopagoController@success');