var elixir = require('laravel-elixir');
var webpackConfig = require('./webpack.config');
var publicJsPath = 'public/js';

require('laravel-elixir-webpack');

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
    mix.webpack('vue/simple_example.js', {}, publicJsPath + '/vue/simple_example.js');
    mix.webpack('vue/render_list.js', {}, publicJsPath + '/vue/render_list.js');
    mix.webpack('vue/condition.js', {}, publicJsPath + '/vue/condition.js');
    mix.webpack('vue/handle_event.js', {}, publicJsPath + '/vue/handle_event.js');
    mix.webpack('vue/filter.js', {}, publicJsPath + '/vue/filter.js');
    mix.webpack('vue/computed.js', {}, publicJsPath + '/vue/computed.js');
    mix.webpack('vue/computed_setter.js', {}, publicJsPath + '/vue/computed_setter.js');
    mix.webpack('vue/style_binding.js', {}, publicJsPath + '/vue/style_binding.js');
    mix.webpack('vue/component.js', {}, publicJsPath + '/vue/component.js');
    mix.webpack('vue/modularization.js', webpackConfig, publicJsPath + '/vue/modularization.js');
    mix.sass('app.scss');
});
