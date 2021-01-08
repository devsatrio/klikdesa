@extends('layouts/layout_user.base')
@section('content')
@foreach($slider as $ds)
<section id="home" class="hero-section row mr-0 ml-0 pt-5">
    <div class="col-md-6 pl-0 pr-0 mt-5">
        <div class="text-center">
            <h2 class="text-dark pl-5 pr-5">{{$ds->judul}}</h2>
            <p class="pl-5 pr-5">
                <span class="pr-5">
                    <b>{{$ds->isi}}</b>
                </span>
            </p>
            @if($ds->link!='')
            <div class="btn-group pl-5 pr-5">
                <a href="{{$ds->link}}" target="blank()" class="default-btn">{{$ds->link_text}}</a>
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-6 pl-0 pr-0 text-center">
        <img class="pt-3" src="{{asset('images/slider/'.$ds->gambar)}}" alt="" width="50%">
    </div>
    </div>

</section>
@endforeach
<section class="content-section bg-grey padding pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5 pl-5s">
                <div class="content-mockups">
                    <img class="pt-3 img-thumbnail" src="{{asset('assets/frontend/img/gambar2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 mt-5 pl-5">
                <div class="section-heading mb-40">
                    <br><br>
                    <h2>How does this App Work?</h2>
                    <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p>
                </div>
                <div class="content-lists">
                    <div class="list-item">
                        <i class="icon-tools"></i>
                        <div class="list-content">
                            <h3>Create Your Account</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="list-item">
                        <i class="icon-pictures"></i>
                        <div class="list-content">
                            <h3>Upload Your Picture</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="list-item">
                        <i class="icon-genius"></i>
                        <div class="list-content">
                            <h3>Get Your Own Time</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Content Section -->

<section id="feature" class="features-section padding">
    <div class="container">
        <div class="section-heading text-center mb-60">
            <h2>Features</h2>
            <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p>
        </div>
        <div class="row feature-wrap">
            <div class="col-md-4 col-sm-6">
                <div class="feature-content text-center">
                    <i class="icon-laptop"></i>
                    <h3>Powerfull System</h3>
                    <p>Lorem ipsum dolor sit amet adipisicing of more of sedis do more eiusmod tempor incididunt.</p>
                </div>
            </div><!-- Feature-1 -->
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature-content text-center">
                    <i class="icon-anchor "></i>
                    <h3>Personalization</h3>
                    <p>Lorem ipsum dolor sit amet adipisicing of more of sedis do more eiusmod tempor incididunt.</p>
                </div>
            </div><!-- Feature-2 -->
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="feature-content text-center">
                    <i class="icon-genius"></i>
                    <h3>Ease Of Access</h3>
                    <p>Lorem ipsum dolor sit amet adipisicing of more of sedis do more eiusmod tempor incididunt.</p>
                </div>
            </div><!-- Feature-3 -->
        </div>
    </div>
</section><!-- Feature Section -->

<section id="screenshots" class="screenshots-section bg-grey padding">
    <div class="container">
        <div class="section-heading mb-60 text-center">
            <h2>Screenshots</h2>
            <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p>
        </div>
        <div class="swiper-container">
            <div class="mobile-mock">
                <div class="screen"></div>
                <div class="circle"></div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa1.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa2.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa3.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa4.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa5.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa6.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa7.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa8.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa9.jpg')}}" alt="screenshot">
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="{{asset('assets/frontend/ss/klikdesa10.jpg')}}" alt="screenshot">
                </div>
            </div>
            <!-- Carousel Arrows -->
            <div class="swiper-next"><i class=" arrow_carrot-right"></i></div>
            <div class="swiper-prev"><i class=" arrow_carrot-left"></i></div>
        </div>
    </div>
</section>

<section id="download" class="download-section padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <div class="download-content">
                    <h2>Download Klik Desa Hari Ini!</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It has survived not
                        only five centuries.</p>
                    <div class="btn-group">
                        <a href="#"><img src="{{asset('assets/frontend/img/appstore.png')}}" alt="btn"></a>
                        <a href="#"><img src="{{asset('assets/frontend/img/playstore.png')}}" alt="btn"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 xs-d-none">
                <img src="{{asset('assets/frontend/img/gambar1.png')}}" alt="mockup" class="img-thumbnail" />
            </div>
        </div>
    </div>
</section>

<section id="artikel" class="blog-section bg-grey padding">
    <div class="container">
        <div class="section-heading mb-60 text-center">
            <h2>Artikel</h2>
            <p>Baca berita dan cerita terbaru tentang aplikasi klik desa</p>
        </div>
        <div class="row">
            @foreach($artikel as $data_artikel)
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog-box">
                    <div class="blog-thumb">
                        <img src="{{asset('images/artikel/'.$data_artikel->gambar)}}" alt="img">
                        <div class="post-meta">
                            <div>
                                <span><i class="fa fa-tag"></i>{{$data_artikel->namakategori}}</span>
                                <span><i class="fa fa-calendar"></i>{{$data_artikel->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">{{$data_artikel->judul}}</a></h3>
                        <p>{{$data_artikel->subjudul}}</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-heading text-center" style="padding-top:40px;">
            <a href="#" class="default-btn">Lihat Semua <i class="fa fa-location"></i></a>
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
            <div class="col-md-3 col-4 xs-padding mb-30">
                <div class="feature-content text-center">
                    <img src="{{asset('images/galeri/'.$galeri->gambar)}}" style="width:100%;"
                        style="padding-bottom: 100px;">
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-heading text-center" style="padding-top:40px;">
            <a href="{{url('/list-galeri')}}" class="btn btn-success"
                style="border-color: #4CAF50;color: #4CAF50; background-color:white; border-radius:40px;">Lihat Semua <i
                    class="fa fa-location"></i></a>
            <!-- <p>Is amazing, modern and clean landing page for showcase <br> your app anything else.</p> -->
        </div>
    </div>
</section>

<div id="contact" class="subscribe-section padding" style="background-color: #38af55;">
    <div class="container text-center">
        <div class="subscribe-content">
            <img class="logo" src="{{asset('assets/frontend/img/footer-Logo.png')}}" alt="logo" />
            <p>Lorem Ipsum is simply text of the printing and typesetting industry. <br>It has survived not only five
                centuries.</p>
        </div>
        <div class="subscribe-wrap">
            <form action="#" class="subscribe-form">
                <input type="email" name="email" id="subs-email" class="form_input"
                    placeholder="Enter Your Email Address...">
                <button type="submit" class="submit">Subscribe</button>
                <div id="subscribe-result">
                    <p class="subscription-success"></p>
                    <p class="subscription-error"></p>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <ul class="social-link">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-skype"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
    </div>
</div>
<footer class="footer-section align-center">
    <div class="container">
        <p>&copy; 2018 Axuta Powered by TeamXcel</p>
    </div>
</footer><!-- /.footer_section -->
@endsection