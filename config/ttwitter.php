<?php

// You can find the keys here : https://apps.twitter.com/

return [
	'debug'               => function_exists('env') ? env('APP_DEBUG', false) : false,

	'API_URL'             => 'api.twitter.com',
	'UPLOAD_URL'          => 'upload.twitter.com',
	'API_VERSION'         => '1.1',
	'AUTHENTICATE_URL'    => 'https://api.twitter.com/oauth/authenticate',
	'AUTHORIZE_URL'       => 'https://api.twitter.com/oauth/authorize',
	'ACCESS_TOKEN_URL'    => 'https://api.twitter.com/oauth/access_token',
	'REQUEST_TOKEN_URL'   => 'https://api.twitter.com/oauth/request_token',
	'USE_SSL'             => true,

	'CONSUMER_KEY'        => function_exists('env') ? env('TW_APP_ID', '') : '',
	'CONSUMER_SECRET'     => function_exists('env') ? env('TW_APP_SECRET', '') : '',
	'ACCESS_TOKEN'        => function_exists('env') ? env('TW_ACCESSTOKEN', '') : '',
	'ACCESS_TOKEN_SECRET' => function_exists('env') ? env('TW_ACCESSTOKEN_SC', '') : '',
];
