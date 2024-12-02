@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
    <div class="sign-in">
        <div class="wrapper">
            <div class="sign-in-page">
                <div class="signin-popup">
                    <div class="signin-pop">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cmp-info">
                                    <div class="cm-logo">
                                        <img src="assets/images/cm-logo.png" alt="">
                                        <p>Workwise, is a global freelancing platform and social networking where businesses
                                            and
                                            independent professionals connect and collaborate remotely</p>
                                    </div>
                                    <img src="assets/images/cm-main-img.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="login-sec">
                                    <ul class="sign-control">
                                        <li data-tab="tab-1" class="current"><a href="#">Sign in</a>
                                        </li>
                                        <li data-tab="tab-2"><a href="#">Sign up</a></li>
                                    </ul>
                                    <div class="sign_in_sec current" id="tab-1">
                                        <h3>Sign in</h3>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="username" placeholder="Username">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="password" placeholder="Password">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c1">
                                                            <label for="c1">
                                                                <span></span>
                                                            </label>
                                                            <small>Remember me</small>
                                                        </div>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" value="submit">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="login-resources">
                                            <h4>Login Via Social Account</h4>
                                            <ul>
                                                <li><a href="#" class="fb"><i class="fa fa-facebook"></i>Login Via
                                                        Facebook</a></li>
                                                <li><a href="#" class="tw"><i class="fa fa-twitter"></i>Login Via
                                                        Twitter</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sign_in_sec" id="tab-2">
                                        <div class="signup-tab">
                                            <i class="fa fa-long-arrow-left"></i>
                                            <h2><a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="640e0b0c0a000b0124011c05091408014a070b09">[email&#160;protected]</a>
                                            </h2>
                                            <ul>
                                                <li data-tab="tab-3" class="current"><a href="#">User</a>
                                                </li>
                                                <li data-tab="tab-4"><a href="#">Company</a></li>
                                            </ul>
                                        </div>
                                        <div class="dff-tab current" id="tab-3">
                                            <form action="signin" method="POST" class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="text" name="name" placeholder="Username">
                                                            <i class="la la-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="email" name="email" placeholder="Email">
                                                            <i class="la la-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="text" name="country" placeholder="Country">
                                                            <i class="la la-globe"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="password" name="password" placeholder="Password">
                                                            <i class="la la-lock"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="password" name="repeat-password"
                                                                placeholder="Repeat Password">
                                                            <i class="la la-lock"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <button type="submit" value="submit">Sign up</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="dff-tab" id="tab-4">
                                            <form action="/signup" method="POST" class="needs-validation" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="text" name="company-name"
                                                                placeholder="Company Name"
                                                                class="form-control @error('company') is-invalid @enderror">
                                                            <i class="la la-building"></i>
                                                            @error('company')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="email" name="email" placeholder="Email"
                                                                class="form-control @error('email') is-invalid @enderror">
                                                            <i class="la la-envelope"></i>
                                                            @error('email')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="text" name="country" placeholder="Country"
                                                                class="form-control @error('country') is-invalid @enderror">
                                                            <i class="la la-globe"></i>
                                                            @error('country')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="password" name="password" placeholder="Password"
                                                                class="form-control @error('password') is-invalid @enderror">
                                                            <i class="la la-lock"></i>
                                                            @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <div class="sn-field">
                                                            <input type="password" name="repeat-password"
                                                                placeholder="Repeat Password"
                                                                class="form-control @error('password_confirmation') is-invalid @enderror">
                                                            <i class="la la-lock"></i>
                                                            @error('password_confirmation')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 no-pdd">
                                                        <button type="submit" value="submit">Sign
                                                            up</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footy-sec">
                    <div class="container">
                        <ul>
                            <li><a href="help-center.html">Help Center</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Community Guidelines</a></li>
                            <li><a href="#">Cookies Policy</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="forum.html">Forum</a></li>
                            <li><a href="#">Language</a></li>
                            <li><a href="#">Copyright Policy</a></li>
                        </ul>
                        <p><img src="assets/images/copy-icon.png" alt="">Copyright 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
