@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Категории</li>
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
                    <div class="col-3"></div>
                    <div class="col-6">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Категория</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td class="w-50">{{ $category->title }}</td>
                                <td class="w-auto">
                                    <div class="d-flex justify-content-around align-content-center">
                                        <a href="{{ route('admin.categories.show', $category->id) }}" class="text-info"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-success"><i class="fa fa-pen"></i></a>
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                            @csrf @method('delete')
                                            <button type="submit" class="border-0 bg-transparent text-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-3"></div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
