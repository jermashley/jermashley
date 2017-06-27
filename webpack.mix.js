const { mix } = require('laravel-mix');

// let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
//
//
// mix.webpackConfig( {
//     plugins: [
//         new ImageminPlugin( {
// //            disable: process.env.NODE_ENV !== 'production', // Disable during development
// 			imageminMozjpeg: {
// 			  quality: 50,
// 			  progressive: true
// 			},
// 			pngquant: {
// 		        quality: '50-75',
// 		    },
// 			test: /\.(jpe?g|png|gif|svg)$/i,
// 	        }
// 		),
//     ],
// } )

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('vendor/twbs/bootstrap/dist/js/bootstrap.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('vendor/twbs/bootstrap/scss/bootstrap.scss', 'public/css')

mix.copy('resources/assets/images', 'public/images', false)
   .copy('resources/assets/fonts', 'public/fonts', false)
   .copy('node_modules/jquery/dist/jquery.slim.min.js', 'public/js', false)
   .copy('node_modules/tether/dist/js/tether.min.js', 'public/js', false)
   .copy('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css', 'public/css', false)
   .copy('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js', 'public/js', false);
