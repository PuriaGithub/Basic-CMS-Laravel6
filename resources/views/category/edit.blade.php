@extends('dashboard.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($category->cover) }}" alt="{{ $category->name  }}">
                <div class="card-header">Edit Category
                    <div class="float-right">
                        <form action="{{ route('categories.destroy', compact('category')) }}" method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remove" class="btn btn-sm btn-outline-danger">
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update', compact('category')) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="from-group mt-2">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="" alt="cover image preview" class="img-fluid d-none" id="img-preview">
                            </div>
                            <label for="cover_image">Cover Image</label>
                            <input type="file" name="cover" class="form-control" id="img-input">
                            @error('cover')
                                <small class="text-danger">{{$message}}</small>
                            @enderror 
                        </div>
                        <input type="submit" value="Update" class="mt-3 btn btn-block btn-outline-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @include('script.remove-confirmation')
    @include('script.image-preview')
@endpush