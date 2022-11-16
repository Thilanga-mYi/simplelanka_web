@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0">Categories</h5>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Category List</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Code</th>
                                                <th>Main Category</th>
                                                <th>Sub Category</th>
                                                <th>Slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>C001</td>
                                                <td>-</td>
                                                <td>Electronics</td>
                                                <td>~ electronics</td>
                                                <td>
                                                    <button class="mx-2 btn btn-sm btn-warning text-white">Edit</button>
                                                    <button class="mx-2 btn btn-sm btn-danger text-white">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Code</th>
                                                <th>Main Category</th>
                                                <th>Sub Category</th>
                                                <th>Slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
