const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');

// Compile Sass & Inject Into Browser
gulp.task('sass', function () {
    return gulp.src("./assets/scss/**/*.scss")
        .pipe(sass({
            outputStyle: 'compressed'
          }).on('error', sass.logError))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest("./assets/css/"))
});

// Watch Sass & Serve
gulp.task('serve', gulp.series('sass', function() {
    gulp.watch("./assets/scss/**/*.scss", gulp.series('sass'));
}));



// Default Task
gulp.task('default', gulp.series('serve'));