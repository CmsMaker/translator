const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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
     mix.sass('app.scss')
     .copy('node_modules/jquery/dist/jquery.js','resources/assets/js/jquery.js')
     .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js','resources/assets/js/javascripts.js')
     .styles([
       'app.css',
      //  'home_index.css'
     ])
     .scripts([
       'jquery.js',
       'javascripts.js',
       'bootstrap.js',
       'app.js'
     ])
     .version(['css/all.css','js/all.js']);

       //  .webpack('app.js');
 });
