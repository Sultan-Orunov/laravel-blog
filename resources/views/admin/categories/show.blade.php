@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-baseline">
                        <h1 class="m-0">Категории</h1>
                        <div class="d-flex justify-content-around align-content-center ml-3">
                            <a href="{{ route('admin.categories.show', $category->id) }}" class="text-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="ml-3 text-success"><i class="fa fa-pen"></i></a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                @csrf @method('delete')
                                <button type="submit" class="border-0 bg-transparent ml-3 text-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
                            <li class="breadcrumb-item active">Show</li>
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
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td class="w-50">{{ $category->id }}</td>
                            </tr>
                            <tr>
                                <td>Категория</td>
                                <td class="w-50">{{ $category->title }}</td>
                            </tr>
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
