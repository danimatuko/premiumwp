import gulp from "gulp";
// import yargs from "yargs";

export default function hello(cb) {
  // place code for your default task here
  process.env.NODE_ENV = "prod";
  console.log(process.env.NODE_ENV);
  cb();
}

gulp.task("hello", hello);
