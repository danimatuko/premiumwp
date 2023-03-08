import gulp from "gulp";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import gulpCleanCss from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";
import imagemin from "gulp-imagemin";
import { deleteAsync } from "del";
import webpack from "webpack-stream";

const sass = gulpSass(dartSass);

const paths = {
  styles: {
    src: "src/assets/sass/bundle.scss",
    dest: "dist/assets/css",
  },
  images: {
    src: "src/assets/images/**/*.{jpg,jpeg,png,svg,gif}",
    dest: "dist/assets/images",
  },
  scripts: {
    src: "src/assets/js/bundle.js",
    dest: "dist/assets/js",
  },
  other: {
    src: [
      "src/assets/**/*", // all files inside assets
      "!src/assets/{images,js,sass}", // exclude these folders {images,js,sass}
      "!src/assets/{images,js,sass}/**/*", // exclude files inside {images,js,sass}
    ],
    dest: "dist/assets",
  },
};

export const stylesConfig = () => {
  return gulp
    .src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError)) //complie sass
    .pipe(gulpCleanCss({ compatibility: "ie8" })) // minify css
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.styles.dest));
};

export const watchSass = () => {
  gulp.watch("src/assets/sass/**/*.scss", stylesConfig);
};

export const minifyImages = () => {
  return gulp
    .src(paths.images.src)
    .pipe(imagemin())
    .pipe(gulp.dest(paths.images.dest));
};

/*
 *** copy files from src/assets to dist/assets
 */
export const copy = () => {
  return gulp.src(paths.other.src).pipe(gulp.dest(paths.other.dest));
};

/*
 *** delete files from dist which do not exist on src
 */
export const clean = () => deleteAsync(["dist"]);

export const scripts = () => {
  return gulp
    .src(paths.scripts.src)
    .pipe(webpack())
    .pipe(gulp.dest(paths.scripts.dest));
};

const build = gulp.series(
  clean,
  gulp.parallel(stylesConfig, minifyImages, copy, watchSass)
);

export default build;
