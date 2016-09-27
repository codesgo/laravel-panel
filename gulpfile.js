const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {

	mix.sass('theme.scss')
		.webpack('scripts.js')
		.sass('./panel/resources/assets/sass/theme.scss', 'public/panel/css')
		.webpack('./panel/resources/assets/js/scripts.js', 'public/panel/js')
		.browserSync( { proxy: 'laravel.dev'} );

	// Panel Styles
	mix.styles([
		'bootstrap/css/bootstrap.css',
	], 'public/panel/css/plugins.css', 'public/vendor');

	// Panel Scripts
	mix.scripts([
		'jquery.js',
		'tether.js',
		'bootstrap/js/bootstrap.js',
	], 'public/panel/js/plugins.js', 'public/vendor');


	// Front-end Styles
	mix.styles([
		'bootstrap/css/bootstrap.css',
	], 'public/css/plugins.css', 'public/vendor');

	// Front-end Scripts
	mix.scripts([
		'jquery.js',
		'tether.js',
		'bootstrap/js/bootstrap.js',
	], 'public/js/plugins.js', 'public/vendor');

});
