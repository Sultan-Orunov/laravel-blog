@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-baseline">
                        <h1 class="m-0">Статья</h1>
                        <div class="d-flex justify-content-around align-content-center ml-3">
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="text-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="ml-3 text-success"><i class="fa fa-pen"></i></a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                @csrf @method('delete')
                                <button type="submit" class="border-0 bg-transparent ml-3 text-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Статьи</a></li>
                            <li class="breadcrumb-item active">Отображение</li>
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
                        <table class="table table-bordered table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td><strong>ID</strong></td>
                                <td class="w-100">{{ $post->id }}</td>
                            </tr>
                            <tr>
                                <td><strong>Заголовок</strong></td>
                                <td class="w-100">{{ $post->title }}</td>
                            </tr>
                            <tr>
                                <td><strong>Превью</strong></td>
                                <td class="w-100">
                                    <img class="w-25" src="{{ url('storage/'.$post->preview_image) }}" alt="Preview Image">
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Главное изображение</strong></td>
                                <td class="w-100">
                                    <img class="w-50" src="{{ url('storage/'.$post->main_image) }}" alt="Preview Image">
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Контент</strong></td>
                                <td class="w-100">{!! $post->content !!}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
