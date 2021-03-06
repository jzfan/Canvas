@extends('backend.profile.layout')

@section('title')
    <title>{{ config('blog.title') }} | Edit Privacy</title>
@stop

@section('profile-content')
  @parent

  <div class="pmb-block">
      <div class="pmbb-header">
          <h2><i class="zmdi zmdi-shield-security m-r-10"></i> Change Password</h2>
      </div>

      <div class="pmbb-body p-l-30">
          @include('backend.profile.partials.form.password')
      </div>
  </div>
@stop

@section('unique-js')
    {!! JsValidator::formRequest('App\Http\Requests\PasswordUpdateRequest', '#passwordUpdate'); !!}

    @if(Session::get('_passwordUpdate'))
        @include('backend.profile.partials.notifications.update-password')
        {{ \Session::forget('_passwordUpdate') }}
    @endif
@stop