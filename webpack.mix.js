let mix = require('laravel-mix');

mix.autoload({
	'jquery': ['jQuery','$']
});

mix.styles([
	'node_modules/bootstrap/dist/css/bootstrap.css',
	'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
	'resources/assets/css/app.css'
], 'public/assets/app.css');

mix.js([
	'node_modules/jquery/dist/jquery.js',
	'node_modules/popper.js/dist/popper.js',
	'node_modules/bootstrap/dist/js/bootstrap.js',
	'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
	'node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js',
	'resources/assets/js/app.js'
], 'public/assets/app.js');

