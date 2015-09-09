var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.phpUnit();
});


elixir(function(mix) {
    mix.copy('bower_components/bootstrap-less/less', 'resources/assets/less/bootstrap');
    mix.less([
        'bootstrap/bootstrap.less',
        'app.less', 
        'students.less'
    ], 'public/css/style.css');
});

elixir(function(mix) {
    mix.scripts([
        'app.js', 
        'students.js'
    ], 'public/js/scripts.js');
});

elixir(function(mix) 
{
	// przekopiowanie folderu z obrazkami do głównego folderu public
	mix.copy('vendor/almasaeed2010/adminlte/dist/img', 'public/img');

	// przekopiowanie dodatków do AdminLte 2
	mix.copy('vendor/almasaeed2010/adminlte/plugins', 'public/plugins');

	// przekopiowanie czcionej do głównego folderu public    
	mix.copy('vendor/components/font-awesome/fonts', 'public/fonts');
	mix.copy('vendor/driftyco/ionicons/font-awesome/fonts', 'public/fonts');

	// wygenerowanie stylu bootstrap z zasobu AdminLte 2
	mix.styles([

		// zasoby wczytywane z pobranego pakietu     
		'vendor/almasaeed2010/adminlte/bootstrap/css/bootstrap.min.css'
		], 
		
		// plik wyjściowy
		'public/css/bootstrap.min.css', 

		// deklaracja korzystania ze ścieżki relatywnej do głównego folderu
		'./');
	
	// wygenerowania arkusza stylów dla panelu AdminLte 2
	mix.styles([
		'vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css',
		'vendor/almasaeed2010/adminlte/dist/css/skins/skin-purple.min.css',
		'vendor/components/font-awesome/css/font-awesome.min.css',
		'vendor/driftyco/ionicons/css/ionicons.min.css' 
		], 'public/css/back.min.css', './');

	// wygenerowanie pliku bootstrap java script na podstawie zasobu pakietu
	mix.scripts([
		'vendor/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js'
		], 'public/js/bootstrap.min.js', './');

	// wygenerowanie pliku java script, dla panelu AdminLte 2
	mix.scripts([
		'vendor/almasaeed2010/adminlte/dist/js/app.min.js'
		], 'public/js/back.min.js', './');
});


