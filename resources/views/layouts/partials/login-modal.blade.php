<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">登入/註冊創坑</h4>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['route' => 'Auth.process','method' => 'POST', 'class' => 'form-group'])!!}
                        <div class='col-md-12'>
                        <div class="row control-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                {!! Form::label('username', '帳號') !!}
                                {!! Form::email('username', null, ['name' => 'username', 'class' => 'form-control', 'placeholder' => '帳號', 'data-validation-required-message' => 'email', 'required']) !!}
                                <p class="help-block text-danger"></p>
                        </div>
                        <div class="row control-group">
                                {!! Form::label('password', '密碼') !!}
                                {!! Form::password('password', ['name' => 'password', 'class' => 'form-control', 'placeholder' => '密碼', 'data-validation-required-message' => '請輸入密碼', 'required']) !!}
                                <p class="help-block text-danger"></p>
                        </div>

                        <div class="row control-group">
                            <div class="form-group floating-label-form-group controls">
                                {!! Form::submit('登入',['class' => 'btn btn-primary btn-block btn-lg']) !!}
                                <p class="help-block text-danger"></p>
                                {!! Form::close() !!}
                                <a class="btn btn-block btn-social btn-lg btn-google" href="{{ url('/auth/google') }}"><i class="fa fa-google"></i>Sign in with Google</a>
                            </div>
                        </div>
                      </div>

                        <p class="text-center text-muted">尚未註冊？</p>
                        <p class="text-center text-muted"><a href="{{ url('signup') }}"><strong>現在註冊！</strong></a> 簡單快速只要 1 分鐘就能完成註冊，馬上註冊開始使用創坑！</p>

                    </div>
                </div>
            </div>
        </div>
