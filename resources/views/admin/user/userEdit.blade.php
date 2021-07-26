@extends('layout.admin')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
@endsection

@php
$title = 'Admin Sayfası';
$subTitle = 'Kullanıcı Ekleme - Düzenleme';
@endphp

@section('title', $title)
@section('subTitle', $subTitle)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">{{ $title }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $subTitle }}</li>
@endsection

@section('header', 'Kullanıcı Ekleme / Düzenleme')

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('adminUserList') }}" class="form form-vertical" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon"><strong>Adı Soyadı *</strong></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Adınız Soyadınız *" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon"><strong>Kullanıcı Adı *</strong></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Kullanıcı Adınız *" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon"><strong>E-Posta *</strong></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="E-Posta Hesabınız *" id="email-id-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="mobile-id-icon"><strong>Adres</strong></label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Adres Bilginiz" id="mobile-id-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-geo-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon"><strong>Şifre *</strong></label>
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="Şifreniz *" id="password-id-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class='form-check'>
                                                <div class="checkbox mt-2">
                                                    <input type="checkbox" id="remember-me-v" class='form-check-input' checked>
                                                    <label for="remember-me-v"><strong>Aktiflik</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet / Düzenle <i class="bi bi-patch-check-fill"></i></button>
                                        </div>
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
