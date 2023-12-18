const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const browserSync = require('browser-sync').create();

// Define paths
const paths = {
    php: './docroot/**/*.php',
    scss: './docroot/scss/**/*.scss',
    js: './docroot/js/**/*.js',
    cssDest: './docroot/css'
};

// Compile SCSS into CSS
function style() {
    return gulp.src(paths.scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest(paths.cssDest))
        .pipe(browserSync.stream());
}

// Initialize BrowserSync
function browserSyncInit(done) {
    browserSync.init({
        proxy: 'https://sass-example.ddev.site/', // Replace with your local development URL
        open: true,
        notify: false
    });
    done();
}

// Reload the browser
function reload(done) {
    browserSync.reload();
    done();
}

// Watch files
function watchFiles() {
    gulp.watch(paths.scss, style);
    gulp.watch([paths.js, paths.php], reload);
}

// Define complex tasks
const watch = gulp.parallel(watchFiles, browserSyncInit);

// Export tasks
exports.style = style;
exports.watch = watch;
