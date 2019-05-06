@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Листинг сущности</h3>
                        </div>
                        <!-- /.box-header -->

                        @include('admin._partials.flash')

                        <div class="box-body">
                            <div class="form-group">
                                <a href="{{ route('subscribers.create') }}" class="btn btn-success">Добавить</a>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Почта</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subscribers as $subscriber)
                                    <tr>
                                        <td>{{ $subscriber->id }}</td>
                                        <td>{{ $subscriber->email }}</td>
                                        <td>
{{--                                            <a href="{{ route('subscribers.edit', $subscriber) }}" class="fa fa-pencil"></a>--}}
                                            <form action="{{ route('subscribers.destroy', $subscriber) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('вы уверенны?');" type="submit" class="delete">
                                                    <i class="fa fa-remove"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Почта</th>
                                    <th>Действия</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
