const mix = require('laravel-mix');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
    .sourceMaps()
    .sass('resources/sass/app.scss', 'public/css').options({
})
    .copyDirectory('resources/images', 'public/images')
    .webpackConfig({
        plugins: [
            new SVGSpritemapPlugin(
                'resources/images/icons/*.svg',
                {
                    output: {
                        filename: 'images/sprite.svg',
                        svg: {
                            sizes: false
                        },
                        svgo: {
                            plugins: [
                                {
                                    'removeStyleElement': false
                                },
                            ]
                        },
                    },
                    sprite: {
                        prefix: 'icon-',
                        generate: {
                            title: false,
                        },
                    },
                }
            ),
        ],
    });

mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery'
            })
        ]
    };
});

// mix.autoload({
//     'jquery': ['$', 'window.jQuery', 'jQuery'],
//     'tether': ['window.Tether', 'Tether'],
// });
