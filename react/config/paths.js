const path = require('path')

module.exports = {
  // Source files
  src: path.resolve(__dirname, '../src'),

  // Production build files
  build: path.resolve(__dirname, '../../dist'),

  // Static files that get copied to build folder
  public: path.resolve(__dirname, '../public'),

  // Static files that get copied to build folder
  wp_public: path.resolve(__dirname, './../../mgr_wppwr_plugin/dist'),
}
