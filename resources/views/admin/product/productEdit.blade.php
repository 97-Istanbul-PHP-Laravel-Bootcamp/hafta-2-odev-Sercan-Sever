@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/choices.js/choices.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/toastify/toastify.css') }}">
    <link href="{{ asset('css/filepond.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filepond-plugin-image-preview.css') }}" rel="stylesheet">
@endsection

@php
    $title = 'Admin Sayfası';
    $subTitle = 'Ürün Ekleme - Düzenleme';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

@section('header', 'Ürün Ekleme / Düzenleme')

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('adminProductList') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="product-name"><strong>Ürün Adı</strong></label>
                                            <input type="text" id="product-name" class="form-control" placeholder="Ürün Adı" name="prodName">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="product-code"><strong>Ürün Kodu</strong></label>
                                            <input type="text" id="product-code" class="form-control" placeholder="Ürün Kodu" name="prodCode">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="productTextarea" class="form-label"><strong>Ürün Açıklaması</strong></label>
                                            <textarea class="form-control" id="productTextarea" rows="3" placeholder="Ürün Açıklamasını Giriniz..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="product-price"><strong>Ürün Fiyat</strong></label>
                                            <input type="number" min="0" id="product-price" class="form-control" name="prdPrice" placeholder="Ürün Fiyatı">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="basicSelect"><strong>Kategori</strong></label>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="basicSelect">
                                                    <option>PHP</option>
                                                    <option>Bootstrap</option>
                                                    <option>Javascript</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="productBodySelect"><strong>Ürün Beden</strong></label>
                                            <select class="choices form-select multiple-remove" id="productBodySelect" multiple="multiple">
                                                <optgroup label="<strong>Beden</strong>">
                                                    <option value="xs">XS</option>
                                                    <option value="m" selected>M</option>
                                                    <option value="l">L</option>
                                                    <option value="xl">XL</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="productColorSelect"><strong>Ürün Renk</strong></label>
                                            <select class="choices form-select multiple-remove" id="productColorSelect" multiple="multiple">
                                                <optgroup label="<strong>Renk</strong>">
                                                    <option value="red">Kırmızı</option>
                                                    <option value="green">Yeşil</option>
                                                    <option value="blue" selected>Mavi</option>
                                                    <option value="purple">Mor</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="product-stock-piece"><strong>Stok Adedi</strong></label>
                                            <input type="number" min="1" id="product-stock-piece" class="form-control" name="prodStockPiece" placeholder="Stok Adedi">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <br>
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                <label for="checkbox5"><strong>Aktiflik</strong></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet / Düzenle <i class="bi bi-patch-check-fill"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Ürün Görseli Yükleme</h5>
                                </div>
                                <form action="#">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- imgBB file uploader -->
                                            <input type="file" name="image" class="imgbb-filepond">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Görselleri Yükle <i class="bi bi-image"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJS')
    <script src="{{ asset('vendors/choices.js/choices.min.js') }}"></script>

    <!-- filepond validation -->
    <script src=" {{ asset('js/filepond-plugin-file-validate-size.js') }}"></script>
    <script src="{{ asset('js/filepond-plugin-file-validate-type.js') }}"></script>

    <!-- image editor -->
    <script src="{{ asset('js/filepond-plugin-image-exif-orientation.js') }}"></script>
    <script src="{{ asset('js/filepond-plugin-image-crop.js') }}"></script>
    <script src="{{ asset('js/filepond-plugin-image-filter.js') }}"></script>
    <script src="{{ asset('js/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('js/filepond-plugin-image-resize.js') }}"></script>

    <!-- toastify -->
    <script src="{{ asset('vendors/toastify/toastify.js') }}"></script>

    <!-- filepond -->
    <script src="{{ asset('js/filepond.js') }}"></script>

    <script>
    // Filepond: ImgBB with server property
    FilePond.create( document.querySelector('.imgbb-filepond'), {
        allowImagePreview: false,
        server: {
            process: (fieldName, file, metadata, load, error, progress, abort) => {
                // We ignore the metadata property and only send the file

                const formData = new FormData();
                formData.append(fieldName, file, file.name);

                const request = new XMLHttpRequest();
                // you can change it by your client api key
                request.open('POST', 'https://api.imgbb.com/1/upload?key=762894e2014f83c023b233b2f10395e2');

                request.upload.onprogress = (e) => {
                    progress(e.lengthComputable, e.loaded, e.total);
                };

                request.onload = function() {
                    if (request.status >= 200 && request.status < 300) {
                        load(request.responseText);
                    }
                    else {
                        error('oh no');
                    }
                };

                request.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if(this.status == 200) {
                            let response = JSON.parse(this.responseText);

                            Toastify({
                                text: "Dosya Başarılı Bir Şekilde Yüklendi.",
                                duration: 3000,
                                close:true,
                                gravity:"bottom",
                                position: "right",
                                backgroundColor: "#4fbe87",
                            }).showToast();

                            console.log(response);
                        } else {
                            Toastify({
                                text: "Yükleme Esnasında Bir Sorun Oluştu! Tekrar Deneyiniz",
                                duration: 3000,
                                close:true,
                                gravity:"bottom",
                                position: "right",
                                backgroundColor: "#ff0000",
                            }).showToast();

                            console.log("Error", this.statusText);
                        }
                    }
                };

                request.send(formData);
            }
        }
    });
    </script>
@endsection
