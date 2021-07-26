@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
@endsection

@php
$title = 'Admin Sayfası';
$subTitle = 'Ürün Listesi';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

@section('header', 'Ürün Listesi')

@section('content')
<div class="col-12 d-flex justify-content-start">
    <a href="{{ route('adminProductEdit') }}" class="btn btn-primary me-1 mb-1"><i class="bi bi-plus-circle"></i> Ürün Ekle</a>
</div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th> </th>
                            <th>Adı</th>
                            <th>Kodu</th>
                            <th>Açıklaması</th>
                            <th>Fiyat</th>
                            <th>Kategori</th>
                            <th>Stok Adedi</th>
                            <th>Durum</th>
                            <th>Eylem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Görsel </td>
                            <td>Iphone XS Max</td>
                            <td>kategori-seo-ad</td>
                            <td>076 4820 8838</td>
                            <td>076 4820 8838</td>
                            <td>Teknoloji</td>
                            <td>076 4820 8838</td>
                            <td>
                                <span class="badge bg-success">Aktif</span>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6"> <a href="#" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a></div>
                                    <div class="col-md-6"><a href="#" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Görsel </td>
                            <td>Nathaniel</td>
                            <td>(012165) 76278</td>
                            <td>076 4820 8838</td>
                            <td>076 4820 8838</td>
                            <td>Giyim</td>
                            <td>076 4820 8838</td>
                            <td>
                                <span class="badge bg-danger">Pasif</span>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6"> <a href="#" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a></div>
                                    <div class="col-md-6"><a href="#" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a></div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection

@section('customJS')
    <script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection
