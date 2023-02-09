

const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
// const browsersync = require('browser-sync').create();
const autoPrefixer = require('gulp-autoprefixer');


//Sass task
function scssTask(){
  return src('scss/**/*.scss', { sourcemaps: true})
  .pipe(sass())
  .pipe(autoPrefixer('last 8 versions'))
  .pipe(postcss([cssnano()]))
  .pipe(dest('assets/css', {sourcemaps: '.'}));
}


//Browsersync task
// function browsersyncServe(cb){
//   browsersync.init({
//     server: {
//       baseDir: '.'
//     }
//   });
//   cb();
// }

// function browsersyncReload(cb){
//   browsersync.reload();
//   cb();
// }

//Watch Task
function watchTask(){
  // watch('src/*.php', browsersyncReload);
  watch(['scss/**/*.scss', ], series(scssTask));
}

//Default gulp task
exports.default = series(
  scssTask,
  watchTask
);