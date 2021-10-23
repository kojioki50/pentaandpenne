var gulp = require("gulp");
var sass = require("gulp-sass")(require('sass'));;
var uglifycss = require('gulp-uglifycss');
var plumber = require('gulp-plumber');

gulp.task("sass", function () {
  return gulp.src("./scss/*.scss")
    .pipe(sass().on('error', sass.logError))
    // .pipe(plumber())
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest("./css"))

});


gulp.task('css', function () {
  return gulp.src('./css/*.css')
    .pipe(uglifycss({
    "maxLineLen": 80,
    "uglyComments": true
  }))
  .pipe(gulp.dest('./dist/'))
  
});

gulp.task('run', gulp.series(gulp.parallel('sass', 'css')));

gulp.task('watch', function(done){
  gulp.watch('./scss/*.scss', gulp.task('sass'));
  gulp.watch('./css/*.css', gulp.task('css'));
done();
});

gulp.task('default', gulp.series(gulp.parallel('run', 'watch')))

