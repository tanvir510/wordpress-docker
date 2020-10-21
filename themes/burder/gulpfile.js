const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

function scss() {
    return src( './assets/src/scss/*.scss', { sourcemaps: true } )
        .pipe( sass() )
        .pipe( autoprefixer() )
        .pipe( minifyCSS() )
        .pipe( dest('./assets/css'), { sourcemaps: true } )
        .pipe( browserSync.stream() );
}

function js() {
    return src( './assets/src/js/*.js', { sourcemaps: true } )
        .pipe( babel( {
            presets: ['@babel/preset-env']
        } ) )
        .pipe( concat( 'build.min.js' ) )
        .pipe( dest( './assets/js', { sourcemaps: true } ) );
}

function watchFiles() {
    browserSync.init({
        proxy: 'localhost:9004',
        files: [
            './**/*.php'
        ]
    });

    watch( './assets/src/scss/*.scss', scss ).on( 'change', browserSync.reload );
    watch( './assets/src/js/*.js', js ).on( 'change', browserSync.reload );
}


exports.scss = scss;
exports.js = js;
exports.watch = watchFiles;