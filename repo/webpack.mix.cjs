let mix = require('laravel-mix');
mix.sass('resources/scss/style.scss','public/assets/css');
mix.options({
    processCssUrls: false
});
