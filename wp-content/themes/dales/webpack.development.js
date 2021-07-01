const { merge } = require("webpack-merge");
const common = require("./webpack.common.js");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const webpack = require("webpack");

module.exports = merge(common, {
    mode: "development",
    cache: true,
    watch: true,
    plugins: [
        new BrowserSyncPlugin({
            proxy: {
                target: process.env.WEBPACK_URL || "https://local.wp-starter",
            },
            port: process.env.WEBPACK_PORT || 3030,
            injectChanges: true,
            logFileChanges: true,
            notify: true,
            reloadDelay: 0,
            files: [{
                    match: ["**/*.php"],
                    fn: function() {
                        this.reload();
                    },
                },
                "dist/styles/**/*",
            ],
        }),
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            "window.jQuery": "jquery",
        }),
    ],
});