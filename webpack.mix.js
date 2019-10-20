const mix = require("laravel-mix");

mix.version();

// mix.copy(["resources/assets/image/website"], "public/assets/image/website");
mix.js(["resources/assets/js/website.js"], "public/assets/js/website.js");
mix.styles(
    ["resources/assets/css/website.css"],
    "public/assets/css/website.css"
);
