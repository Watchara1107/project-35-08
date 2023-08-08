@extends('layouts.masterauthen')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="{{ asset('backend/assets/images/logo.png') }}">
                            </div>
                            <h4>Hello Sign Up</h4>
                            <h6 class="font-weight-light">Sign up to continue.</h6>
                            <form class="pt-3" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-lg"
                                        id="exampleInputEmail1" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        id="exampleInputEmail1" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password Confirm">
                                </div>

                                <div class="mt-3">
                                    <input type="submit"
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        value="SIGN UP">
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    
                                <div class="text-center mt-4 font-weight-light"> Go To ? <a
                                        href="{{ route('login') }}" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
