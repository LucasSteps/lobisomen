let mix = require('laravel-mix');

let pagesJs = [
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'resources/js/main.js',
    'resources/js/sidebar.js',
    'resources/js/portifolio/home.js',
];

    
mix.js(pagesJs, 'resources/assets/js/app.js');
mix.sass('resources/sass/app.scss', 'resources/assets/css/app.css');
