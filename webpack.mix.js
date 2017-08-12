let mix = require('laravel-mix');

/*
 Laravel Mix 提供了一套流式 API，使用一些通用的 CSS 和 JavaScript 预处理器为 Laravel 应用定义 Webpack 构建步骤。
 通过简单的方法链，你可以流式定义资源管道
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
