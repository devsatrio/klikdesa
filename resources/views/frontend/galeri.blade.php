@extends('layouts/layout_user.base')

@section('content')

<style type="text/css">
.img {
    position: relative;
    z-index: 1;
    top: 0px;
}

.p {
    position: absolute;
    top: 20px;
    z-index: 2;
    color: #fff;
}
</style>


<section id="artikel" class="blog-section bg-grey padding">
    <div class="container">
        <div class="section-heading mb-60 text-center">
            <h2>Galeri</h2>
            <p>Kumpulan dokumentasi </p>
        </div>
        <div class="row">
            @foreach($data_galeri as $galeri)
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="blog-box">
                    <div class="blog-thumb">
                        <a href="#" data-toggle="modal" data-target="#galeri{{$galeri->id}}">
                            <img src="{{asset('images/galeri/'.$galeri->gambar)}}" alt="img">
                        </a>
                        <div class="post-meta">
                            <div>
                                <span><i class="fa fa-tag"></i>{{$galeri->judul}}</span>
                                <span><i class="fa fa-calendar"></i>{{$galeri->created_at}}</span>
                            </div>
                        </div>
                    </div>
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
            {{ $data_galeri->links() }}
        </div>
    </div>
</section>
<!-- <section id="galeri" class="features-section padding">
    <div class="container">
        <div class="section-heading text-center mb-60">
            <h2>GALERI</h2>
        </div>
        <div class="row feature-wrap mb-60 ">
            @foreach($data_galeri as $galeri)
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
            {{ $data_galeri->links() }}
        </div>
    </div>
</section> -->
@endsection