<?php


Route::get('/fluxo','Fluxo\FluxoController@index')->name('fluxo');

Route::post('/inserir','Fluxo\FluxoController@inserir')->name('inserir');
Route::get('/deletar/{id}','Fluxo\FluxoController@deletar')->name('deletar');

Route::post('/inserirCredito','Fluxo\FluxoController@inserirCredito')->name('inserirCredito');
Route::get('/deletarCredito/{id_credito}','Fluxo\FluxoController@deletarCredito')->name('deletarCredito');

Route::get('/pagueiCredito','Fluxo\FluxoController@pagueiCredito')->name('pagueiCredito');
