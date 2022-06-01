jQuery(document).ready( function() {
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

    highlightDailyDeal();

    // move and re-style elements for home page visual consistency
    jQuery('#card-home h5').insertBefore('#card-home .card-img-top');
    jQuery('#card-home h5').removeClass('card-title highlight');
    jQuery('#card-home h5').addClass('rewards-title');
    jQuery('#card-home p').removeClass('highlight');
    jQuery('.rewards-signup p').removeClass('rewards-text');
});

// needs to outside of document.ready()

// add FA calendar icon to events list
jQuery('h4.tribe-event-title ').prepend('<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;');

if(jQuery('.tribe-list-widget').length === 0) {
    jQuery('#events-container').addClass('d-none');
}
    
