@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0">Sub Categories</h5>
                    </div>
                </div>
                @if (session('message'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" mt-4 alert alert-{{ session('color') }} alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Sub Category List</h3>
                            </div>
                            <div class="card-body">

                                <div class="mb-4 d-flex justify-content-between">

                                    <div>
                                        <div class="form-inline">
                                            <form action="{{ Request::url() }}">
                                                <input value="{{ Request::get('search') }}" class="form-control"
                                                    placeholder="Search" name="search" type="text">
                                                <button type="submit" class="btn btn-info ml-1"><i class="fa fa-search"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn border-info dropdown-toggle" type="button" id="actions"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="actions">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.enrollment.sub-category.manage') }}">New Sub Category</a>
                                                <a class="dropdown-item" href="#">Export</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table id="categoryTable" class="table table-bordered table-hover w-100">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Main Category</th>
                                                <th>Sub Category</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($categories as $category)
                                                <tr>
                                                    <td class="text-center"><img class="table-img" src="{{ ($category->image)?asset('uploads/sub-category/'.$category->image):asset('default.png') }}" alt=""></td>
                                                    <td>{{ $category->mainCategory->name }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td><span
                                                            class="badge badge-sm badge-{{ config('statusColor.' . strtolower($category->status)) }}">{{ $category->status }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="form-inline">
                                                            <form method="GET"
                                                                action="{{ route('admin.enrollment.sub-category.manage') }}">
                                                                <input type="hidden" name="record_id"
                                                                    value="{{ $category->id }}">
                                                                <button type="submit"
                                                                    class="mx-2 btn btn-sm btn-warning text-white">Edit</button>
                                                            </form>

                                                            <a href="{{ route('admin.enrollment.sub-category.delete', base64_encode($category->id) ) }}"
                                                                class="mx-2 btn btn-sm btn-danger text-white">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center" colspan="6">No Data Available</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Main Category</th>
                                                <th>Sub Category</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-md-4 pt-1">
                                        <p>Showing {{ $categories->firstItem() }}-{{ $categories->count() }} of
                                            {{ $categories->total() }}</p>
                                    </div>
                                    <div class="col-md-8 d-flex flex-row-reverse">
                                        {{ $categories->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Save / Update</h3>
                            </div>
                            <form action="{{ route('admin.enrollment.category.add') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="main_category">Category Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option selected disabled value="0">Select</option>
                                            @foreach (config('categoryTypes') as $typeKey => $type)
                                                <option {{ old('type') == $typeKey ? 'selected' : '' }}
                                                    value="{{ $typeKey }}">{{ $type }}</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="code">Category Code</label>
                                        <input value="{{ old('code') }}" class="form-control" type="text"
                                            name="code" id="code">
                                        @error('code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category Name</label>
                                        <input value="{{ old('category') }}" class="form-control" type="text"
                                            name="category" id="category">
                                        @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="main_category">Main Category</label>
                                        <select class="form-control" name="main_category" id="main_category">
                                            <option selected disabled value="0">Select</option>
                                        </select>
                                        @error('main_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input value="{{ old('slug') }}" class="form-control" type="text"
                                            name="slug" id="slug">
                                        @error('slug')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>

            </div>
        </section>

    </div>
@endsection
