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
                <form action="{{ route('users.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group {!! ($errors->has('name')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Имя</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group {!! ($errors->has('email')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Почта</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group {!! ($errors->has('password')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group {!! ($errors->has('avatar')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Аватар</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder=""
                                   name="avatar" value="{{ old('avatar') }}">
                            @if ($errors->has('avatar'))
                                <span class="help-block">{{ $errors->first('avatar') }}</span>
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