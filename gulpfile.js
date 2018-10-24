const gulp = require('gulp');
const browserSync = require('browser-sync').create();

gulp.task('browser-sync',function(){
    browserSync.init({
        proxy: "localhost:8080",
        files: [
            "*.php",
            "inc/*.php",
            "assets/css/*.css",
            "assets/js/*.js"
        ]
    });
});
