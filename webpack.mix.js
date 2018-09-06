let mix = require('laravel-mix');

mix.styles([
	'node_modules/bootstrap/dist/css/bootstrap.css',
	'resources/assets/css/app.css'
], 'public/assets/app.css');

mix.js([
	'node_modules/jquery/dist/jquery.js',
	'node_modules/popper.js/dist/popper.js',
	'node_modules/bootstrap/dist/js/bootstrap.js'
], 'public/assets/app.js');

