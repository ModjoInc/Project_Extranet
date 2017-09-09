const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps'); 

// compile sass/scss
gulp.task('sass', function() {
	return gulp.src('./assets/sass/style.scss')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest('./assets/css'));
});

// watch all sass files and run the sass task whenever a file is saved
gulp.task('sass:watch', function() {
	gulp.watch('./assets/sass/style.css', ['sass']);
});

gulp.task('default', ['sass']);