/**
 * Created by Marek Parys on 28/3/18.
 */
// == Gulp Require Modules == //
require("es6-promise").polyfill();
var gulp =          require("gulp"),
    debug =         require("gulp-debug"),
    sass =          require("gulp-sass"),
    sassGlob =      require("gulp-sass-glob"),
    autoprefixer =  require("gulp-autoprefixer"),
    cssmin =        require("gulp-cssmin"),
    concat =        require("gulp-concat"),
    livereload =    require("gulp-livereload"),
    plumber =       require("gulp-plumber"),
    sourcemaps =    require("gulp-sourcemaps"),
    uglify =        require("gulp-uglifyjs"),
    notify =        require("gulp-notify");

var javascript = [
  "landing/src/scripts/vendors/jquery.scrollify.js",
  "landing/src/scripts/vendors/swiper.min.js",
  "landing/src/scripts/vendors/isInViewport.js",
  "landing/src/scripts/vendors/iziModal.min.js"
];

//  Compiles SASS, autoprefixes and JS then minifies production build

// == STYLES TASKS == //

gulp.task("css", function() {
  return gulp
    .src("src/sass/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sassGlob())
    .pipe(sass())
    .pipe(
      autoprefixer({
        browsers: [
          "last 2 version",
          "safari 5",
          "ie 8",
          "ie 9",
          "Firefox > 20",
          "opera 12.1"
        ]
      })
    )
    .pipe(cssmin())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("build/css/"));
});

/*
 *  Task: JS / Browserify Compilation
 *  --------------------------------------------------
 */

gulp.task("js", function() {
  return gulp
    .src("src/scripts/**/*.js")
    .pipe(
      uglify("app.js", {
        mangle: false,
        outSourceMap: true,
        sourceRoot: true,
        output: {
          beautify: false
        }
      })
    )
    .pipe(gulp.dest("build/js/"));
});

// == WATCH TASKS == //

gulp.task('watch:changes', function () {
  gulp.watch('src/sass/**/*.scss', gulp.series('css'));
  gulp.watch('src/scripts/**/*.js', gulp.series('js'));
  livereload.listen();
  gulp.watch("build/css/app.css").on("change", livereload.changed);
});

gulp.task('watch', gulp.series('css', 'js',
  gulp.parallel('watch:changes')
));

// == DEFAULT GULP TASK == //

gulp.task('default', gulp.series('watch', function(done) {
  livereload.listen();
  done();
}));