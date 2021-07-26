@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css') }}">
@endsection

@php
$title = 'Admin Sayfası';
$subTitle = 'Kategori Ekleme - Düzenleme';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

@section('header', 'Kategori Ekleme / Düzenleme')

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('adminCategoryList') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column"><strong>Kategori Ad</strong></label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Kategori Ad" name="catName">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column"><strong>Kategori Seo Ad</strong></label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="kategori-seo-ad" name="catSeoName">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column"><strong>Kategori Sıra No</strong></label>
                                            <input type="number" min="1" id="city-column" class="form-control" placeholder="Kategori Sıra No" name="ctItemNo">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <label for="checkbox5"><strong>Aktiflik</strong></label>
                                                <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet / Düzenle <i class="bi bi-patch-check-fill"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
