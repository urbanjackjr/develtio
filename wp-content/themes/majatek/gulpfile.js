const { src, dest, watch, series, parallel } = require("gulp");

const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const webpack = require("webpack-stream");
const webpackConfig = require("./webpack.config");

// File paths
const files = {
	scssPath: "resources/assets/sass/**/*.scss",
	jsMain: "resources/assets/js/**/main.js",
	jsPath: "resources/assets/js/**/*.js",
};

function scssTask() {
	return src(files.scssPath)
		.pipe(sourcemaps.init()) // initialize sourcemaps first
		.pipe(sass([])) // compile SCSS to CSS
		.pipe(postcss([autoprefixer(), cssnano()])) // PostCSS plugins
		.pipe(sourcemaps.write(".")) // write sourcemaps file in current directory
		.pipe(dest("dist/css")); // put final CSS in dist folder
}

function jsTask() {
	return src(files.jsMain).pipe(webpack(webpackConfig)).pipe(dest("dist/js"));
}

function watchTask() {
	watch([files.scssPath, files.jsPath], parallel(scssTask, jsTask));
}

exports.default = series(parallel(scssTask, jsTask), watchTask);
