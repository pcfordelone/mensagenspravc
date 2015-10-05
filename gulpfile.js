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

    mix.styles([
        'bootstrap.min.css',
        'font-awesome.min.css',
        'animate.min.css',
        'owl.carousel.css',
        'owl.transitions.css',
        'main.css',
        'responsive.css',
        'style.css'
        ], 'public/css/all.css');

    mix.version(['css/all.css'])


});
