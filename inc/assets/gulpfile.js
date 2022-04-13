const {src, dest, watch} = require('gulp');

const concat = require('gulp-concat');

const rename = require('gulp-rename');

const gulpcleancss = require('gulp-clean-css');

const concatCSS = ()  =>
  src([
  'css/wp_bootstrap.css',
  'css/variables.css',
  'css/age-gate.css',
  'css/typography.css',
  'css/utils-buttons.css',
  'css/alerts-notices.css',
  'css/header-footer.css',
  'css/main-nav.css',
  'css/home-carousel-banner.css',
  'css/home.css',
  'css/not-home-banners-headers.css',
  'css/rec-med-pages.css',
  'css/deals-page.css',
  'css/contactus-forms.css',
  'css/blog.css',
  'css/specials.css',
  'css/promos/420-carousel-banner.css',
  'css/promos/420.css'
  ])
    .pipe(concat('allstyles.css'))
    .pipe(dest('dist/css'));

exports.concatCSS = concatCSS;

const minCSS = ()  =>
  src('dist/css/allstyles.css')
    .pipe(gulpcleancss())
    .pipe(rename('allstyles.min.css'))
    .pipe(dest('dist/css/'));

exports.minCSS = minCSS;
            
function watchFiles() {
  watch(
    [
      'css/wp_bootstrap.css',
      'css/variables.css',
      'css/age-gate.css',
      'css/typography.css',
      'css/utils-buttons.css',
      'css/alerts-notices.css',
      'css/header-footer.css',
      'css/main-nav.css',
      'css/home-carousel-banner.css',
      'css/home.css',
      'css/not-home-banners-headers.css',
      'css/rec-med-pages.css',
      'css/deals-page.css',
      'css/contactus-forms.css',
      'css/blog.css',
      'css/specials.css',
      'css/promos/420-carousel-banner.css',
      'css/promos/420.css'
    ], concatCSS);
    
  watch('dist/css/allstyles.css', minCSS);
}
    
exports.watchFiles = watchFiles;
