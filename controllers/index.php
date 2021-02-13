<?php

//the index.php inside the controller folder will interact with 
//the DB get what its needs and refers to 'views/index.view.php'

$todos = $app['database']->selectAll('todos');


require 'views/index.view.php';

