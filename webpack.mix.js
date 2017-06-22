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
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('resources/assets/images', 'public/images', false );
mix.copy('resources/assets/fonts', 'public/fonts', false );
mix.copy('resources/assets/js/gallery.js', 'public/js');
