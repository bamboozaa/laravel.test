@extends('layouts.layout1')
@section('title', 'Edit Category')
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
            <h2>Update Category</h2>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/admin/categories') }}" class="btn btn-primary">Back to all categories</a>
        </div>
    </div>
    <div class="row">
        <form action="{{ url('admin/categories/update/' . $category->id) }}" method="post">
            {{ csrf_field() }}
            <table class="table">
                <tr>
                    <td style="backgroud-color: #f3f3f3">Name</td>
                    <td><input type="text" name="name" id="cat_name" class="form-control" value="{{ $category->name }}"></td>
                </tr>
                <tr>
                    <td style="backgroud-color: #f3f3f3">Detail</td>
                    <td><textarea name="detail" id="cat_detail" cols="30" rows="10" class="form-control">{{ $category->detail }}</textarea></td>
                </tr>
                <tr>
                    <td style="backgroud-color: #f3f3f3">Status</td>
                    <td>
                        <select name="status" id="cat_status" class="form-control">
                            <option value="0" {{ $category->status === 0 ? "selected" : "" }}>Not Active</option>
                            <option value="1" {{ $category->status === 1 ? "selected" : "" }}>Active</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="backgroud-color: #f3f3f3"></td>
                    <td>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ url('admin/categories') }}" class="btn btn-danger">Cancel</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection

@section('footer')
    <footer class="footer">
        <p>&copy; Book Store 2023</p>
    </footer>
@endsection
