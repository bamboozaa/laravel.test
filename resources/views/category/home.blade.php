@extends('layouts.layout1')
@section('title', 'Home Categories')
{{-- @section('header')
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
@endsection --}}

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h2>All Categories</h2>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/admin/categories/new') }}" class="btn btn-primary">New Category</a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <tr style="background-color: #f3f3f3">
                <td>ID</td>
                <td>ICON</td>
                <td>Name</td>
                <td>Detail</td>
            </tr>
            @if (count($categories) > 0)
            @foreach ($categories as $key => $category)
            <tr>
                <td>{{ $key+1 }}</td>
                <td><img src="{{ url(isset($category->caticon['icon']) ? "uploads/images/" . $category->caticon['icon'] : "images/nophoto.jpg") }}" height="100" alt=""></td>
                <td><a href="{{ url('admin/categories/show/' . $category->id) }}">{{ $category->name }}</a></td>
                <td>{{ $category->detail }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3"></td>
            </tr>
            @endif

        </table>
    </div>

@endsection

@section('footer')
    <footer class="footer">
        <p>&copy; Book Store 2023</p>
    </footer>


@endsection
