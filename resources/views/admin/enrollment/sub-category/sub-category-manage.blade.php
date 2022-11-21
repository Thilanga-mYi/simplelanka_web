@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card card-{{ $type == 1 ? 'info' : 'warning' }}">
                            <div class="card-header">
                                <h3 class="card-title">Add New Main Category</h3>
                            </div>
                            <form enctype="multipart/form-data" action="{{ route('admin.enrollment.sub-category.add') }}"
                                method="POST">
                                @csrf
                                <input type="hidden" name="process_type" value="{{ $type }}">
                                <input type="hidden" name="record_id" value="{{ $record_id }}">
                                <div class="card-body">
                                    <div class="row justify-content-start">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="main_category">Main Category {!! required_mark() !!}</label>
                                                <select class="form-control" name="main_category" id="main_category">
                                                    <option selected disabled value="0">Select</option>
                                                    @foreach ($mainCategories as $value)
                                                        <option
                                                            {{ old('main_category') == $value->id ? 'selected' : ($data && $data->main_category_id == $value->id ? 'selected' : '') }}
                                                            value="{{ $value->id }}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Sub Category Name {!! required_mark() !!}</label>
                                                <input value="{{ old('name') ? old('name') : $data->name ?? '' }}"
                                                    class="form-control" type="text" name="name" id="name">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @if ($data && $data->image)
                                                <img class="w-25" src="{{ asset('uploads/sub-category/' . $data->image) }}"
                                                    alt="">
                                            @endif
                                            <div class="form-group">
                                                <label for="exampleInputFile">Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input"
                                                            id="image">
                                                        <label class="custom-file-label" for="image">Choose
                                                            file</label>
                                                    </div>
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button type="submit"
                                                class="btn btn-{{ $type == 1 ? 'success' : 'warning' }}">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
