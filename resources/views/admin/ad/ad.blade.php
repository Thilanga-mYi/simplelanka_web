@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0">Posts</h5>
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
                                <h3 class="card-title">Post List</h3>
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
                                                    href="{{ route('admin.enrollment.category.manage') }}">New Record</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table id="categoryTable" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Reference</th>
                                                <th>Title</th>
                                                <th>Main Category</th>
                                                <th>Sub Category</th>
                                                <th>Regular Price</th>
                                                <th>Sale Price</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $rec)
                                                <tr>
                                                    <td>#{{ str_pad($rec->id,5,STR_PAD_RIGHT) }}</td>
                                                    <td>{{ $rec->title }}</td>
                                                    <td>{{ $rec->mainCategory->name }}</td>
                                                    <td>{{ $rec->subCategory->name }}</td>
                                                    <td>{{ format_currency($rec->regular_price) }}</td>
                                                    <td>{{ format_currency($rec->sale_price) }}</td>
                                                    <td><span
                                                            class="badge badge-sm badge-{{ config('statusColor.' . strtolower($rec->status)) }}">{{ $rec->status }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="form-inline">
                                                            <form method="GET"
                                                                action="{{ route('admin.ad.approve') }}">
                                                                <input type="hidden" name="record_id"
                                                                    value="{{ base64_encode($rec->id) }}">
                                                                <button type="submit"
                                                                    class="mx-2 btn btn-sm btn-warning text-white">Approve</button>
                                                            </form>

                                                            <a href="{{ route('admin.ad.delete', base64_encode($rec->id) ) }}"
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
                                <div class="row">
                                    <div class="col-md-4 pt-1">
                                        <p>Showing {{ $data->firstItem() }}-{{ $data->count() }} of
                                            {{ $data->total() }}</p>
                                    </div>
                                    <div class="col-md-8 d-flex flex-row-reverse">
                                        {{ $data->links() }}
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
