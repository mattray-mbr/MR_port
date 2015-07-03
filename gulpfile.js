var gulp = require('gulp'),
      concat = require('gulp-concat'),
      gutil = require('gulp-util');


//only use there is more than one script file being implemented
var jsSources = ['components/scripts/script.js'];

gulp.task('js', function (){
    gulp.src(jsSources)
        .pipe(concat('script.js'))
        .pipe(gulp.dest('builds/development/js'))
});