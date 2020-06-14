
@extends("layouts.login-layout")
@section('title', "login")

@section('content')
    <section id="wrapper">
        <div class="login-register"  style="background-image:url({{asset("/images/bg.jpg")}})">
            <div class="login-box card">
                <div class="card-block">

                    <div style="margin-top: 30px">
                        <a href="javascript:void(0)" class="text-center db">
                            <img width="120px" height="120px" src=" {{ asset("images/logo.jpeg") }}" alt="Home" /><br/>
                            <h3>Pizza Online</h3>
                        </a>
                    </div>
                    <h2 style="text-align: center"> {{ "Pizza online" }}</h2>
                    <hr/>
                    @if ($errors->has('username'))
                        <span class="help-block text-danger"><strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                    <form class="form-horizontal " id="loginform" method="post" action="{{ route('login') }}">
                        @csrf
                        <h4 class="box-title ">Login to panel </h4>

                        <div class="form-group  ">
                            <div class="col-xs-12">
                                <input class="form-control @error('username') is-invalid @enderror"  id="username"
                                       name="username" value="{{ old('username') }}"  type="text" required="" placeholder="username"> </div>

                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control  @error('password') is-invalid @enderror" id="password"
                                       name="password" type="password" required="" placeholder="password"> </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                    {{--   </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> </a> </div>--}}
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>

@endsection
