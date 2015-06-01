// Gulp Dependencies
var gulp = require('gulp');
var jshint = require('gulp-jshint');

// Test Dependencies
var mochaPhantomjs = require('gulp-mocha-phantomjs');

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

gulp.task('default', ['lint', 'watch']);
