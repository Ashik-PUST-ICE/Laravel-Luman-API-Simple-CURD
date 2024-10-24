<?php

$router->get('/details','DetailsController@detailSelect');

$router->post('/details','DetailsController@detailCreate');

$router->put('/details','DetailsController@detailUpdate');

$router->delete('/details','DetailsController@detailDelete');



$router->get('/builder','BuilderController@AllRows');

$router->get('/builder','BuilderController@Rows');

$router->get('/builder','BuilderController@singleValue');

$router->get('/builder','BuilderController@pluckmethod');


