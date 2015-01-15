/* jshint node:true */
'use strict';
// generated on 2015-01-12 using generator-gulp-webapp 0.2.0
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();

gulp.task('styles', function () {
  return gulp.src('styles/*.scss')
    .pipe($.plumber())
    .pipe($.sass({
      style: 'expanded',
      precision: 10
    }))
    .pipe($.autoprefixer({browsers: ['last 1 version']}))
    .pipe(gulp.dest('styles'));
});

gulp.task('watch', function () {
  
  gulp.watch('styles/**/*.scss', ['styles']);

});