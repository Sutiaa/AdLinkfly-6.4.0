@extends ('layouts.app')
@section('article', 'active')
@section('title','Artikel')
@section('content')


<!-- ARTICLES -->


<section id="articles" class="py-5 bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Articles</h1>
                {{-- Untuk flash message --}}
                @if(session()->has('pesan'))
                @if(session()->get('pesan')== 'update')
                <div class="alert alert-success alert-dismissible w-50 mx-auto
                        fade show">
                    Data <b>{{session()->get('judul')}}</b> berhasil di update
                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                    </button>
                </div>
                @endif
                @endif

                @if(session()->get('pesan')== 'delete')
                <div class="alert alert-danger alert-dismissible w-50 mx-auto
                       fade show">
                    Data <b>{{session()->get('judul')}}</b> sudah dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                    </button>
                </div>
                @endif


            </div>
        </div>

        <div class="row row-cols-1">
            @forelse ($result as $value)
            <div class="col-md-4 mb-4">
                <img class="" src="{{ url('/storage/uploads/'.$value->gambar)}}">
            </div>
            <div class="col-md-8 mb-4">
                <div class="d-flex align-items-center">
                    <span class="bg-blue"><a href="{{ url('/artikel/'.$value->id) }} ">{{ $value->judul }}</a></span>
                    <span class="text-muted ps-4">Created at {{ date('F Y', strtotime($value->created_at)) }}</span>
                </div>
                <div>

                    <p class="text-muted">{{$value->isi ?? '. . .'}}</a>
                </div>
            </div>
            @empty
            <p>Tidak ada data...</p>
            @endforelse
        </div>
    </div>
</section>

<!-- <div class="col-md-4 mb-4">
                <img class="" src="https://images.pexels.com/photos/2657669/pexels-photo-2657669.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
            </div>
            <div class="col-md-8 mb-4">
                <div class="d-flex align-items-center">
                    <span class="bg-blue">css</span>
                    <span class="text-muted ps-4">May 27, 2021</span>
                </div>
                <div>
                    <p class="text-capitalize fs5 my-3 fw-bolder">CSS Float: A Tutorial</a>
                    <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        numquam, quisquam ad, necessitatibus illum explicabo ut pariatur iusto asperiores dicta
                        repudiandae delectus facere </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img src="https://images.pexels.com/photos/5198239/pexels-photo-5198239.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
            </div>
            <div class="col-md-8 mb-4">
                <div class="d-flex align-items-center">
                    <span class="bg-vio">JQuery</span>
                    <span class="text-muted ps-4">March 1, 2021</span>
                </div>
                <div>
                    <p class="text-capitalize fs5 my-3 fw-bolder">ASK HN: Does Anybody Still Use JQuery</a>
                    <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        numquam, quisquam ad, necessitatibus illum explicabo ut pariatur iusto asperiores dicta
                        repudiandae delectus facere </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 order-lg-1 mb-3">
        <span class="fs-4 mb-2 fw-bold text-capitalize">catagories</span>
        <div class="d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between border-bottom py-2">
                <span>Web Design</span>
                <span class="bg-green">340</span>
            </div>
            <div class="d-flex align-items-center justify-content-between border-bottom py-2">
                <span>javascript</span>
                <span class="bg-orgn">74</span>
            </div>
            <div class="d-flex align-items-center justify-content-between border-bottom py-2">
                <span>JQuery</span>
                <span class="bg-blu">41</span>
            </div>
            <div class="d-flex align-items-center justify-content-between border-bottom py-2">
                <span>CSS</span>
                <span class="bg-violet">35</span>
            </div>
        </div>
        <div class="d-flex flex-wrap  my-5">
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="top" title="Chorme" href="#">Chorme</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="top" title="CSS" href="#">CSS</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="top" title="Tutorial" href="#">Tutorial</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="top" title="Backend" href="#">Backend</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="left" title="JQuery" href="#">JQuery</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="top" title="Design" href="#">Design</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="right" title="Development" href="#">Development</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="bottom" title="javascript" href="#">Javascript</a>
            <a class="items" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Website" href="#">Website</a>

        </div>
    </div>
</div>
</div> -->
@endsection