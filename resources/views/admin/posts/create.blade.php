@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление статьи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-50">
                                <input type="text" value="{{ old('title') }}" class="form-control" name="title"
                                       placeholder="Название статьи...">
                                @error('title')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="preview_image" value="{{ old('preview_image') }}" type="file"
                                               class="custom-file-input" id="previewImage">
                                        <label class="custom-file-label" for="previewImage">Выберите превью
                                            изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="main_image" value="{{ old('main_image') }}" type="file"
                                               class="custom-file-input" id="mainImage">
                                        <label class="custom-file-label" for="mainImage">Выберите главное
                                            изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Выберите Категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option
                                            {{ $category->id == old('category_id') ? ' selected' : '' }}
                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                    @error('category_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Выберите тэги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги..." style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                                @error('content')
                                <div class="text-danger">
                                    {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Добавить">
                            </div>
                        </form>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
