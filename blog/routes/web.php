<?php

$router->get('/details','DetailsController@detailSelect');

$router->post('/details','DetailsController@detailCreate');

$router->put('/details','DetailsController@detailUpdate');


