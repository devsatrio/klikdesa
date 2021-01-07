@extends('layouts/layout_user.base')
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
@section('content')

<!-- <section id="home" class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1>The Perfect Landing Page to <br>Showcase Your App</h1>
            <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p>
            <div class="btn-group">
                <a href="#"><img src="img/appstore.png" alt="appstore"></a>
                <a href="#"><img src="img/playstore.png" alt="playsotre"></a>
            </div>
        </div>
    </div>
    <div class="hero-moc"></div>
</section>Hero Section -->

<section id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            @if($hitung > 0)
            @php $i=0; @endphp
            @foreach($slider as $data_slider)
            @if($i == 0)
            <div class="carousel-item active text-right">
                @else
                <div class="carousel-item text-right">
                    @endif
                    <img src="{{asset('images/slider/'.$data_slider->gambar)}}" class="d-block w-100"
                        style="padding-top:70px;" alt="...">
                    <div class="carousel-caption d-none d-md-block right-caption text-left"
                        style="padding-bottom: 200px;">
                        <h1 style=" display: inline-block;background-color:black;padding:5px;opacity: 0.5;">
                            {{$data_slider->judul}}</h1>
                        <br>
                        <h5 style=" display: inline-block;background-color:black;padding:5px;opacity: 0.5;">
                            {{$data_slider->isi}}</h5>
                    </div>
                </div>
                @php $i++; @endphp
                @endforeach
                @endif
            </div>
        </div>
</section>

<!-- <section id="home" class="hero-section">
        @foreach($slider as $data_slider2)
        <img src="{{asset('images/slider/'.$data_slider2->gambar)}}" class="d-block w-100" alt="...">
        @endforeach
</section> -->

<section class="promo-section padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 sm-padding">
                <div class="promo-content text-center">
                    <i class="icon-shield icon"></i>
                    <h3>Highly Secured</h3>
                    <p>Lorem ipsum dolor sit amet adipisicing of more of sedis do eiusmod tempor incididunt.
                        Appipsum
                        incididunt.</p>
                </div>
            </div><!-- Promo-1 -->
            <div class="col-md-4 col-sm-6 sm-padding">
                <div class="promo-content text-center">
                    <i class="icon-layers icon"></i>
                    <h3>Easily Managable</h3>
                    <p>Lorem ipsum dolor sit amet adipisicing of more of sedis do eiusmod tempor incididunt.
                        Appipsum
                        incididunt.</p>
                </div>
            </div><!-- Promo-1 -->
            <div class="col-md-4 col-sm-6 sm-padding">
                <div class="promo-content text-center">
                    <i class="icon-bargraph icon"></i>
                    <h3>Well Documented</h3>
                    <p>Lorem ipsum dolor sit amet adipisicing of more of sedis do eiusmod tempor incididunt.
                        Appipsum
                        incididunt.</p>
                </div>
            </div><!-- Promo-3 -->
        </div>
    </div>
</section><!-- Promo Section -->

<section id="artikel" class="content-section bg-grey padding">
    <div class="container">\
        <div class="section-heading text-center mb-60">
            <h2>ARTIKEL</h2>
            <!-- <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p> -->
        </div>
        <div class="row row-cols-1 row-cols-md-1 g-4">
            @foreach($artikel as $data_artikel)
            <div class="col-md-6 col-6 xs-padding" style="display:block;">
                <div class="card mb-3 feature-content" style="max-width: 540px;">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <img src="{{asset('images/artikel/'.$data_artikel->gambar)}}" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card withasdasdsadasdsadsa asdsadasdasd sadasd.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-heading text-center" style="padding-top:40px;">
            <a href="#" class="btn btn-success"
                style="border-color: #4CAF50;color: #4CAF50; background-color:white; border-radius:40px;">Lihat Semua <i
                    class="fa fa-location"></i></a>
            <!-- <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p> -->
        </div>
    </div>
</section>

