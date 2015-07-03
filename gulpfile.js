

var gulp = require('gulp'),
      concat = require('gulp-concat'),
      gutil = require('gulp-util'),
      connect = require('gulp-connect'),
      compass = require('gulp-compass');


//only use there is more than one script file being implemented
var jsSources = ['components/scripts/script.js'];

//all sass files are not needed here because they are imported into style.scss
//then style.scss is ported into the css format
var sassSources = ['components/sass/style.scss'];

var htmlSources = ['builds/development/*.html'];

//only use there is more than one script file being implemented
gulp.task('js', function (){
    gulp.src(jsSources)
        .pipe(concat('script.js'))
        .pipe(gulp.dest('builds/development/js'))
        .pipe(connect.reload())
});

gulp.task('compass', function (){
    gulp.src(sassSources)
        .pipe(compass({
            sass: 'components/sass',
            image: 'builds/development/images',
            style: 'expanded'
        }))
        .on('error', gutil.log)
        .pipe(gulp.dest('builds/development/css'))
        .pipe(connect.reload())
});

gulp.task('html', function(){
    gulp.src(htmlSources)
    .pipe(connect.reload())
});

gulp.task('connect', function(){
    connect.server({
        root: 'builds/development/',
        livereload: true,
        port: 8000
    });
});

gulp.task('watch', function (){
    gulp.watch(jsSources, ['js']);
    gulp.watch('components/sass/*.scss', ['compass']);
    gulp.watch(htmlSources, ['html']);    
});

gulp.task('default', ['js', 'compass', 'connect', 'watch']);