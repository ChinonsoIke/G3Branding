@extends('backend.auth.layouts.default')
@section('title','Already have an account? Login!')

@section('content')
<div class="animate form login_form">
    <section class="login_content">
        @include('backend.includes.alert')
        <form method="post" action="{{ route('admin.login') }}" novalidate>
            @csrf
            <h1>Login as Administrator</h1>
            <div>
                <input type="text" name="email" class="form-control" placeholder="Email Address" required/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required/>
            </div>
            <div>
                <button type="submit" class="btn btn-info submit"> Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">Are you lost?
                    <a href="{{ url('/') }}" class="to_register"> Back to Home</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                    <h1>GMS TRAVEL</h1>
                    <p>Copyright ©{{ now()->format('Y') }}.</p>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection
