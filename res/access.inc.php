<?php

// Users data
$imSettings['access']['users'] = array(
	'example@example.com' => array(
		'id' => '6ycc6l8h',
		'groups' => array('0l1ggk0h'),
		'firstname' => 'Admin',
		'lastname' => '',
		'email' => 'example@example.com',
		'password' => '$2a$11$lW0m6EkRv6B1DsW47PJFQ.ml83FrQ.Mwl6WwmLviMobGwSnHIpEXC',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	),
	'dijope@t-online.de' => array(
		'id' => 'x76m39py',
		'groups' => array('0l1ggk0h'),
		'firstname' => 'KPK',
		'lastname' => 'KPK',
		'email' => 'dijope@t-online.de',
		'password' => '$2a$11$xN9PJ0.lZOGodi3pfneiMebnSHGbUjgJG2RYfMXxQnlhFdo2awMBO',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	)
);

// Admins list
$imSettings['access']['admins'] = array('6ycc6l8h', 'x76m39py');

// Page/Users permissions
$imSettings['access']['pages'] = array();

// PASSWORD CRYPT

$imSettings['access']['password_crypt'] = array(
	'encoding_id' => 'php_default',
	'encodings' => array(
		'no_crypt' => array(
			'encode' => function ($pwd) { return $pwd; },
			'check' => function ($input, $encoded) { return $input == $encoded; }
		),
		'php_default' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_DEFAULT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		),
		'csharp_bcrypt' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_BCRYPT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		)
	)
);

// End of file access.inc.php