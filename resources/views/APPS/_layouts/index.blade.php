@include('APPS._layouts.header')

<body>
    <!-- Navbar -->
    @include('APPS._layouts.navbar')

    <!-- Sidebar -->
    @include('APPS._layouts.sidebar')

    <!-- Section Header -->

    <section class="section-header">
        <div class="section-header-image">
            <img src="{{ asset('theme/img/header.jpg') }}" alt="Header">
        </div>
        <div class="container">
            <div class="section-header-inner">
                <div class="section-header-title">
                    <h3 class="title">GREAT <br> ART <br>OF <br>BALI</h3>
                    <p>Telusuri Keindahan Bali Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="" class="btn btn-round btn-orange">See Our Vacation</a>
                </div>
                <div class="section-header-title-xs">
                    <h3 class="title">GREAT ART OF BALI</h3>
                    <p>Telusuri Keindahan Bali Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="" class="btn btn-round btn-orange">See Our Vacation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-about">
        {{-- <div class="about-head slides">
            <h3>Bali Travel Time</h3>
            <p><b>Bavel</b> merupakan singkatan dari <b>Bali Travel Time</b> merupakan website yang bertujuan
                mengenalkan pesona keindahan Bali mulai dari Wisata dan Budaya .
                Tidak hanya sarana untuk memperkanalkan, <b>Bavel</b> juga menyediakan berbagai layanan pemesanan tiket
                mulai tiket Tour dan tempat penginapan di sekitar Bali </p>
        </div> --}}
        <div class="about-body">
            <div class="row slides">

                {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1875.383062934892!2d119.47859237263908!3d-5.13619122650249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1677099749593!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                <div id="map" style="height: 500px; width: 100%;"></div>
                {{-- maps --}}

                {{-- <div class="col">
                    <img src="img/About/035-trekking.png">
                    <h2>ADVENTURE</h2>
                    <p>Dapatkan pengalaman berpetualang yang belum pernah anda rasakan sebelumnya hanya di Bali</p>
                </div>
                <div class="col">
                    <img src="img/About/028-book.png">
                    <h2>GUIDE</h2>
                    <p>Kami memberikan info - info seputar Bali mulai dari event dan destinasi terbaik</p>
                </div>
                <div class="col">
                    <img src="img/About/024-tent.png">
                    <h2>STAY</h2>
                    <p>Anda tidak perlu kawatir akan menetap dimana karna kami menyediakan tiket Hotel terbaik</p>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Section About -->

    {{-- <section class="section section-about">
        <div class="about-head slides">
            <h3>Bali Travel Time</h3>
            <p><b>Bavel</b> merupakan singkatan dari <b>Bali Travel Time</b> merupakan website yang bertujuan
                mengenalkan pesona keindahan Bali mulai dari Wisata dan Budaya .
                Tidak hanya sarana untuk memperkanalkan, <b>Bavel</b> juga menyediakan berbagai layanan pemesanan tiket
                mulai tiket Tour dan tempat penginapan di sekitar Bali </p>
        </div>
        <div class="about-body">
            <div class="row slides">
                <div class="col">
                    <img src="img/About/035-trekking.png">
                    <h2>ADVENTURE</h2>
                    <p>Dapatkan pengalaman berpetualang yang belum pernah anda rasakan sebelumnya hanya di Bali</p>
                </div>
                <div class="col">
                    <img src="img/About/028-book.png">
                    <h2>GUIDE</h2>
                    <p>Kami memberikan info - info seputar Bali mulai dari event dan destinasi terbaik</p>
                </div>
                <div class="col">
                    <img src="img/About/024-tent.png">
                    <h2>STAY</h2>
                    <p>Anda tidak perlu kawatir akan menetap dimana karna kami menyediakan tiket Hotel terbaik</p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Section Explore -->

    {{-- <section class="section-explore">
        <div class="texture-handler-top"></div>
        <div class="overlay">
            <div class="caption">
                <h2>ENJOY BEUTY & friendliness OF</h2> <br>
                <img src="img/bali-island.png" alt="Bali Island">
            </div>
        </div>
        <div class="texture-handler-bottom"></div>
    </section> --}}

    <!-- Section Discover -->

    {{-- <section class="section section-discover" id="discover">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">DISCOVERY BALI</h3>
            <p class="section-subtitle">Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Bali yang
                dapat anda jelajahi</p>
        </div>
        <div class="section-discover-body slides">
            <div class="col">
                <a href="destination.html">
                    <img src="img/selfie.jpg" alt="Destination">
                    <div class="caption">
                        <p>DESTINATION</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Kunjungi destinasi wisata yang belum pernah anda temui sebelumnya</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="culture.html">
                    <img src="img/culture.jpg">
                    <div class="caption" alt="Culture">
                        <p>CULTURE</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Selain pemandangan yang indah bali juga memiliki budaya yang mengesankan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="event.html">
                    <img src="img/event.jpg">
                    <div class="caption" alt="Event">
                        <p>EVENT</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Ikuti dan ketahui event - event menarik yang berlangsung di Bali</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="stay.html">
                    <img src="img/stay.jpg">
                    <div class="caption" alt="Stay">
                        <p>WHERE TO STAY</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Temukan tempat penginapan terbaik dengan harga yang relatif murah</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section> --}}

    <!-- Gallery Bali -->

    {{-- <section class="section section-gallery">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">OUR GALLERY</h3>
            <p class="section-subtitle">Potret indahnya kenampakan Bali yang tidak boleh anda lewatkan</p>
        </div>
        <div class="section-gallery-body">
            <div class="row">
                <div class="col-video">
                    <video controls>
                        <source src="img/explore.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="col-image">
                    <div class="row">
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="img/Gallery/26870845_1740142096076715_486825953067008000_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Section Tours -->

    {{-- <section class="section section-tour">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">5 RECOMENDED TOURS</h3>
            <p class="section-subtitle">Wisata terbaik berdasarkan tingkat ketertarikan wisatawan Bali dan kepopuleran
                wisata tersebut</p>
        </div>
        <div class="section-tour-body">
            <div class="row">
                <div class="col-1 slides">
                    <img src="img/pantai-kuta.jpg">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Kuta Beach</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000</b>
                                <a href="single-destination.html" class="btn btn-orange btn-round right">See
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 slides">
                    <img src="img/temple.jpg">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Pure Ulun Danu Bratan</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000</b>
                                <a href="single-destination.html" class="btn btn-orange btn-round right">See
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2 slides">
                    <img src="img/tanah-lot.jpeg">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Tanah Lot</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000 - Rp. 60.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 slides">
                    <img src="img/bali-bird-park.jpg">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Bali Bird Park</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 75.000 - Rp. 150.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 slides">
                    <img src="img/gunung.jpg">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Mount Batur</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 10.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Section Newsletter -->

    {{-- <section class="section-testi">
        <div class="overlay">
            <div class="head">
                <h3>Tourist Says</h3>
            </div>
            <div id='mySwipe' class='swipe'>
                <div class="swipe-wrap">
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="img/faces/clem-onojeghuo-2.jpg" alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">John Doe</div>
                        </div>
                    </div>
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="img/faces/joe-gardner-2.jpg" alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">Jane Doe</div>
                        </div>
                    </div>
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="img/faces/clem-onojeghuo-3.jpg" alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">John Roe</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-btn">
                <button class="btn-orange btn-bullet" onclick='mySwipe.prev()'><span
                        class="ion-arrow-left-c"></span></button> &nbsp;
                <button class="btn-orange btn-bullet" onclick='mySwipe.next()'><span
                        class="ion-arrow-right-c"></span></button>
            </div>
        </div>
    </section> --}}

    <!-- Section News -->

    {{-- <section class="section section-news">
        <div class="section-news-head">
            <h3 class="section-title">WHAT'S HAPPENING</h3>
            <p class="section-subtitle">Apa saja yang terjadi seputar Pariwisata, Kebudayaan dan Event di Bali</p>
        </div>
        <div class="section-news-body">
            <div class="row slides">
                <div class="col">
                    <img src="img/news/039443100_1523457714-IMG-20180411-WA0038.jpg">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top"> 10 Ribu Sepeda Tua dari 30 Negara Kumpul di Bali</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
                <div class="col-2">
                    <img src="img/news/038321800_1523380452-IMG-20180410-WA0031.jpg">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top">Keistimewaan Bali di Mata Dubes Mesir</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
                <div class="col">
                    <img src="img/news/023053600_1523534851-IMG-20180412-WA0034.jpg">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top">Aksi Polres Badung Tangkal Hoaks</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Section Footer -->

    {{-- <section class="section-footer">
        <div class="texture-handler-top"></div>
        <div class="row">
            <div class="col-left">
                <p>Copyright &copy; 2017</p>
                <p>Jl. Panglima Sudirman, Caruban Madiun <br>
                    Phone : +62 851 2343 9090 <br>
                    Email : contact@bavel.com </p>
                <a href="https://www.facebook.com/bestbali/" target="_blank"><span
                        class="ion-social-facebook icon-social"></span></a>
                <a href="https://www.instagram.com/explorebali/" target="_blank"><span
                        class="ion-social-instagram icon-social"></span></a>
                <a href="https://twitter.com/hashtag/explorebali?lang=en" target="_blank"><span
                        class="ion-social-twitter icon-social"></span></a>
            </div>
            <div class="col-right">
                <b>EXPERIENCE</b>
                <ul>
                    <li><a href="#">Natural</a></li>
                    <li><a href="#">Culture</a></li>
                    <li><a href="#">Religi</a></li>
                    <li><a href="#">Culnary</a></li>
                    <li><a href="#">Adventure</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>TRAVEL GUIDE</b>
                <ul>
                    <li><a href="#">Tourism Guide</a></li>
                    <li><a href="#">Travel Agent</a></li>
                    <li><a href="#">Accomodations</a></li>
                    <li><a href="#">On Budget</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>WHAT'S HAPPEN</b>
                <ul>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Tips & Info</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p><a href="https://github.com/yogs22/tourism-bali-template" rel="noreferer" target="_blank">Tourism
                    Template</a> - Created With <span class="ion-heart red"></span> to create a Lovable Website</p>
        </div>
    </section> --}}

    <script type="text/javascript" src="{{ asset('theme/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/swipe.js') }}"></script>


    <script>
        //get data initial maker from controller
        // var data = {!! json_encode($initialMarkers) !!};
        // var lat = parseFloat(data[0].lat);
        // var long = parseFloat(data[0].long);
        // var icon = data[0].icon;
        // let map, infoWindow;

        function initMap() {

            //get locaation now
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    console.log(position);
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                        zoom : 13,
                    };
                   
                    const map = new google.maps.Map(document.getElementById("map"), {
                        center: {
                            lat: pos.lat,
                            lng: pos.lng
                        },
                        zoom: pos.zoom,
                    });

                    const maker = new google.maps.Marker({
                        position: {
                            lat: pos.lat,
                            lng: pos.lng
                        },
                        map,
                        //title from in location name terdekat 
                        title: "Hello World!",
                        icon: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
                    });
                    // infoWindow.setPosition(pos);
                    // infoWindow.setContent('Location found.');
                    // infoWindow.open(map);
                    // map.setCenter(new google.maps.LatLng(pos.lat, pos.lng));
                    // map.setZoom(pos.zoom);

                    // const maker = new google.maps.Marker({
                    //     position: {
                    //         lat: pos.lat,
                    //         lng: pos.lng
                    //     },
                    //     map,
                    //     title: "Hello World!",
                    //     icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png',
                    // });
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }

        
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



</body>

</html>
