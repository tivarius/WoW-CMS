<?php
	Router::connect('/', array('controller' => 'home', 'action' => 'index'));
#  Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	// Fallback
#   Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
