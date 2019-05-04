@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить категорию
                <small>бла бла ...</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Добавить</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                    <div class="box-header with-border">
                            <h3 class="box-title">Добавляем сущность</h3>
                    </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('tags.store') }}" method="POST" accept-charset="UTF-8">
                    @csrf
                    <div class="box-body">
                        <div class="form-group {!! ($errors->has('title')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title">
                            @if ($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-default">Назад</button>
                        <button class="btn btn-success pull-right" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection