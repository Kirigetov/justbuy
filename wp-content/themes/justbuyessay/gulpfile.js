var local_domain = 'http://justbuyessay.net.local/';
var path_to_theme = '/wp-content/themes/justbuyessay/'; //url with trailing slash

//NPM-MODULES
//--------------------------------------------------
var gulp    	 = require('gulp');
var plumber 	 = require('gulp-plumber');
var browserSync  = require('browser-sync');
var imagemin 	 = require('gulp-imagemin');
var less 		 = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS 	 = require('gulp-clean-css');
var sourcemaps 	 = require('gulp-sourcemaps');
var concat 		 = require('gulp-concat');
var uglify 		 = require('gulp-uglify');
var rename       = require("gulp-rename");
var critical     = require('critical');

var notify       = require('gulp-notify');
var spritesmith  = require('gulp.spritesmith');
var svgmin       = require('gulp-svgmin');
var svgSprite    = require('gulp-svg-sprite');
var util = require('gulp-util');

var is_prod = util.env.production;
reload = browserSync.reload;


//TASK: gulp
//--------------------------------------------------
gulp.task('default', ['less', 'js', 'svg:inline', 'svg:css'], function () {
    is_prod ? gulp.start('img') : gulp.start('browser-sync', 'watch');
});

//TASK: gulp watch
//--------------------------------------------------
gulp.task('watch', function() {
    gulp.watch('./less/**/*.less', ['less']);
    gulp.watch(['./js/**/*.js', '!./js/scripts.min.js'], ['js']);
    gulp.watch('./sprite-src/png-icons/*.png', ['sprite']);
    gulp.watch('./sprite-src/svg-icons-css/*.svg', ['svg:css']);
    gulp.watch('./sprite-src/svg-icons-inline/*.svg', ['svg:inline']);
});

//TASK: gulp img
//--------------------------------------------------
gulp.task('img', function() {
    gulp.src(['./{img,sprite-src,css}/**/*.{png,jpg,jpeg,gif}', './screenshot.png'])
        .pipe(plumber())
        .pipe(imagemin({progressive: true}))
        .pipe(gulp.dest("./"));
});

// TASK: gulp less
// --------------------------------------------------
gulp.task('less', function () {
    gulp.src(['./less/style.less'])
        .pipe(plumber())
        .pipe(!is_prod ? sourcemaps.init() : util.noop())
        .pipe(less())
        .pipe(is_prod ? (cleanCSS( {
            level: {
                1: { keepSpecialComments: 1  },
                2: { mergeMedia: true }
            }
        } )) : util.noop() )
        .pipe(rename({extname: ".min.css"}))
        .pipe(autoprefixer({browsers: ['last 50 versions']}))
        .pipe(!is_prod ? sourcemaps.write() : util.noop())
        .pipe(gulp.dest('./'))
});

//TASK: gulp js
//--------------------------------------------------
gulp.task('js', function() {
    gulp.src(['./js/libs/**/*.js', './js/components/**/*.js', './js/custom.js'])
        .pipe(plumber())
        .pipe(!is_prod ? sourcemaps.init() : util.noop())
        .pipe(concat('./scripts.min.js'))
        .pipe(uglify())
        .pipe(!is_prod ? sourcemaps.write() : util.noop())
        .pipe(gulp.dest("./js"));
});

//TASK: gulp svg-sprite
//create svg sprite (img with color and adding to css by background-image)
// --------------------------------------------------
gulp.task('svg:css', function() {
    return gulp.src('sprite-src/svg-icons-css/*.svg')
        .pipe(plumber())
        .pipe(svgmin({
            js2svg: {
                pretty: true
            },
            plugins: [{
                removeDesc: true
            }, {
                cleanupIDs: true
            }, {
                mergePaths: false
            }]
        }))
        .pipe(svgSprite({
            log: "info",
            mode: {
                css: {
                    sprite: "../img/sprite-svg-css.svg",
                    prefix: ".svg-",
                    bust: false,
                    render: {
                        less: {
                            template: "./helpers/sprite-templates/sprite-svg-css-tmpl.less",
                            dest: "../less/libs/sprite-svg-css.less"
                        }
                    }
                }
            },
            shape: {
                dimension: {			// Set maximum dimensions
                    maxWidth: 32,
                    maxHeight: 32,
                    precision: 0
                }
            },
            variables: {
                spritePath: "./img/sprite-svg-css.svg"
            },
            transform: []   // The SVGO options cancels for save the original image parameters

        })).on('error', function(error){ console.log(error); })
        .pipe(gulp.dest('./'))
});

