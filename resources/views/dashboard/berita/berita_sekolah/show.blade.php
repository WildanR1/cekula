@extends('dashboard.main')
@section('content')
   <div class="header-schedule">
      <div class="d-flex align-items-center px-4">
         <a href="{{ route('berita_sekolah.index') }}" class="text-white "><i class="bi bi-arrow-left"></i></a>
         <span class="text-white mx-auto">Berita Sekolah</span>
      </div>
   </div>

   <main>
      <div class="container">
         <div class="row p-4 justify-content-center pb-5">
            <div class="col-md-10">
               <div class="font-rubik text-grey-600 font-20 mb-2">{{ $beritaSekolah->judul }}</div>
               <div class="text-small text-grey-600 mb-3">Berita Sekolah<i class="bi bi-dot color-blue "></i>
                  {{ $beritaSekolah->created_at->diffForHumans() }}</div>
               {{-- <div class="text-small text-grey-600 mb-3">Berita Sekolah<i class="bi bi-dot color-blue "></i> {{ date('d F Y', strtotime($beritaSekolah->tgl_mulai)) }} - {{ date('d F Y', strtotime($beritaSekolah->tgl_selesai)) }}</div> --}}
               <div class="col-12 col-md-10">
                  @if (!$beritaSekolah->pamflet)
                     <img src="/assets/img/no_image.png" class="card-img-top img-fluid mx-auto" style="width: 400px;">
                  @else
                     <img src="{{ asset('storage/' . $beritaSekolah->pamflet) }}" class="img-fluid " width="400">
                  @endif
               </div>
               <div class="text-grey-600 font-noto py-4">
                  {!! $beritaSekolah->deskripsi !!}
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
