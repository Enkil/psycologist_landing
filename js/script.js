window.onload = function(){

    // Set map
    function initMap(mapIDCurrent) {
        var myLatlng = new google.maps.LatLng(59.93491934, 30.33140123); // Marker coordinates
        var myOptions = { // Map settings
            zoom: 15,
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var image = 'img/map.png'; //  image

        var marker = new google.maps.Marker({ // Init marker
            position: myLatlng,
            map: map,
            title:"Networks in the Global World",
            icon: image
        });

        var map = new google.maps.Map(mapIDCurrent, myOptions); // Init map
        marker.setMap(map);
    }

    function findMapAndInit(mapID) {
        if (document.getElementById(mapID)) {
            var mapIDCurrent = document.getElementById(mapID);
            if (mapIDCurrent){
                initMap(mapIDCurrent);
            }
        }
    }


    // Google Map
    findMapAndInit('map');

    // Animations
    var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       300,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
            callback:     function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );

    new WOW().init();



};



var myString = "Психоаналитическая терапия это эффективная, " +
    " постоянно совершенствующаяся практика позволяющая познать " +
    "и изменить себя ";

var myArray = myString.split(""),
    loopTimer;


function frameLooper() {
    if (myArray.length > 0) {
        document.getElementById('myTypingText').innerHTML += myArray.shift();
    } else {
        clearTimeout(loopTimer);
    }
    loopTimer = setTimeout('frameLooper()', 70);
}

frameLooper();