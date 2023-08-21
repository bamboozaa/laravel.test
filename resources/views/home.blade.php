@extends('layouts.layout1')
@section('title', 'Welcome to my Homepage')
@section('header')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyApp Books Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">สินค้าทั้งหมด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ตะกร้าสินค้า</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">ยินดีต้อนรับสู่ร้าน MyApp Book Store</h1>
        <p class="col-md-8 fs-4">ศูนย์รวมหนังสือ และศึกษาหาความรู้</p>
        {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
    </div>
@endsection

@section('footer')
    <footer class="footer">
        <p>&copy; Book Store 2023</p>
    </footer>
@endsection
