// placeholder-focus
$(document).ready(function() {
    $('input,textarea').focus(function() {
        $(this).data('placeholder', $(this).attr('placeholder'))
        $(this).attr('placeholder', '');
    });
    $('input,textarea').blur(function() {
        $(this).attr('placeholder', $(this).data('placeholder'));
    });
});


$('.sl3').on('click', function(e) {
    $('html,body').stop().animate({ scrollTop: $('#hvs3').offset().top }, 700);
    e.preventDefault();
});


// custom-forms 
(function($) {
    $(function() {
        $('.form-control, .form-controls, select, input[type="checkbox"]').styler({
            selectSearch: true
        });
    });
})(jQuery);


// mobile-viewport
if (screen.width <= 400) {
    $('head').append('<meta name="viewport" content="width=400, user-scalable=0"/>');
} else {
    $('head').append('<meta name="viewport" content="width=device-width">');
}
$(window).on("orientationchange", function() {
    if (window.orientation == 0) // Portrait 
    {
        $('head').append('<meta name="viewport" content="width=device-width">');
    } else // Landscape 
    {
        $('head').append('<meta name="viewport" content="width=640">');
    }
});



/**
 * Vertically center Bootstrap 3 modals so they aren't always stuck at the top
 */
$(function() {
    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');

        // Dividing by two centers the modal exactly, but dividing by three 
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }
    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);
    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
});



$(function() {
    var navMain = $(".navbar-collapse"); // avoid dependency on #id
    // "a:not([data-toggle])" - to avoid issues caused
    // when you have dropdown inside navbar
    navMain.on("click", "a:not([data-toggle])", null, function() {
        navMain.collapse('hide');
    });
});


$(document).ready(function() {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('.slice').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menu-center a').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-center ul li a').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
};




$('.bottom-txt-1 a').on('click', function(e) {
    $('html,body').stop().animate({ scrollTop: $('#hv2').offset().top }, 700);
    e.preventDefault();
});


$(document).ready(function() {
    $("em").fadeOut(5000);
});



$(document).ready(function() {
    $("i").fadeOut(5000);
});



function initialise() {
    var myLatlng = new google.maps.LatLng(36.376952, 127.392658); // Add the coordinates



    var mapOptions = {
        zoom: 16, // The initial zoom level when your map loads (0-20)
        minZoom: 6, // Minimum zoom level allowed (0-20)
        maxZoom: 17, // Maximum soom level allowed (0-20)
        zoomControl: true, // Set to true if using zoomControlOptions below, or false to remove all zoom controls.
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_TOP
        },
        center: myLatlng, // Centre the Map to our coordinates variable
        mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
        scrollwheel: false, // Disable Mouse Scroll zooming (Essential for responsive sites!)
        // All of the below are set to true by default, so simply remove if set to true:
        panControl: false, // Set to false to disable
        mapTypeControl: false, // Disable Map/Satellite switch
        scaleControl: false, // Set to false to hide scale
        streetViewControl: false, // Set to disable to hide street view
        overviewMapControl: false, // Set to false to remove overview control
        rotateControl: false, // Set to false to disable rotate control
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions); // Render our map within the empty div
    var image = new google.maps.MarkerImage("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACQCAYAAADqWJL/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NkMzRTAzNDYxREIwMTFFODlGNjM5MTI1OUY3MUMxMTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NkMzRTAzNDcxREIwMTFFODlGNjM5MTI1OUY3MUMxMTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QzNFMDM0NDFEQjAxMUU4OUY2MzkxMjU5RjcxQzExNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QzNFMDM0NTFEQjAxMUU4OUY2MzkxMjU5RjcxQzExNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlMQGE4AAC5PSURBVHja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", null, null, null, new google.maps.Size(100, 97)); // Create a variable for our marker image.
    var marker = new google.maps.Marker({ // Set the marker
        position: myLatlng, // Position marker to coordinates
        icon: image, //use our image as the marker
        map: map, // assign the market to our map variable
        title: 'Click here for more details' // Marker ALT Text
    });
    //  google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
    //    window.location='https://www.snowdonrailway.co.uk/shop_and_cafe.php'; // URL to Link Marker to (i.e Google Places Listing)
    //  });
    var infowindow = new google.maps.InfoWindow({ // Create a new InfoWindow
        content: "<b>ICC Hotel Daejeon</b><br><span>4-29 Doryong-dong, Yuseong-gu, Daejeon, Korea</span>" // HTML contents of the InfoWindow
    });
    google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
        infowindow.open(map, marker); // Open our InfoWindow
    });
    google.maps.event.addDomListener(window, 'resize', function() { map.setCenter(myLatlng); }); // Keeps the Pin Central when resizing the browser on responsive sites
}
google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded.




function showDiv(select) {
    if (select.value == 1) {
        document.getElementById('hidden_div').style.display = "block";
    } else {
        document.getElementById('hidden_div').style.display = "none";
    }
}


function showDiv2(select) {
    if (select.value == 2) {
        document.getElementById('hidden_div2').style.display = "block";
    } else {
        document.getElementById('hidden_div2').style.display = "none";
    }
}