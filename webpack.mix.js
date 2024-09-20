const mix = require('laravel-mix');

// Biên dịch JavaScript và CSS
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
       'resources/css/homeowner.css'
   ], 'public/css/homeowner.css');
