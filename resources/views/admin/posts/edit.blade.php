@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Редактировать пост
                <small>бла бла ...</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Редактировать</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Изменяем сущность</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('posts.update', $post) }}" method="POST"
                      accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group {!! ($errors->has('title')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   name="title" value="{{ old('title', $post->title) }}">
                            @if ($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group {!! ($errors->has('image')) ? 'has-error' : '' !!}">
                            <img src="{{ $post->getImage() }}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputEmail1">Картинка</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder=""
                                   name="image" value="{{ old('image', $post->image) }}">
                            @if ($errors->has('image'))
                                <span class="help-block">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            <select class="form-control select2" style="width: 100%;" name="category_id">
                                @foreach($categories as $id => $title)
                                    <option value="{{ $id }}"
                                            @if($id == $post->getCategoryID())
                                            selected="selected"
                                            @endif
                                    >{{ $title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Теги</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                    style="width: 100%;" name="tags[]" id="tags">
                                @foreach($tags as $id => $title)
                                    {!! old('tags') !!}
                                    <option value="{{ $id }}" {{ (collect(old('tags'))->contains($id)) ? 'selected="selected"' : '' }}
                                    >{{ $title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group {!! ($errors->has('date')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Дата:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" placeholder=""
                                       name="date" value="{{ old('date', $post->date) }}">
                            </div>
                            @if ($errors->has('date'))
                                <span class="help-block">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="" name="is_featured"
                                        {{ old('is_featured', $post->is_featured) == 1 ? 'checked' : '' }}>
                                Рекомендовать
                            </label>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="" name="status"
                                        {{ old('status', $post->status) == 1 ? 'checked' : '' }}>
                                Опубликован
                            </label>
                        </div>
                        <div class="form-group {!! ($errors->has('description')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea class="form-control" id="" cols="30" rows="10" name="description">
                                {{ old('description', $post->description) }}
                            </textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group {!! ($errors->has('content')) ? 'has-error' : '' !!}">
                            <label for="exampleInputEmail1">Полный текст</label>
                            <textarea class="form-control" id="" cols="30" rows="10" name="content">
                                {{ old('content', $post->content) }}
                            </textarea>
                            @if ($errors->has('content'))
                                <span class="help-block">{{ $errors->first('content') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-default">Назад</button>
                        <button class="btn btn-success pull-right" type="submit">Обновить</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection