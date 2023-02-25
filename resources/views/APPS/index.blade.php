@extends('APPS._layouts.index')
@section('content')
        <section class="section-header">
            <div class="section-header-image">
                <img src="{{ asset('theme/img/xx1.png') }}" alt="Header">
            </div>
            <div class="container">
                <div class="section-header-inner">
                    <div class="section-header-title">
                        <h3 class="title">GREAT <br> ART <br>OF <br>MAKASSAR</h3>
                        <p>Telusuri Keindahan Makassar Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                        {{-- <a href="" class="btn btn-round btn-orange">See Our Vacation</a> --}}
                    </div>
                    <div class="section-header-title-xs">
                        <h3 class="title">GREAT <br> ART <br>OF <br>MAKASSAR</h3>
                        <p>Telusuri Keindahan Makassar Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    </div>

                </div>
            </div>
        </section>

    <section class="section section-about">
        <div class="about-head slides">
            <h3>Pariwisata Makassar</h3>
            <h4><b> Website</b> ini akan memudahkan anda untuk menemukan lokasi wisata terdekat dari lokasi anda.
                <b>Spot Foto maupun Kuliner</b> dapat anda pertimbangkan unutk dikunjungi
            </h4>
        </div>
        <div class="about-body">
            <div class="justify-content-center align-items-center">
                <div class="row">
                    <h3><b>Catatan : Tentukan Lokasi anda terlebih dahulu dan klik lokasi yang anda ingin lihat
                            jaraknya</b></h3>
                </div>
            </div>
            <br>
            <div id="container">

                <div id="map"></div>

                <div id="sidebar">
                    <p>List Jarak Terdekat</p>
                    <div id="listLocation"></div>
                </div>
                <div id="sidebar">
                    <p>Total Distance: <span id="total"></span></p>
                    <div id="panel"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->

    <section class="section section-about">
        <div class="about-head slides">
            <h3>Spot Foto</h3>
        </div>
        <div class="about-body">
            <div class="section-discover-body slides">
                <div class="col">
                    <a href="destination.html">
                        <img src="{{ asset('theme/img/f-foto.jpeg') }}" alt="Destination">
                        <div class="caption">
                            <p>Masjid Terapung</p>
                            <div class="line"></div>

                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="culture.html">
                        <img src="{{ asset('theme/img/wis-2.jpg') }}">
                        <div class="caption" alt="Culture">
                            <p>Pantai Akkarena</p>
                            <div class="line"></div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-about">
        <div class="about-head slides">
            <h3>Kuliner</h3>
        </div>
        <div class="about-body">
            <div class="section-discover-body slides">
                <div class="col">
                    <a href="destination.html">
                        <img src="{{ asset('theme/img/mkn-2.jpg') }}" alt="Destination">
                        <div class="caption">
                            <p>Pallubasa</p>
                            <div class="line"></div>

                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="culture.html">
                        <img src="{{ asset('theme/img/f-kuliner.jpg') }}">
                        <div class="caption" alt="Culture">
                            <p>Coto Makassar</p>
                            <div class="line"></div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Explore -->

    <section class="section-explore">
        <div class="texture-handler-top"></div>
        <div class="overlay">
            <div class="caption">
                <h2>ENJOY BEUTY & friendliness OF</h2> <br>
                <img src="{{ asset('theme/img/mks.png') }}" alt="Bali Island">
            </div>
        </div>
        <div class="texture-handler-bottom"></div>
    </section>

    <!-- Section Discover -->

    <section class="section section-discover" id="discover">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">DISCOVERY MAKASSAR</h3>
            <p class="section-subtitle">Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Makassar
                yang
                dapat anda jelajahi</p>
        </div>
        <div class="section-discover-body slides">
            <div class="col">
                <a href="destination.html">
                    <img src="{{ asset('theme/img/f-foto.jpeg') }}" alt="Destination">
                    <div class="caption">
                        <p>WISATA SPOT FOTO</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Kunjungi destinasi wisata yang belum pernah anda temui sebelumnya</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="culture.html">
                    <img src="{{ asset('theme/img/f-kuliner.jpg') }}">
                    <div class="caption" alt="Culture">
                        <p>WISATA KULINER</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Selain pemandangan yang indah, juga memiliki Makanan yang tidak kalah dengan makanan
                                daerah lain</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    @include('APPS._layouts.footer')

    @include('APPS._layouts.js')


    <script>
        var markers = [];
        var contents = [];
        var infowindows = [];
        var dataToMake = {!! json_encode($initialMarkers) !!};


        function initMap() {

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({
                draggable: true,
                panel: document.getElementById("panel"),
            });


            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -5.135399,
                    lng: 119.423790
                },
                zoom: 12,
                // disableDefaultUI: true,
            });



            for (var i = 0; i < dataToMake.length; i++) {
                var lat = parseFloat(dataToMake[i].lat);
                var long = parseFloat(dataToMake[i].lng);
                var icon = dataToMake[i].icon;
                var title = dataToMake[i].title;

                var marker = new google.maps.Marker({
                    position: {
                        lat: lat,
                        lng: long,
                    },
                    map: map,
                    icon: icon,
                    title: title,

                });

                markers.push(marker);

            }

            infoWindow = new google.maps.InfoWindow();


            const locationButton = document.createElement("button");

            locationButton.textContent = "Klik Untuk Mendapatkan Lokasi Anda";
            locationButton.classList.add("custom-map-control-button");
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
            locationButton.addEventListener("click", () => {
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            console.log(position);
                            const pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                                zoom: 13,
                            };

                            infoWindow.setPosition(pos);
                            infoWindow.setContent(
                                " <img src='https://maps.google.com/mapfiles/ms/icons/blue-dot.png' width='20px' height='20px'> Lokasi Anda"
                            );
                            infoWindow.open(map);
                            map.setCenter(pos);
                            directionsRenderer.setMap(map);

                            //tampilkan list jarak dari yang terdekat ke jauh di tag list 


                            markers.forEach((marker) => {
                                var distance = google.maps.geometry.spherical.computeDistanceBetween(
                                    new google.maps.LatLng(pos.lat, pos.lng),
                                    new google.maps.LatLng(marker.position.lat(), marker
                                        .position.lng())
                                );

                                var distance = distance / 1000;
                                var distance = distance.toFixed(2);



                                document.getElementById("listLocation").innerHTML +=
                                    "<li>" + marker.title + " " + " </li>";

                                marker.addListener("click", () => {
                                    directionsService.route({
                                            origin: {
                                                query: pos.lat + "," + pos.lng,
                                            },
                                            destination: {
                                                query: marker.position.lat() + "," + marker
                                                    .position.lng(),
                                            },
                                            travelMode: google.maps.TravelMode.DRIVING,
                                        },
                                        (result, status) => {
                                            console.log(result);
                                            if (status === "OK") {
                                                var totals = 0;
                                                var myroute = result.routes[0];
                                                for (var i = 0; i < myroute.legs
                                                    .length; i++) {
                                                    totals += myroute.legs[i].distance
                                                        .value;
                                                }
                                                totals = totals / 1000;
                                                document.getElementById("total").innerHTML =
                                                    totals + " km";


                                                directionsRenderer.setDirections(result);
                                            } else {
                                                window.alert(
                                                    "Directions request failed due to " +
                                                    status);
                                            }
                                        }
                                    );
                                });
                            });



                        },
                        () => {
                            handleLocationError(true, infoWindow, map.getCenter());
                        }
                    );
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }



            });


        }



        function displayRoute(origin, destination, service, display) {
            service.route({
                origin: origin,
                destination: destination,
                waypoints: [],
                travelMode: 'DRIVING',
                avoidTolls: true
            }, function(response, status) {
                if (status === 'OK') {
                    display.setDirections(response);
                } else {
                    alert('Could not display directions due to: ' + status);
                }
            });
        }

        function computeTotalDistance(result) {
            console.log('result', result);
            var total = 0;
            var myroute = result.routes[0];
            for (var i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
            }
            total = total / 1000;
            document.getElementById('total').innerHTML = total + ' km';
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation ?
                "Error: The Geolocation service failed." :
                "Error: Your browser doesn't support geolocation."
            );
            infoWindow.open(map);
        }

        window.initMap = initMap;
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFrud5owVOMpl-hhn5YyxBnezISO8Bz2Q&callback=initMap"
        async></script>
@endsection
