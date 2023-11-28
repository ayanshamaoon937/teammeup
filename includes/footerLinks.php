<!-- Scripts -->
<script src="scripts/jquery-3.4.1.min.js"></script>
<script src="scripts/chosen.min.js"></script>
<script src="scripts/slick.min.js"></script>
<script src="scripts/rangeslider.min.js"></script>
<script src="scripts/magnific-popup.min.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script src="scripts/mmenu.js"></script>
<script src="scripts/tooltips.min.js"></script>
<script src="scripts/color_switcher.js"></script>
<script src="scripts/jquery_custom.js"></script>
<script src="scripts/typed.js"></script>
<script src="scripts/perfect-scrollbar.min.js"></script>

<!-- Maps -->

<link href="css/datedropper.css" rel="stylesheet" type="text/css">
<script src="scripts/datedropper.js"></script>
<script src="scripts/quantityButtons.js"></script>
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>

<script>
    $(function() {
        $('#date-picker').daterangepicker({
            "opens": "left",
            // singleDatePicker: true,
            isInvalidDate: function(date) {
                var disabled_start = moment('09/02/2018', 'DD/MM/YYYY');
                var disabled_end = moment('09/06/2018', 'DD/MM/YYYY');
                return date.isAfter(disabled_start) && date.isBefore(disabled_end);
            }
        });
    });

    $('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
        $('.daterangepicker').addClass('calendar-animated');
    });
    $('#date-picker').on('show.daterangepicker', function(ev, picker) {
        $('.daterangepicker').addClass('calendar-visible');
        $('.daterangepicker').removeClass('calendar-hidden');
    });
    $('#date-picker').on('hide.daterangepicker', function(ev, picker) {
        $('.daterangepicker').removeClass('calendar-visible');
        $('.daterangepicker').addClass('calendar-hidden');
    });

    function close_panel_dropdown() {
        $('.panel-dropdown').removeClass("active");
        $('.fs-inner-container.content').removeClass("faded-out");
    }
    $('.panel-dropdown a').on('click', function(e) {
        if ($(this).parent().is(".active")) {
            close_panel_dropdown();
        } else {
            close_panel_dropdown();
            $(this).parent().addClass('active');
            $('.fs-inner-container.content').addClass("faded-out");
        }
        e.preventDefault();
    });
    $('.panel-buttons button').on('click', function(e) {
        $('.panel-dropdown').removeClass('active');
        $('.fs-inner-container.content').removeClass("faded-out");
    });
    var mouse_is_inside = false;
    $('.panel-dropdown').hover(function() {
        mouse_is_inside = true;
    }, function() {
        mouse_is_inside = false;
    });
    $("body").mouseup(function() {
        if (!mouse_is_inside) close_panel_dropdown();
    });

    var typed = new Typed('.typed-words', {
        strings: ["Players", " Stadiums", " Hotels"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>
<script>
    (function($) {
        try {
            var jscr1 = $('.js-scrollbar');
            if (jscr1[0]) {
                const ps1 = new PerfectScrollbar('.js-scrollbar');

            }
        } catch (error) {
            console.log(error);
        }
    })(jQuery);
</script>
<script>
    $(".utf_opening_day.utf_js_demo_hours .utf_chosen_select").each(function() {
        $(this).append(''+
            '<option></option>'+
            '<option>Closed</option>'+
            '<option>1 AM</option>'+
            '<option>2 AM</option>'+
            '<option>3 AM</option>'+
            '<option>4 AM</option>'+
            '<option>5 AM</option>'+
            '<option>6 AM</option>'+
            '<option>7 AM</option>'+
            '<option>8 AM</option>'+
            '<option>9 AM</option>'+
            '<option>10 AM</option>'+
            '<option>11 AM</option>'+
            '<option>12 AM</option>'+
            '<option>1 PM</option>'+
            '<option>2 PM</option>'+
            '<option>3 PM</option>'+
            '<option>4 PM</option>'+
            '<option>5 PM</option>'+
            '<option>6 PM</option>'+
            '<option>7 PM</option>'+
            '<option>8 PM</option>'+
            '<option>9 PM</option>'+
            '<option>10 PM</option>'+
            '<option>11 PM</option>'+
            '<option>12 PM</option>');
    });
</script>
<script>
    $(document).ready(function () {
        // Handle click event on list items
        $('#dashboardMenu li').click(function () {
            // Remove active class from all list items
            $('#dashboardMenu li').removeClass('active');

            // Add active class to the clicked list item
            $(this).addClass('active');
        });
    });
</script>
<!-- Scripts -->

<!-- Maps -->
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="scripts/infobox.min.js"></script>
<script src="scripts/markerclusterer.js"></script>
<script src="scripts/maps.js"></script>
</body>
</html>
</body>
</html>
