const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

// Caminhos dos arquivos
const paths = {
    scss: {
        src: ['./src/scss/*.scss', '!./src/scss/**/_*.scss'], // Somente arquivos principais
        watch: './src/scss/**/*.scss',                         // Observa todos, incluindo parciais
        dest: './dist/css'                                   // Pasta de saída
    }
};

// ✅ Compila SCSS -> CSS + minifica + sourcemaps
function compileSass() {
    return gulp.src(paths.scss.src)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(paths.scss.dest))           // Salva não-minificado
        .pipe(cleanCSS())                           // Minifica
        .pipe(rename({ suffix: '.min' }))           // Renomeia como .min.css
        .pipe(sourcemaps.write('.'))                // Gera sourcemap
        .pipe(gulp.dest(paths.scss.dest));          // Salva minificado
}

// 👀 Observa alterações nos SCSS e recompila
function watchFiles() {
    console.log('👀 Aguardando alterações nos SCSS...');
    gulp.watch(paths.scss.watch, compileSass);
}

// 🚀 Roda apenas o watch (sem compilar de início)
exports.default = watchFiles;

// 👇 Tarefas separadas, caso precise rodar manualmente
exports.compile = compileSass;
exports.watch = watchFiles;
