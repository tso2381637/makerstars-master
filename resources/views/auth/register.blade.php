<h2 class="text-uppercase">建立您的創坑帳戶</h2>

<p class="lead">還沒有註冊創坑帳戶？</p>
<p>馬上快速註冊</p>
<p class="text-muted">有任何問題請馬上<a href="contact.html">聯絡</a>我們</p>

<hr>
<form role="form" method="POST" action="{{ url('/register') }}">
{!! csrf_field() !!}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name-login">您的名稱</label>
      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
      @if ($errors->has('name'))
          <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif
  </div>
  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email-login">電子郵件</label>
      <input type="text" class="form-control" name="email" value="{{ old('email') }}">
      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
  </div>
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password-login">建立密碼</label>
      <input type="password" class="form-control" name="password">
      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
  </div>
  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <label for="confirm-password-login">確認密碼</label>
      <input type="password" class="form-control" name="password_confirmation">
      @if ($errors->has('password_confirmation'))
          <span class="help-block">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
      @endif
  </div>
  <div class="text-center">
      <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i> Register</button>
  </div>

</form>
