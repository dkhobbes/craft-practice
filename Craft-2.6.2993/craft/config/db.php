<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
	'server' => 'localhost',

	// The name of the database to select.
	'database' => '',

	// The database username to connect with.
	'user' => 'root',

	// The database password to connect with.
	'password' => '',

	// The prefix to use when naming tables. This can be no more than 5 characters.
	'tablePrefix' => 'craft',

);
//
// return array(
//     '*' => array(
//         'tablePrefix' => 'craft',
//     ),
//     '.test' => array(
//         'server' => 'localhost',
//         'user' => 'root',
//         'password' => 'letmein',
//         'database' => 'buildwithcraft',
//     ),
//     '.com' => array(
//         'server' => 'localhost',
//         'user' => 'av12345',
//         'password' => '$uP3r$3jp3t',
//         'database' => 'av12345-buildwithcraft',
//     ),
// );
