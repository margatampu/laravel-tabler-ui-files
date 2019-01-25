const mix = require("laravel-mix");

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

mix.webpackConfig({
    resolve: {
        alias: {
            "circle-progress": "jquery-circle-progress",
            core: path.resolve(
                __dirname,
                "node_modules/tabler-ui/dist/assets/js/core.js"
            )
        }
    }
});

mix.js("resources/js/app.js", "public/js");

mix.sass("resources/sass/app.scss", "public/css");

mix.scripts(
    [
        "resources/js/tabler.js",
        "resources/js/d3.v3.min.js",
        "resources/js/c3.min.js"
    ],
    "public/js/c3.js"
);

mix.scripts(
    [
        "resources/js/jquery-jvectormap-2.0.3.min.js",
        "resources/js/jquery-jvectormap-de-merc.js",
        "resources/js/jquery-jvectormap-world-mill.js"
    ],
    "public/js/jvectormap.js"
);

mix.autoload({
    jquery: ["$", "jQuery", "jquery", "window.jQuery"]
});

mix.extract(
    ["core", "jquery-circle-progress", "selectize", "sparkline"],
    "public/js/vendor.js"
);

mix.version();

mix.setPublicPath("public");
