@extends('layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="leave-comment mr0">

                        @include('admin._partials.flash')

                        <h3 class="text-uppercase">Профиль</h3>
                        <br>
                        <img src="{{ $user->getImage() }}" alt="" width="100">
                        <form action="/profile" class="form-horizontal contact-form"
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group {!! ($errors->has('name')) ? 'has-error' : '' !!}">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                       name="name" value="{{ $user->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group {!! ($errors->has('email')) ? 'has-error' : '' !!}">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                       name="email" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group {!! ($errors->has('password')) ? 'has-error' : '' !!}">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" placeholder=""
                                       name="password" value="">
                                @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group {!! ($errors->has('avatar')) ? 'has-error' : '' !!}">
                                <label for="exampleInputEmail1">Аватар</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" placeholder=""
                                       name="avatar" value="{{ $user->getImage() }}">
                                @if ($errors->has('avatar'))
                                    <span class="help-block">{{ $errors->first('avatar') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn send-btn">Сохранить</button>
                        </form>
                    </div>
                </div>

                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection