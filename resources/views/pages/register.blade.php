@extends('layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="leave-comment mr0">
                        <h3 class="text-uppercase">Register</h3>
                        <br>
                        <form action="/register" class="form-horizontal contact-form" method="post">
                            @csrf
                            <div class="form-group {!! ($errors->has('name')) ? 'has-error' : '' !!}">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                       name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group {!! ($errors->has('email')) ? 'has-error' : '' !!}">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                       name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group {!! ($errors->has('password')) ? 'has-error' : '' !!}">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" placeholder=""
                                       name="password" value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn send-btn">Register</button>
                        </form>
                    </div>
                </div>

                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection