$(document).ready(function(){

    /* smooth scrolling when link is clicked */
    $(document).ready(function() {
       $('a[href*=#]').bind('click', function(e) {
        e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump
           
        var target = $(this).attr("href"); //Get the target
                
        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 1500, function() { //adjust - 48 if the header height changes
             location.hash = target;  //attach the hash (#jumptarget) to the pageurl
        });
                
        return false;
       });
    });

});


 // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                // For more options see: https://developers.google.com/maps/documentation/javascript/markers
                var mapOptions = {
                    // Zoom level: the higher the #, the more zoomed in
                    zoom: 10,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(33.466283, -111.995231), // Make this same as main location so it shows on mobile

                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","stylers":[{"hue":"#ffe500"},{"saturation":-20},{"lightness":20}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#ffe500"},{"lightness":-15},{"saturation":50}]},{"featureType":"landscape","stylers":[{"weight":0.1},{"hue":"#ffe500"},{"saturation":50},{"lightness":10},{"visibility":"on"}]},{"elementType":"labels","stylers":[{"hue":"#ffe500"},{"saturation":50},{"lightness":-10},{"weight":2}]},{"featureType":"poi","stylers":[{"hue":"#ffe500"},{"saturation":75},{"lightness":-10}]},{"featureType":"transit.station.airport","stylers":[{"hue":"#ffe500"},{"saturation":50},{"lightness":-10}]},{}]
                };

                // Get the HTML DOM element that will contain your map
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Marker icon
                var image = 'assets/mapicon.png';

                    // Location list
                    var markers = [
                    {
                        'locationNo': '0a',
                        'infoName': 'Bloom Phoenix',
                        'address1': '14 S 41st Pl.',
                        'address2': 'Phoenix, AZ 85034',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/14+S+41st+Pl.,+Phoenix,+AZ+85034',
                        'latitude': '33.447507',
                        'longitude': '-111.991918'
                    },
                    {
                        'locationNo': '0b',
                        'infoName': 'Bloom Tucson',
                        'address1': '4695 N Oracle Rd.',
                        'address2': 'Tucson, AZ 85705',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/4695+N+Oracle+Rd.,+Tucson,+AZ+85705',
                        'latitude': '32.291728',
                        'longitude': '-110.979214'
                    },
                    {
                        'locationNo': '0c',
                        'infoName': 'Bloom Copper Country',
                        'address1': '1880 W American Ave.',
                        'address2': 'Oracle, AZ 85623',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/81880+W+American+Ave,+Oracle,+AZ+85623',
                        'latitude': '32.618359',
                        'longitude': '-110.790455'
                    },
                    {
                        'locationNo': '0d',
                        'infoName': 'Bloom Sedona',
                        'address1': '465 Jordan Rd.',
                        'address2': 'Sedona, AZ 86336',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/465+Jordan+Rd,+Sedona,+AZ+86336',
                        'latitude': '34.873592',
                        'longitude': '-111.761422'
                    },
                    {
                        'locationNo': '1',
                        'infoName': 'The Green House Dispensary',
                        'address1': '8160 W Union Hills Dr.',
                        'address2': 'Glendale, AZ 85308',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/8160+W+Union+Hills+Dr,+Glendale,+AZ+85308',
                        'latitude': '33.653635',
                        'longitude': '-112.234997'
                    },
                    {
                        'locationNo': '2',
                        'infoName': 'Harvest of Tempe',
                        'address1': '710 W Elliot Road #102',
                        'address2': 'Tempe, AZ 85284',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/710+W+Elliot+Rd+%23102,+Tempe,+AZ+85284',
                        'latitude': '33.349665',
                        'longitude': '-111.947519'
                    },
                    {
                        'locationNo': '3',
                        'infoName': 'Phoenix Relief Center',
                        'address1': '6330 S 35th Avenue #104',
                        'address2': 'Phoenix, AZ 85041',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/6330+S+35th+Ave+%23104,+Phoenix,+AZ+85041',
                        'latitude': '33.388368',
                        'longitude': '-112.133639'
                    },
                    {
                        'locationNo': '4',
                        'infoName': 'Health for Life, Inc. - East Mesa',
                        'address1': '7343 S 89th Place',
                        'address2': 'Mesa, AZ 85212',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/7343+S+89th+Pl,+Mesa,+AZ+85212',
                        'latitude': '33.281430',
                        'longitude': '-111.639535'
                       
                    },
                    {
                        'locationNo': '5',
                        'infoName': 'The Holistic Center',
                        'address1': '21035 N Cave Creek Rd',
                        'address2': 'Phoenix, AZ 85024',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/21035+N+Cave+Creek+Rd,+Phoenix,+AZ+85024',
                        'latitude': '33.677664',
                        'longitude': '-112.029195'
                       
                    },
                    {
                        'locationNo': '6',
                        'infoName': 'Urban Greenhouse',
                        'address1': '2630 W Indian School Rd',
                        'address2': 'Phoenix, AZ 85017',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/2630+W+Indian+School+Rd,+Phoenix,+AZ+85017',
                        'latitude': '33.495413',
                        'longitude': '-112.115573'
                       
                    },
                    {
                        'locationNo': '7',
                        'infoName': 'Valley of the Sun Medical Dispensary',
                        'address1': '16200 W Eddie Albert Way',
                        'address2': 'Goodyear, AZ 85338',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/16200+W+Eddie+Albert+Way,+Goodyear,+AZ+85338',
                        'latitude': '33.409466',
                        'longitude': '-112.406975'
                       
                    },
                    {
                        'locationNo': '8',
                        'infoName': 'Herbal Wellness Center (Chandler)',
                        'address1': '26427 S Arizona Ave',
                        'address2': 'Chandler, AZ 85248',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/26427+S+Arizona+Ave,+Chandler,+AZ+85248',
                        'latitude': '33.205719',
                        'longitude': '-111.840697'
                       
                    },
                    {
                        'locationNo': '9',
                        'infoName': 'Herbal Wellness Center (Phoenix)',
                        'address1': '4126 W Indian School Rd',
                        'address2': 'Phoenix, AZ 85019',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/4126+W+Indian+School+Rd,+Phoenix,+AZ+85019',
                        'latitude': '33.495222',
                        'longitude': '-112.147254'
                       
                    },
                    {
                        'locationNo': '10',
                        'infoName': 'Nature\'s Wonder (Apache Junction)',
                        'address1': '260 Apache Trail',
                        'address2': 'Apache Junction, AZ 85120',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/260+Apache+Trail,+Apache+Junction,+AZ+85120',
                        'latitude': '33.415229',
                        'longitude': '-111.552671'
                       
                    },
                    {
                        'locationNo': '11',
                        'infoName': 'Nature\'s AZ Medicine - McDowell',
                        'address1': '2439 W McDowell Rd',
                        'address2': 'Phoenix, AZ 85009',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/2439+W+McDowell+Rd,+Phoenix,+AZ+85009',
                        'latitude': '33.465321',
                        'longitude': '-112.112590'
                       
                    },
                    {
                        'locationNo': '12',
                        'infoName': 'Arizona Organix, Glendale',
                        'address1': '5301 W Glendale Ave',
                        'address2': 'Glendale, AZ 85301',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/5301+W+Glendale+Ave,+Glendale,+AZ+85301',
                        'latitude': '33.538326',
                        'longitude': '-112.172732'
                       
                    },
                    {
                        'locationNo': '13',
                        'infoName': 'Reef Dispensary',
                        'address1': '18423 E San Tan Blvd #1',
                        'address2': 'Queen Creek, AZ 85142',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/18423+E+San+Tan+Blvd+#1,+Queen+Creek,+AZ+85142',
                        'latitude': '33.211763',
                        'longitude': '-111.684671'
                       
                    },
                    {
                        'locationNo': '14',
                        'infoName': 'Nature\'s AZ Medicine - Fountain Hills',
                        'address1': '16913 E Enterprise Dr',
                        'address2': 'Fountain Hills, AZ 85268',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/16913+E+Enterprise+Dr,+Fountain+Hills,+AZ+85268/',
                        'latitude': '33.596217',
                        'longitude': '-111.715133'
                       
                    },
                    {
                        'locationNo': '15',
                        'infoName': 'Salubrious Wellness Center, Tempe',
                        'address1': '2009 E 5th Street #11',
                        'address2': 'Tempe, AZ 85281',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/2009+E+5th+Street+#11,+Tempe,+AZ+85281/',
                        'latitude': '33.424802',
                        'longitude': '-111.899789'
                       
                    },
                    {
                        'locationNo': '16',
                        'infoName': 'Sunflower Meds - Phoenix',
                        'address1': '10827 S 51st Street #104',
                        'address2': 'Phoenix, AZ 85044',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/10827+S+51st+Street+#104,+Phoenix,+AZ+85044/',
                        'latitude': '33.348487',
                        'longitude': '-111.974422'
                       
                    },
                    {
                        'locationNo': '17',
                        'infoName': 'Arizona Cannabis Society',
                        'address1': '8376 El Mirage Rd #2',
                        'address2': 'El Mirage, AZ 85335',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/8376+N+El+Mirage+Rd+%232,+El+Mirage,+AZ+85335',
                        'latitude': '33.555053',
                        'longitude': '-112.324760'
                       
                    },
                    {
                        'locationNo': '18',
                        'infoName': 'Ponderosa Releaf',
                        'address1': '49237 W Papago Rd #3',
                        'address2': 'Maricopa, AZ 85139',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/49237+W+Papago+Rd+%233,+Maricopa,+AZ+85139',
                        'latitude': '32.984038',
                        'longitude': '-112.096961'
                       
                    },
                    {
                        'locationNo': '19',
                        'infoName': 'PARC Dispensary',
                        'address1': '4201 E University Dr',
                        'address2': 'Phoenix, AZ 85034',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/4201+E+University+Dr,+Phoenix,+AZ+85034',
                        'latitude': '33.421616',
                        'longitude': '-111.991009'
                       
                    },
                    {
                        'locationNo': '20',
                        'infoName': 'Tru Med Dispensary',
                        'address1': '1613 N 40th Street',
                        'address2': 'Phoenix, AZ 85008',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/1613+N+40th+St,+Phoenix,+AZ+85008',
                        'latitude': '33.466283',
                        'longitude': '-111.995231'
                       
                    },
                    {
                        'locationNo': '21',
                        'infoName': 'Leaf Life Live Life, Casa Grande',
                        'address1': '1860 N Salk Dr. #B1',
                        'address2': 'Casa Grande, AZ 85122',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/1860+N+Salk+Dr,+Casa+Grande,+AZ+85122',
                        'latitude': '32.881056',
                        'longitude': '-111.707160'
                       
                    },
                    {
                        'locationNo': '22',
                        'infoName': 'Horizon THC Dispensary',
                        'address1': '10040 N Metro Pkwy West',
                        'address2': 'Phoenix, AZ 85051',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/10040+North+Metro+Pkwy+W,+Phoenix,+AZ+85051',
                        'latitude': '33.578070',
                        'longitude': '-112.124977'
                       
                    },
                    {
                        'locationNo': '23',
                        'infoName': 'All Greens Surprise',
                        'address1': '13431 W Westgate Dr #103',
                        'address2': 'Surprise, AZ 85378',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/13431+W+Westgate+Dr+%23103,+Surprise,+AZ+85378',
                        'latitude': '33.640341',
                        'longitude': '-112.349728'
                       
                    },
                    {
                        'locationNo': '24',
                        'infoName': 'Encanto Green Cross',
                        'address1': '2620 W Encanto Blvd',
                        'address2': 'Phoenix, AZ 85009',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/2620+W+Encanto+Blvd,+Phoenix,+AZ+85009',
                        'latitude': '33.473752',
                        'longitude': '-112.116060'
                       
                    },
                    {
                        'locationNo': '25',
                        'infoName': 'Monarch Wellness Center',
                        'address1': '8729 E Manzanita Dr',
                        'address2': 'Scottsdale, AZ 85258',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/8729+E+Manzanita+Dr,+Scottsdale,+AZ+85258',
                        'latitude': '33.553979',
                        'longitude': '-111.892734'
                       
                    },
                    {
                        'locationNo': '26',
                        'infoName': 'Arizona Natural Selections',
                        'address1': '9275 W Peoria Ave #3',
                        'address2': 'Peoria, AZ 85345',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/9275+W+Peoria+Ave+%233,+Peoria,+AZ+85345',
                        'latitude': '33.580371',
                        'longitude': '-112.257674'
                       
                    },
                    {
                        'locationNo': '27',
                        'infoName': 'Arizona Natural Selections',
                        'address1': '7320 E Butherus Dr #100',
                        'address2': 'Scottsdale, AZ 85260',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/7320+E+Butherus+Dr+%23100,+Scottsdale,+AZ+85260',
                        'latitude': '33.623300',
                        'longitude': '-111.921739'
 
                    },
                    {
                        'locationNo': '28',
                        'infoName': 'The Giving Tree',
                        'address1': '938 E Juanita Ave',
                        'address2': 'Gilbert, AZ 85204',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/938+E+Juanita+Ave,+Mesa,+AZ+85204',
                        'latitude': '33.382521',
                        'longitude': '-111.810885'
                    },
                    {
                        'locationNo': '29',
                        'infoName': 'Emerald Palace',
                        'address1': '175 S Hamilton Pl',
                        'address2': 'Gilbert, AZ 85233',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/175+S+Hamilton+Pl,+Gilbert,+AZ+85233',
                        'latitude': '33.346374',
                        'longitude': '-111.831740'
                    },
                    {
                        'locationNo': '30',
                        'infoName': 'Swell Farmacy',
                        'address1': '11200 W Michigan Ave #5',
                        'address2': 'Youngtown, AZ 85363',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/11200+W+Michigan+Ave+%235,+Youngtown,+AZ+85363',
                        'latitude': '33.604602',
                        'longitude': '-112.300621' 
                    },
                    {
                        'locationNo': '31',
                        'infoName': 'Sunflower Meds - Mesa',
                        'address1': '5205 E University Dr',
                        'address2': 'Mesa, AZ 85205',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/5205+E+University+Dr,+Mesa,+AZ+85205',
                        'latitude': '33.422410',
                        'longitude': '-111.718782'           
                    },
                    {
                        'locationNo': '32',
                        'infoName': 'Arizona Grass Roots',
                        'address1': '14980 N 78th Way #204',
                        'address2': 'Scottsdale, AZ 85260',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/14980+N+78th+Way+%23204,+Scottsdale,+AZ+85260',
                        'latitude': '33.621131',
                        'longitude': '-111.909163'
                    },
                    {
                        'locationNo': '33',
                        'infoName': 'White Mountain Health Center',
                        'address1': '9420 W Bell Rd',
                        'address2': 'Sun City, AZ 85351',
                        'directionsLink': 'https://www.google.com/maps/dir/Current+Location/9420+W+Bell+Rd,+Sun+City,+AZ+85351',
                        'latitude': '33.638595',
                        'longitude': '-112.262757'
                       
                    }


                    ];

                    //Create and open InfoWindow.
                    var infoWindow = new google.maps.InfoWindow();
             
                    for (var i = 0; i < markers.length; i++) {
                        var data = markers[i];
                        var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            icon: image,
                            title: data.infoName
                        });

                        var info = '<div class="location"><strong>' + data.infoName + '</strong><p>' + data.address1 + '<br/>' + data.address2 + '</p><a href="' + data.directionsLink + '" target="_blank">Get directions</a></div>';
                        $('.flexlocations').append(info);

                        //Attach click event to the marker.
                        (function (marker, data) {
                            google.maps.event.addListener(marker, "click", function (e) {
                                //Populate InfoWindow
                                infoWindow.setContent('<strong>' + data.infoName + '</strong><p>' + data.address1 + '<br/>' + data.address2 + '</p><a href="' + data.directionsLink + '" target="_blank">Get directions</a>');
                                infoWindow.open(map, marker);
                            });
                        })(marker, data);
                    }
                    


                























            }


