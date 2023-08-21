@extends('layouts.layout1')
@section('title', 'Show Categories')
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
    <div class="row">
        <div class="col-md-9">
            <h2>All Categories</h2>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/admin/categories') }}" class="btn btn-primary">Back to all categories</a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <tr>
                <td style="background-color: #f3f3f3">ID</td>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td style="background-color: #f3f3f3">Name</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td style="background-color: #f3f3f3">Detail</td>
                <td>{{ $category->detail }}</td>
            </tr>
            <tr>
                <td style="background-color: #f3f3f3">Status</td>
                <td>{{ $category->status === 1 ? "Active" : "Not Active" }}</td>
            </tr>
            <tr>
                <td style="background-color: #f3f3f3">Created At</td>
                <td>{{ $category->created_at }}</td>
            </tr>
            <tr>
                <td style="background-color: #f3f3f3">Actions</td>
                <td>
                    <a href="{{ url('admin/categories/edit/' . $category->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ url('admin/categories/delete/' . $category->id) }}" class="btn btn-danger" onclick="return confirm('Confirm your action?')">Delete</a>
                </td>
            </tr>
        </table>
    </div>
@endsection

@section('footer')
    <footer class="footer">
        <p>&copy; Book Store 2023</p>
    </footer>
@endsection
