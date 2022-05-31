module.exports = {
  mode: "production",
  entry: "./resources/assets/js/main.js",
  output: {
    path: __dirname + "/dist",
    filename: "all.js",
  },
  module: {
    rules: [
      {
        test: /\.js?$/,
        loader: "babel-loader",
        exclude: /node_modules/,
        options: {
          presets: ["@babel/preset-env"],
        },
      },
    ],
  },
};
