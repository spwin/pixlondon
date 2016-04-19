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
 mix.sass('app.scss');
 mix.sass('best_app.scss');
});

elixir(function(mix) {
 mix.scripts([
  'jquery_v1_11_3.js',
  'rotate.js',
  'script.js'
 ]);
 mix.scripts([
  'jquery_v1_11_3.js',
  'best_script.js'
 ], 'public/js/best_all.js');
});