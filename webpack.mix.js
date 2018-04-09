let mix = require('laravel-mix');

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
   .js('resources/assets/js/quick-nav.js', 'public/js')
   .js('resources/assets/js/other-nav.js', 'public/js')
   .js('resources/assets/js/search-nav.js', 'public/js')
   .js('resources/assets/js/editor.js', 'public/js')
   .js('resources/assets/js/index.js', 'public/js')
   .js('resources/assets/js/nav.js', 'public/js')
   .js('resources/assets/js/admin.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css')
   .sass('resources/assets/sass/footer.scss', 'public/css')
   .sass('resources/assets/sass/index.scss', 'public/css')
   .sass('resources/assets/sass/project.scss', 'public/css')
   .sass('resources/assets/sass/projects.scss', 'public/css')
   .sass('resources/assets/sass/nav-scroll.scss', 'public/css')
   .sass('resources/assets/sass/drawer.scss', 'public/css')
   .sass('resources/assets/sass/nav.scss', 'public/css');
