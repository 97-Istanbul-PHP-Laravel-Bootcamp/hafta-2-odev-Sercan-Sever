@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
@endsection

@php
$title = 'Admin Sayfası';
$subTitle = 'Satış Detay';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

{{-- @section('header', 'Satış Detay') --}}

@section('content')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sipariş Özeti</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Sipariş Kodu</strong></td>
                                        <td>84643</td>
                                        {{-- *********************************************** --}}
                                        <td><strong>Ödeme Tipi</strong></td>
                                        <td>Kredi Kartı</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Alıcı Bilgisi</strong></td>
                                        <td>Sercan SEVER</td>
                                        {{-- *********************************************** --}}
                                        <td><strong>KDV Hariç Tutar</strong></td>
                                        <td><strong>366,85 TL</strong></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td><strong>Adres Bilgisi</strong></td>
                                        <td>Adres Mah. Bilgi Cad. No 20 Bayındır/İzmir</td>
                                        {{-- *********************************************** --}}
                                        <td><strong>KDV Tutar</strong></td>
                                        <td><strong><strong>66,03 TL</strong></strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tarih</strong></td>
                                        <td>10.07.2021</td>
                                        {{-- *********************************************** --}}
                                        <td><strong>Ödenen Tutar</strong></td>
                                        <td><strong>432,88 TL</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Kargo Bilgisi</strong></td>
                                        <td><strong>Kargoda</strong></td>
                                        {{-- *********************************************** --}}
                                        <td><strong>Ödeme Durumu</strong></td>
                                        <td><strong>Ödendi</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sipariş Verilen Ürünler</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Resim</th>
                                        <th>Ürün Kodu</th>
                                        <th>Açıklama</th>
                                        <th>Ürün Fiyat</th>
                                        <th>Aded</th>
                                        <th>Toplam Tutar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><h1><i class="bi bi-bag-check-fill"></i></h1></td>
                                        <td>300253</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, dolor!</td>
                                        <td>21,18 TL</td>
                                        <td>1</td>
                                        <td><strong>21,18 TL</strong></td>
                                    </tr>
                                    <tr>
                                        <td> <h1><i class="bi bi-bag-check-fill"></i></h1></td>
                                        <td>300253</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, dolor!</td>
                                        <td>21,18 TL</td>
                                        <td>1</td>
                                        <td><strong>21,18 TL</strong></td>
                                    </tr>
                                    <tr>
                                        <td> <h1><i class="bi bi-bag-check-fill"></i></h1></td>
                                        <td>300253</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, dolor!</td>
                                        <td>21,18 TL</td>
                                        <td>1</td>
                                        <td><strong>21,18 TL</strong></td>
                                    </tr>
                                    <tr>
                                        <td> <h1><i class="bi bi-bag-check-fill"></i></h1></td>
                                        <td>300253</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, dolor!</td>
                                        <td>21,18 TL</td>
                                        <td>1</td>
                                        <td><strong>21,18 TL</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
