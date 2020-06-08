
// highlights the deal of the day on the deals/events page
// if your looking for the code that shows the deal of the day
// on the home page, it's  in the theme's functions.php file
function highlightDailyDeal() {
    var date =  new Date();
    var weekday = new Array(7);
        weekday[0] = "Sunday";;
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";
     var dayOfWeek = weekday[date.getDay()];
    // jQuery('#day-' + dayOfWeek + ' #' + dayOfWeek).addClass('highlight');
    jQuery('#' + dayOfWeek + ' .card-title' ).addClass('highlight');
    jQuery('#' + dayOfWeek + ' .card-text' ).addClass('highlight');
}

jQuery(document).ready(function(){
    highlightDailyDeal();
});

/*
FUGLY, I know...
 */

// hide warning and notices if you don't need them
// if((jQuery('.warning').length < 1)) {
//     jQuery('#warning').addClass('d-none');
// }
//
// if((jQuery('.notice').length < 1)) {
//     jQuery('#notice').addClass('d-none');
// }

// hide a coupon if you don't have content for it
// if((jQuery('#coupon-1 h3').length < 1)) {
//     jQuery('#coupon-1').addClass('d-none');
// }

// if((jQuery('#coupon-1 img.image').length < 1)) {
//     jQuery('#coupon-1').addClass('d-none');
// }
//
// if((jQuery('#coupon-2 h3').length < 1)) {
//     jQuery('#coupon-2').addClass('d-none');
// }
//
// if((jQuery('#coupon-3 h3').length < 1)) {
//     jQuery('#coupon-3').addClass('d-none');
// }
//
// if((jQuery('#coupon-4 h3').length < 1)) {
//     jQuery('#coupon-4').addClass('d-none');
// }

//
// if((jQuery('.coupon h3').length < 1)) {
//     jQuery('.coupon').addClass('d-none');
// }

// add FA calendar icon to events list
jQuery('h4.tribe-event-title ').prepend('<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;');

if(jQuery('.trible-list-widget').length < 1) {
    jQuery('.events').addClass('d-none');
}

// hide events section if there are none
jQuery('#warning .alert').on('closed.bs.alert', function () {
    console.log('warning closed');
    jQuery('#warning .alert').alert('dispose');
});
