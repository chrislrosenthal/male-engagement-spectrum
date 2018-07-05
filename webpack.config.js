const path = require('path');

module.exports = {
  entry: './src/app.js',
  watch: true,
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist')
  },
  module: {
      rules: [
          {
              test: /\.js$/,
              loader: 'babel-loader',
              query: {
                  presets: ['env']
              }
          }
      ]
  },
};