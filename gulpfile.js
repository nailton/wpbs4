var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', gulp.series(function() {
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'layout/src/scss/*.scss'])
        .pipe(sass()) //Converter o Sass em CSS
        .pipe(gulp.dest('layout/src/css'));
}));
gulp.task('watch', gulp.series(function() {
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'layout/src/scss/*.scss'], gulp.parallel(['sass']));
}));
gulp.task('default', gulp.series(['sass', 'watch']));