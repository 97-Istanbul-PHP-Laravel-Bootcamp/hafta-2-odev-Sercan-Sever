@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
@endsection

@php
$title = 'Admin Sayfası';
$subTitle = 'Satış Listesi';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

@section('header', 'Satış Listesi')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kodu</th>
                            <th>Muşteri Bilgisi</th>
                            <th>KDV Hariç Tutar</th>
                            <th>KDV Tutar</th>
                            <th>Ödenen Tutar</th>
                            <th>Ödeme Tipi</th>
                            <th>Ödeme Durumu</th>
                            <th>Eylem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123</td>
                            <td>Graiden</td>
                            <td>076 4820 8838</td>
                            <td>076 4820 8838</td>
                            <td>100 TL</td>
                            <td>Kredi Kartı</td>
                            <td>
                                <span class="badge bg-success">Ödendi</span>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6"> <a href="{{ route('adminSalesView') }}/1" class="btn btn-outline-primary"><i class="bi bi-info-circle-fill"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4321</td>
                            <td>Nathaniel</td>
                            <td>(012165) 76278</td>
                            <td>(012165) 76278</td>
                            <td>75 TL</td>
                            <td>Havale / EFT</td>
                            <td>
                                <span class="badge bg-warning">Ödeme Bekliyor</span>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6"> <a href="{{ route('adminSalesView') }}/5" class="btn btn-outline-primary"><i class="bi bi-info-circle-fill"></i></a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5545</td>
                            <td>Sercan Sever</td>
                            <td>(012165) 76278</td>
                            <td>(012165) 76278</td>
                            <td>1000 TL</td>
                            <td>Kapıda Ödeme</td>
                            <td>
                                <span class="badge bg-danger">İptal Edildi</span>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6"> <a href="{{ route('adminSalesView') }}/15" class="btn btn-outline-primary"><i class="bi bi-info-circle-fill"></i></a></div>
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
