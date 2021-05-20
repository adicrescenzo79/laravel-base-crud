let mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css').options({
  processCssUrls: false
});

mix.js('resources/js/app.js', 'public/js');
