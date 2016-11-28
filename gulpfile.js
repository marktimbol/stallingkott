const elixir = require('laravel-elixir');
const modulesPath = '../../../node_modules/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
    	.styles([
    		modulesPath + 'owlcarousel/owl-carousel/owl.carousel.css',
    		modulesPath + 'owlcarousel/owl-carousel/owl.theme.css',
    	], 'public/css/carousel.css')

    	.scripts([
    		modulesPath + 'owlcarousel/owl-carousel/owl.carousel.js',
    		'owl-carousel.js'
    	], 'public/js/carousel.js')

        .scripts([
            'modernizr-custom.js'
        ], 'public/js/modernizr.js')

        .styles([
            'video.css'
        ], 'public/css/video.css')

        .scripts([
            'Video.js'
        ], 'public/js/video.js')
    	
    	.webpack('app.js')

        .copy('node_modules/font-awesome/fonts', 'public/build/fonts')

    	.version([
    		'public/css/app.css',
    		'public/js/app.js',
    		'public/css/carousel.css',
            'public/js/carousel.js',
            'public/css/video.css',
    		'public/js/video.js'
    	]);
});
