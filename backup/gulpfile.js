var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-csso');
var autoprefixer = require('gulp-autoprefixer');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var source      = require('vinyl-source-stream');
var buffer      = require('vinyl-buffer');
var sourcemaps = require('gulp-sourcemaps');
var browserify = require ('browserify');
var uglify = require('gulp-uglify');
var babelify = require('babelify');

var paths = {
    bootstrap: './node_modules/bootstrap-sass/assets/stylesheets/'
}

gulp.task('sass', function () {
    return gulp.src('assets/sass/app.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: [
                paths.bootstrap
            ]
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCSS())
        .pipe(gulp.dest('./wp-content/themes/pugfinancial/css/'));
});

gulp.task('js', function () {
    /*return gulp.src('assets/js/app.js')
        .pipe(babel({
            presets: ["env"]
        }))
        .pipe(concat('app.js'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./wp-content/themes/pugfinancial/js/'));*/

    return browserify({entries: 'assets/js/app.js', debug: true})
        .transform("babelify", { presets: ["env"] })
        .bundle()
        .pipe(source('app.js'))
        .pipe(buffer())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./wp-content/themes/pugfinancial/js/'));
});

gulp.task('watch', function () {
    gulp.watch(['assets/sass/**/*', 'assets/js/**/*'], ['sass', 'js'])
        .on('change', function (event) {
            console.log(`Watch: ${event.path} was ${event.type}.`);
        });
});

gulp.task('default', ['sass']);