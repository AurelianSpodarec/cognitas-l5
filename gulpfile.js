const gulp = require('gulp'),
    sass = require("gulp-sass"),
    browserSync = require('browser-sync').create(),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    inject = require('gulp-inject'),
    concat = require('gulp-concat');


const paths = {
    styles: {
        src: 'assets/scss/**/*.scss',
        dest: 'build/css/'
    },
    javaScript: {
        src: 'assets/js/*.js',
        dest: 'build/js/'
    }
};



function scripts() {
    return (
        gulp
            .src(paths.javaScript.src)
            .pipe(uglify())
            .pipe(gulp.dest(paths.javaScript.dest))
    )
}

// If there is no build CSS, it errors out so you need to create it
function style() {
    return (
        gulp
            .src(paths.styles.src)
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(sourcemaps.write('.', { sourceRoot: 'css-source' }))
            .pipe(inject(gulp.src(paths.styles.dest)))
            .on("error", sass.logError)
            .pipe(gulp.dest(paths.styles.dest))
    );
}

function reload() {
    browserSync.reload();
}


// function injectStyles() {
//     return (
//         gulp
//             .src(paths.styles.dest)
//             .pipe()
//     )
// }

function watch() {
    style();
    scripts();

    browserSync.init({
        proxy: 'http://localhost:8888',
        watchOptions: {
            debounceDelay: 500
        },
    });

    gulp.watch(paths.styles.src, style).on('change', browserSync.reload);
    gulp.watch(paths.javaScript.src, scripts).on('change', browserSync.reload);
    gulp.watch("*.php").on('change', browserSync.reload);;
}

// Build
function build() {
    style();
    scripts();
}

exports.build = build;
exports.style = style;
exports.watch = watch;