//TASK: gulp svg-sprite
//create svg sprite (img without color and adding to page by inline tag <svg>..</svg>)
// --------------------------------------------------
gulp.task('svg:inline', function() {
    return gulp.src('sprite-src/svg-icons-inline/*.svg')
        .pipe(plumber())
        .pipe(svgmin({
            js2svg: {
                pretty: true
            },
            plugins: [{
                removeDesc: true
            }, {
                cleanupIDs: true
            }, {
                mergePaths: false
            }]
        }))
        .pipe(svgSprite({
            log: "info",
            mode: {
                symbol: {
                    inline: true,
                    sprite: "../img/sprite-svg-inline.svg",
                    render: {
                        less: {
                            template: "./helpers/sprite-templates/sprite-svg-inline-tmpl.less",
                            dest: "../less/libs/sprite-svg-inline.less"
                        }
                    }
                }
            },
            transform: []   // The SVGO options cancels for save the original image parameters

        })).on('error', function(error){ console.log(error); })
        .pipe(gulp.dest('./'))
});

//TASK: gulp svg-sprite
//create svg sprite (img without color and adding to page by inline tag <svg>..</svg>)
// --------------------------------------------------
gulp.task('svg:par', function() {
    return gulp.src('sprite-src/svg-parallax/*.svg')
        .pipe(plumber())
        .pipe(svgmin({
            js2svg: {
                pretty: true
            },
            plugins: [{
                removeDesc: true
            }, {
                cleanupIDs: true
            }, {
                mergePaths: false
            }]
        }))
        .pipe(svgSprite({
            log: "info",
            mode: {
                symbol: {
                    inline: true,
                    sprite: "../img/sprite-svg-parallax.svg",
                    render: {
                        less: {
                            template: "./helpers/sprite-templates/sprite-svg-par-tmpl.less",
                            dest: "../less/libs/sprite-svg-parallax.less"
                        }
                    }
                }
            },
            transform: []   // The SVGO options cancels for save the original image parameters

        })).on('error', function(error){ console.log(error); })
        .pipe(gulp.dest('./'))
});


// //TASK: gulp sprite
// //create png sprite
//--------------------------------------------------
gulp.task('sprite', function() {
    var spriteData = gulp.src('sprite-src/png-icons/*.png')
        .pipe(spritesmith({
            imgName: 'sprite-png.png',
            cssName: 'sprite-png.less',
            imgPath: path_to_theme + 'img/sprite-png.png',
            cssFormat: 'less',
            padding: 4,
            cssTemplate: './helpers/sprite-templates/sprite-png-tmpl.mustache'
        }));
    spriteData.img
        .pipe(gulp.dest('./img'));
    spriteData.css
        .pipe(gulp.dest('./less/libs/'))
        .pipe(notify("New png sprite created!"));
});

//TASK: gulp critical-css
//before run this task you need comment next code in functions.php:
//add_action( 'wp_enqueue_scripts', 'ox_adding_critical_css' );
//--------------------------------------------------
gulp.task('critical', function() {
    critical.generate({
        src: local_domain,
        dest: 'css/critical.css.php',
        minify: true,
        pathPrefix: path_to_theme
    });
});

//TASK: gulp browser-sync
//--------------------------------------------------
//http://www.browsersync.io/docs/options/

gulp.task('browser-sync', function() {
    //watch files
    var files = [
        './**/*.css',
        './js/**/*.js',
        './**/*.php',
        './{img,css,fonts}**/*.svg',
        './{img,css}/**/*.{png,jpg,jpeg,gif,ico}',
        './fonts/**/*.{eot,ttf,woff,woff2}',
    ];

    //initialize browsersync
    browserSync.init(files, {
        proxy: local_domain,
        port: util.env.port || 8081,
        logLevel: 'info', // 'debug', 'info', 'silent', 'warn'
        logConnections: false,
        logFileChanges: true,
        // open: Boolean(util.env.open),
        notify: false,
        ghostMode: false,
        online: Boolean(util.env.tunnel),
        tunnel: util.env.tunnel || null
    });
});
