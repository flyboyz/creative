const path = require('path')
const webpack = require('webpack')

const MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
  entry: {
    app: './src/js/app.js',
    main: './src/scss/app.scss',
    tailwind: './src/scss/tailwind.scss',
  },
  output: {
    path: path.resolve(__dirname),
    filename: 'js/[name].min.js',
    pathinfo: false
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        use: [{
          loader: 'babel-loader',
          options: {
            filename: 'js/[name].min.js',
            exclude: '/node_modules/'
          }
        }]
      },
      {
        test: /\.(scss|sass|css)$/,
        use: [{
          loader: MiniCssExtractPlugin.loader
        }, 'css-loader', 'postcss-loader', 'sass-loader']
      },
      {
        test: /\.(ico|jpg|jpeg|png|gif|eot|otf|webp|svg|ttf|woff|woff2)(\?.*)?$/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[path][name].[ext]',
          },
        },
      },
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].min.css'
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery'
    })
  ]
}