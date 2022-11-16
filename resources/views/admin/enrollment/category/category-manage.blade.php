@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card card-{{ ($type==1)?'info':'warning' }}">
                            <div class="card-header">
                                <h3 class="card-title">Add New Main Category</h3>
                            </div>
                            <form enctype="multipart/form-data" action="{{ route('admin.enrollment.category.add') }}"
                                method="POST">
                                @csrf
                                <input type="hidden" name="process_type" value="{{ $type }}">
                                <input type="hidden" name="record_id" value="{{ $record_id }}">
                                <div class="card-body">
                                    <div class="row justify-content-start">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="main_category">Category Type {!! required_mark() !!}</label>
                                                <select class="form-control" name="type" id="type">
                                                    <option selected disabled value="0">Select</option>
                                                    @foreach (config('categoryTypes') as $typeKey => $type)
                                                        <option {{ old('type') == $typeKey ? 'selected' : (($data && $data->type==$typeKey)?'selected':'') }}
                                                            value="{{ $typeKey }}">{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                                @error('type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Category Name {!! required_mark() !!}</label>
                                                <input value="{{ old('name') ? old('name') : $data->name ?? '' }}"
                                                    class="form-control" type="text" name="name" id="name">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="slug">Slug {!! required_mark() !!}</label>
                                                <input value="{{ old('slug') ? old('slug') : $data->slug ?? '' }}"
                                                    class="form-control" type="text" name="slug" id="slug">
                                                @error('slug')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            @if ($data && $data->image)
                                                <img class="w-25" src="{{ asset('uploads/category/' . $data->image) }}"
                                                    alt="">
                                            @endif
                                            <div class="form-group">
                                                <label for="exampleInputFile">Category Image</label>
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
                                            <button type="submit" class="btn btn-{{ ($type==1)?'success':'warning' }}">Submit</button>
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
