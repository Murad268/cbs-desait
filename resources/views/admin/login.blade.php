@extends('admin.app')

<div class="login__container">
    <form method="post" action="{{ route('admin__enter') }}">
        @csrf
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" name="email" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" name="password" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <div class="form-check">
                    <input name="remember" class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>
        </div>
        @if(session('error'))
            <div class="mt-2 alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>
</div>
