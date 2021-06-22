const { merge } = require('webpack-merge')
const common = require('./webpack.common.js')

const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = merge(common, {
  mode: 'development',
  plugins: [
    new BrowserSyncPlugin({
      open: 'external',
      proxy: 'creative.wp',
      port: 8081,
      notify: false,
      files: [
        './**/*.php',
        './*.php',
      ]
    }, {
      injectChanges: true,
    }),
  ]
})