// Gulp Dependencies
var gulp = require('gulp');
var jshint = require('gulp-jshint');
var clean = require('gulp-clean');
var copy = require('gulp-copy');
var minifyCss = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

// Test Dependencies
var mochaPhantomjs = require('gulp-mocha-phantomjs');

gulp.task('clean', function () {
  return gulp.src('build/*', {read: false})
    .pipe(clean());
});

gulp.task('copy', function(){
  gulp.src(['server.js'])
    .pipe(gulp.dest('build/'));
  gulp.src('views/**/*')
    .pipe(gulp.dest("build/views"));
  gulp.src(['public/fonts/*'])
    .pipe(gulp.dest('build/public/fonts'));
});

gulp.task('minify-css', function() {
  return gulp.src('public/stylesheets/*')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('build/public/stylesheets'));
});

gulp.task('minify-img', function () {
    return gulp.src('public/images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('build/public/images'));
});

gulp.task('minify-js', function() {
  return gulp.src('public/javascripts/*')
    .pipe(uglify())
    .pipe(gulp.dest('build/public/javascripts'));
});

gulp.task('lint', function() {
  return gulp.src('*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

gulp.task('watch', function() {
  gulp.watch('*.js', ['lint']);
  gulp.watch('test/*.js', ['test']);
  gulp.task('test', function() {
    return gulp.src('test/index.html')
      .pipe(mochaPhantomjs());
    });
});

gulp.task('build', ['clean', 'copy', 'minify-css', 'minify-img', 'minify-js']);
gulp.task('default', ['lint', 'watch']);
