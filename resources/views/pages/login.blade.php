@extends('layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @include('admin._partials.flash')
                    <div class="leave-comment mr0">
                        <h3 class="text-uppercase">Login</h3>
                        <br>
                        <form action="/login" class="form-horizontal contact-form" method="post">
                            @csrf

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
                            <button type="submit" class="btn send-btn">Login</button>
                        </form>
                    </div>
                </div>

                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection