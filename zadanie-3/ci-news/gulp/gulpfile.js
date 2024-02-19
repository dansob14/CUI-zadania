const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');

function compileSass() {
  return gulp.src('sass/**/*.sass') // input
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('C:/xampp/htdocs/ci-news/public/css')); // Output
}

function uglifyJS() {
  return gulp.src('js/**/*.js') // input
    .pipe(uglify())
    .pipe(gulp.dest('dist/js')); // Output
}

gulp.task('sass', compileSass);
gulp.task('js', uglifyJS);
