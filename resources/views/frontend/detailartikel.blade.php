    @extends('layouts/layout_user.layout2')

    @section('content')


    <section id="artikel" class="blog-section bg-grey padding">
        <div class="container" style="padding-top:3%;">
            <!-- <div class="section-heading mb-60 text-center" style="padding-top:20px;">
                <h2>Artikel</h2>
                <p>Silahkan pilih artikel yang ingin anda baca </p>
            </div> -->
            <div class="row">
                <!-- @foreach($detail as $artikel)
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="blog-box">
                        <div class="blog-thumb">
                            <img src="{{asset('images/artikel/'.$artikel->gambar)}}" alt="img" height="250px">
                            <div class="post-meta">
                                <div>
                                    <span><i class="fa fa-tag"></i>{{$artikel->namakategori}}</span>
                                    <span><i class="fa fa-calendar"></i>{{$artikel->created_at}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach -->
                @foreach($detail as $artikel)
                <div class="col-sm-12">
                    <div class="card bg-grey" style="border: none;">
                        <div class="card-body" align="center" class="section-heading" style="padding-left:10%;padding-right:10%;">
                            
                            <img src="{{asset('images/artikel/'.$artikel->gambar)}}" alt="img" style="width:100%;padding-bottom:5%">
                            <h2 class="card-title " align="left">{{$artikel->judul}}</h2>
                            <p class="card-text" align="left">{!!$artikel->isi!!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    @endsection