import gulp from "gulp";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import gulpCleanCss from "gulp-clean-css";
import gulpSourcemaps from "gulp-sourcemaps";
// import gulpIf from "gulp-if";

const sass = gulpSass(dartSass);

export const styles = () => {
  return gulp
    .src("src/assets/sass/bundle.scss")
    .pipe(gulpSourcemaps.init())
    .pipe(sass().on("error", sass.logError)) //complie sass
    .pipe(gulpCleanCss({ compatibility: "ie8" })) // minify css
    .pipe(gulpSourcemaps.write())
    .pipe(gulp.dest("dist/assets/css"));
};

export const watch = (done) => {
  gulp.watch("src/assets/sass/**/*.scss", styles);
};
