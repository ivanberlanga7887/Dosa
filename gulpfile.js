const gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    postcss = require('gulp-postcss'),
    cssnano = require('cssnano'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync').create(),
    rename = require('gulp-rename'),
    minify = require('gulp-minify');

const rootSrc = 'assets/';
const rootDest = 'assets/';

const scssArray = [
    rootSrc + 'scss/*.scss',
];
const jsArray = [
    rootSrc + 'js/*.js', 
    '!' + rootSrc + 'js/*.min.js', // Ignorar archivos minificados para evitar el ciclo
];
const watchArray = [
    rootSrc + 'scss/**/*.scss',
    rootSrc + 'js/**/*.js',
    '!' + rootSrc + 'js/**/*.min.js', // Ignorar los minificados al observar
    'dosa/**/*.php',
];

const paths = {
    styles: {
        src: scssArray,
        dest: rootDest + 'css',
    },
    js: {
        src: jsArray,
        dest: rootDest + 'js',
    }
};

function style() {
    return gulp
        .src(paths.styles.src)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([cssnano({ preset: ['default', { discardComments: { removeAll: true } }] })]))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

function js() {
    return gulp
        .src(paths.js.src, { allowEmpty: true }) // Asegúrate de que src está definido
        .pipe(minify({
            ext: {
                src: '.js',   // Mantener el archivo original con la extensión .js
                min: '.min.js' // El archivo minificado tendrá la extensión .min.js
            },
            noSource: true,   // No conservar el archivo sin minificar
            mangle: false,
            compress: false
        }))
        .pipe(gulp.dest(paths.js.dest))
        .pipe(browserSync.stream());
}

function reload(done) {
    browserSync.reload();
    done();
}

function watchStyles() {
    gulp.watch(watchArray, style);
}

function watchScripts() {
    gulp.watch(paths.js.src, js);
}

function watchPhp() {
    gulp.watch('dosa/**/*.php', reload); // Watch PHP files for browser reload
}

function watch() {
    browserSync.init({
        proxy: 'http://localhost:3006/',
        port: 3006,
        ui: false,
        open: false
    });
    watchStyles();
    watchPhp(); // Watch PHP files for changes
    watchScripts(); // Ahora observa los scripts
}

exports.watch = watch;
exports.style = style;
exports.js = js;

const build = gulp.parallel(style, watch, js);
gulp.task('default', build);
