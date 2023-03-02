import gulp from "gulp";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import gulpCleanCss from "gulp-clean-css";
import gulpSourcemaps from "gulp-sourcemaps";
import gulpImagemin from "gulp-imagemin";

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
    .pipe(gulpSourcemaps.init())
    .pipe(sass().on("error", sass.logError)) //complie sass
    .pipe(gulpCleanCss({ compatibility: "ie8" })) // minify css
    .pipe(gulpSourcemaps.write())
    .pipe(gulp.dest(paths.styles.dest));
};

export const watchSass = () => {
  gulp.watch("src/assets/sass/**/*.scss", stylesConfig);
};

export const minifyImages = () => {
  return gulp
    .src(paths.images.src)
    .pipe(gulpImagemin())
    .pipe(gulp.dest(paths.images.dest));
};

export const copy = () => {
  return gulp.src(paths.other.src).pipe(gulp.dest(paths.other.dest));
};
