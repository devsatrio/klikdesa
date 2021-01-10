@extends('layouts/layout_user.layout2')

@section('content')


<section id="artikel" class="blog-section padding">
    <div class="container">
        <div class="section-heading mb-60 text-center" style="padding-top:20px;">
            <h2 class=>Artikel</h2>
            <p>Silahkan pilih artikel yang ingin anda baca </p>
        </div>
        <div class="row">
            @foreach($data_artikel as $artikel)
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
                    <div class="blog-content">
                        <h3><a href="#">{{$artikel->judul}}</a></h3>
                        <p>{{$artikel->subjudul}}</p>
                        <a href="{{url('/detail-artikel/'.$artikel->slug)}}" class="read-more">Lanjut Baca</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-heading text-center" style="padding-top:40px;">
            {{$data_artikel->links() }}
        </div>
    </div>
</section>
<!-- <section id="galeri" class="features-section padding">
    <div class="container">
        <div class="section-heading text-center mb-60">
            <h2>GALERI</h2>
        </div>
        <div class="row feature-wrap mb-60 ">
            @foreach($data_artikel as $galeri)
            <div class="col-md-3 col-4 xs-padding mb-30">
                <div class="feature-content text-center">
                    <a href="#" data-toggle="modal" data-target="#galeri{{$galeri->id}}">
                        <img src="{{asset('images/galeri/'.$galeri->gambar)}}" style="width:100%;"
                            style="padding-bottom: 100px;">
                    </a>
                </div>
            </div>
            <div class="modal fade" id="galeri{{$galeri->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$galeri->judul}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{asset('images/galeri/'.$galeri->gambar)}}"
                                class="card-img-top img-thumnail imgcustom" alt="..."
                                style="border: solid #E6E9E8 4px;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-heading text-center" style="padding-top:40px;">
            {{ $data_artikel->links() }}
        </div>
    </div>
</section> -->
@endsection