<?php
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	// Fallback
    Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
