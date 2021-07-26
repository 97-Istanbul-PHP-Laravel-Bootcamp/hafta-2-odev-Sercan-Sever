@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
@endsection

@php
$title = 'Admin Sayfası';
$subTitle = 'Kategori Listesi';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

@section('header', 'Kategori Listesi')

@section('content')
    <div class="col-12 d-flex justify-content-start">
        <a href="{{ route('adminCategoryEdit') }}" class="btn btn-primary me-1 mb-1"><i class="bi bi-plus-circle"></i> Kategori Ekle</a>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Seo Ad</th>
                            <th>Sıra No</th>
                            <th>Durum</th>
                            <th>Eylem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>kategori-seo-ad</td>
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
                            <td>Dale</td>
                            <td>kategori-seo-ad</td>
                            <td>0500 527693</td>
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
                            <td>Nathaniel</td>
                            <td>kategori-seo-ad</td>
                            <td>(012165) 76278</td>
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
                        <tr>
                            <td>Darius</td>
                            <td>kategori-seo-ad</td>
                            <td>0309 690 7871</td>
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
                            <td>Oleg</td>
                            <td>kategori-seo-ad</td>
                            <td>0500 441046</td>
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
                            <td>Kermit</td>
                            <td>kategori-seo-ad</td>
                            <td>(01653) 27844</td>
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
                            <td>Jermaine</td>
                            <td>kategori-seo-ad</td>
                            <td>0800 528324</td>
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
                            <td>Ferdinand</td>
                            <td>kategori-seo-ad</td>
                            <td>(016977) 4107</td>
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
                        <tr>
                            <td>Kuame</td>
                            <td>kategori-seo-ad</td>
                            <td>(0151) 561 8896</td>
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
                            <td>Deacon</td>
                            <td>kategori-seo-ad</td>
                            <td>07740 599321</td>
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
                            <td>Channing</td>
                            <td>kategori-seo-ad</td>
                            <td>0845 46 49</td>
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
                            <td>Aladdin</td>
                            <td>kategori-seo-ad</td>
                            <td>0800 1111</td>
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
                            <td>Cruz</td>
                            <td>kategori-seo-ad</td>
                            <td>07624 944915</td>
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
                            <td>Keegan</td>
                            <td>kategori-seo-ad</td>
                            <td>0800 200103</td>
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
                            <td>Ray</td>
                            <td>kategori-seo-ad</td>
                            <td>(0112) 896 6829</td>
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
                            <td>Maxwell</td>
                            <td>kategori-seo-ad</td>
                            <td>0334 836 4028</td>
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
                            <td>Carter</td>
                            <td>kategori-seo-ad</td>
                            <td>07079 826350</td>
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
                            <td>Stone</td>
                            <td>kategori-seo-ad</td>
                            <td>0800 1111</td>
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
                            <td>Berk</td>
                            <td>kategori-seo-ad</td>
                            <td>(0101) 043 2822</td>
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
                            <td>Philip</td>
                            <td>kategori-seo-ad</td>
                            <td>0500 571108</td>
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
                            <td>Kibo</td>
                            <td>kategori-seo-ad</td>
                            <td>07624 682306</td>
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
                            <td>Bruno</td>
                            <td>kategori-seo-ad</td>
                            <td>07624 869434</td>
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
                            <td>Leonard</td>
                            <td>kategori-seo-ad</td>
                            <td>0800 1111</td>
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
                            <td>Hamilton</td>
                            <td>kategori-seo-ad</td>
                            <td>0800 256 8788</td>
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
                            <td>Harding</td>
                            <td>kategori-seo-ad</td>
                            <td>0800 1111</td>
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
                            <td>Emmanuel</td>
                            <td>kategori-seo-ad</td>
                            <td>(016977) 8208</td>
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
