@extends('artis.components.artisTemplate')

@section('content')
    <link rel="stylesheet" href="/user/assets/css/billboard.css">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card thin rounded-4" style="border: 1px solid #EAEAEA;">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-7">
                                    <div class="preview-list">
                                        <div class="d-flex flex-column gap-3" style="color: #6C6C6C;">
                                            <span class="fw-bold fs-4">{{ $billboard->artis->user->name }}</span>
                                            <span class="fs-5">{{ $billboard->deskripsi }}.</span>
                                            <div class="d-flex gap-4 align-content-center">
                                                <span>
                                                    <button
                                                        style="background-color: #957DAD; border: 1px solid #957dad; padding: 4px 25px;"
                                                        class="rounded-3">
                                                        <span class="text-white">
                                                            Mainkan
                                                        </span>
                                                    </button>
                                                    <span style="margin-left: -20px;">
                                                        <svg width="50" height="50" viewBox="0 0 50 50"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="25" cy="25" r="25"
                                                                fill="white" />
                                                            <path
                                                                d="M35.2542 21.712C37.5502 23.3028 37.5502 26.6972 35.2542 28.288L23.778 36.2389C21.1252 38.0769 17.5 36.1782 17.5 32.951L17.5 17.049C17.5 13.8217 21.1252 11.9231 23.778 13.7611L35.2542 21.712Z"
                                                                fill="#957DAD" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex text-right justify-content-center">
                                    <img src="{{ asset('storage/' . $billboard->image_artis) }}" alt=""
                                        class="d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="cards d-flex justify-content-center z-3 gap-4"
                        style="margin-top: -150px; margin-left: 12px;">
                        @foreach ($albums as $item)
                            <a href="{{ route('albumBillboard', $item->code) }}">
                                <img src="{{ asset('storage/' . $item->image) }}" width="170"
                                    class="img-fluid rounded-4">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card">
                    <h3 class="card-title mb-4 judul" style="font-size: 20px; font-weight: 700">Lagu Populer Agnez mo</h3>
                    <div class="card scroll scrollbar-down thin">
                        <div class="card-body">
                            <div class="row" style="margin-top: -20px">
                                <div class="col-12">
                                    <div class="preview-list">
                                        @foreach ($songs as $item)
                                            <div class="preview-item">
                                                <div class="preview-thumbnail">
                                                    <img src="{{ asset('storage/' . $item->image ) }}" width="10%">
                                                </div>
                                                <div class="preview-item-content d-sm-flex flex-grow">
                                                    <a href="" class="flex-grow text-decoration-none link">
                                                        <h6 class="preview-subject">{{ $item->judul }}</h6>
                                                        <p class="text-muted mb-0">{{ $item->artist->user->name }}</p>
                                                    </a>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <div class="text-group">
                                                        <i onclick="myFunction(this)" class="far fa-heart pr-2"></i>
                                                        <p style="pointer-events: none;">{{ $item->waktu }}</p>
                                                        <a data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdrop-{{ $item->code }}"
                                                                style="color: #957dad">
                                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                                                    y="0px" width="20" height="20"
                                                                    viewBox="0 2 24 24">
                                                                    <path fill="#957DAD"
                                                                        d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 11 7 L 11 11 L 7 11 L 7 13 L 11 13 L 11 17 L 13 17 L 13 13 L 17 13 L 17 11 L 13 11 L 13 7 L 11 7 z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        function myFunction(x) {
            x.classList.toggle("far"); // Menghapus kelas "fa fa-heart"
            x.classList.toggle("fas"); // Menambahkan kelas "fas fa-heart"
            x.classList.toggle("warna-kostum-like"); // Menambahkan kelas warna merah
        }
    </script>
@endsection