<section id="galeri" class="features-section padding">
    <div class="container">
        <div class="section-heading text-center mb-60">
            <h2>GALERI</h2>
            <!-- <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p> -->
        </div>
        <div class="row feature-wrap mb-60">
            @foreach($data as $galeri)
            <div class="col-md-3 col-4 xs-padding">
                <div class="feature-content text-center">
                    <img src="{{asset('images/galeri/'.$galeri->gambar)}}" style="width:100%;"
                        style="padding-bottom: 100px;">
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-heading text-center" style="padding-top:40px;">
            <a href="#" class="btn btn-success"
                style="border-color: #4CAF50;color: #4CAF50; background-color:white; border-radius:40px;">Lihat Semua <i
                    class="fa fa-location"></i></a>
            <!-- <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p> -->
        </div>
    </div>
</section><!-- Feature Section -->

<section id="kontak" class="blog-section bg-grey padding">
    <div class="container">
        <div class="section-heading mb-60 text-center">
            <h2>Kontak Kami</h2>
            <p>jika ada keluhan atau ada pertnayaan silhakan hubungi kami via email atau media sosial <br> yang telah
                kami cantumkan dibawah ini</p>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15811.040748701675!2d112.0699626!3d-7.8151904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f4428370fac379f!2sSuryantara+Cargo!5e0!3m2!1sid!2sid!4v1547396770588"
                    width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 mb-60 ">
                <!-- <h4>jika ada keluhan silahkan hubungi kami via:</h4> -->
                <div class="row">
                    <div class="col-md-1"><i class="fa fa-map-marker fa-2x" style="width:100%;"></i></div>
                    <div class="col-md-10 mb-20">Lokasi : Jl. tegalan rt.05 rw.05 desa
                        ngasem , kec. ngasem
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"><i class="fa fa-envelope fa-2x" style="width:100%;"></i></div>
                    <div class="col-md-10 mb-20">Email : klik_desa_2020@gmail.co.id
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"><i class="fa fa-phone fa-2x" style="width:100%;"></i></div>
                    <div class="col-md-10 mb-20">Telepon : +62 857-3089-0009
                    </div>
                </div>
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="col-md-12"></div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="header-btn text-center">
                        <a href="#" class="btn btn-success"
                            style="border-color: #4CAF50;color: #4CAF50; background-color:white; border-radius:40px;">Kirim
                            Pesan <i class="fa fa-location"></i></a>
                    </div>
                </form>
                <!-- <div class="mb-20">
                    
                </div>
                <div>
                    <span><i class="fa fa-envelope-o fa-2x" style="width:100%;"> Email : klikdesa@gmail.com</i> </span>
                    <br>
                </div> -->
            </div>
            <!-- <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog-box">
                    <div class="blog-thumb text-center">
                        <i class="fa fa-user fa-5x" style="width:100%;"></i>
                        <div class="post-meta">
                            <div>
                                <span><i class="fa fa-user"></i>By: Admin</span>
                                <span><i class="fa fa-calendar"></i>Jan 01, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">No one cares about products. people care about ideas.</a></h3>
                        <p>Lorem Ipsum is simply text of the printing and typesetting industry.It has survived not
                            only
                            five centuries.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>Post-1
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog-box">
                    <div class="blog-thumb">
                        <img src="img/blog-2.jpg" alt="img">
                        <div class="post-meta">
                            <div>
                                <span><i class="fa fa-user"></i>By: Admin</span>
                                <span><i class="fa fa-calendar"></i>Jan 01, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">No one cares about products. people care about ideas.</a></h3>
                        <p>Lorem Ipsum is simply text of the printing and typesetting industry.It has survived not
                            only
                            five centuries.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog-box">
                    <div class="blog-thumb">
                        <img src="img/blog-3.jpg" alt="img">
                        <div class="post-meta">
                            <div>
                                <span><i class="fa fa-user"></i>By: Admin</span>
                                <span><i class="fa fa-calendar"></i>Jan 01, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">No one cares about products. people care about ideas.</a></h3>
                        <p>Lorem Ipsum is simply text of the printing and typesetting industry.It has survived not
                            only
                            five centuries.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>Post-1 -->
        </div>
    </div>
</section><!-- Blog Section -->

@endsection