@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
@endsection

@php
$title = 'Admin Sayfası';
$subTitle = 'Kullanıcı Listesi';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

@section('header', 'Kullanıcı Listesi')

@section('content')
<div class="col-12 d-flex justify-content-start">
    <a href="{{ route('adminUserEdit') }}" class="btn btn-primary me-1 mb-1"><i class="bi bi-plus-circle"></i> Kullanıcı Ekle</a>
</div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Adı Soyadı</th>
                            <th>Kullanıcı Adı</th>
                            <th>Mail</th>
                            <th>Adresi</th>
                            <th>Kayıt Tarihi</th>
                            <th>Durum</th>
                            <th>Eylem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sercan Sever</td>
                            <td>CR7</td>
                            <td>sercan.sever35@gmail.com</td>
                            <td>Adres Mah. Bilgi Cad. No 20 Bayındır/İzmir</td>
                            <td>17.07.2021</td>
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
                            <td>Yusuf Sever</td>
                            <td>Q7</td>
                            <td>yusuf.sever35@gmail.com</td>
                            <td>Adres Mah. Bilgi Cad. No 20 Bayındır/İzmir</td>
                            <td>15.07.2021</td>
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
