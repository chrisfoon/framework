@include('public::notifications')
<div class="panel panel-default">
    <div class="panel-heading">Change password  <small>{{ users('name') }}</small></div>
    <div class="panel-body">
      {!!Form::vertical_open()
      ->id('contact')
      ->method('POST')
      ->class('change-password')!!}

      {!! Form::password('old_password')
      -> label(trans('user::user.user.label.current_password'))
      -> placeholder(trans('user::user.user.placeholder.current_password'))!!}

      {!! Form::password('password')
      -> label(trans('user::user.user.label.new_password'))
      -> placeholder(trans('user::user.user.placeholder.new_password'))!!}


      {!! Form::password('password_confirmation')
      -> label(trans('user::user.user.label.new_password_confirmation'))
      -> placeholder(trans('user::user.user.placeholder.new_password_confirmation'))!!}

      {!! Form::submit(trans('user::user.changepword'))->class('btn btn-primary')!!}
      <br>
      <br>

      {!! Form::close() !!}
    </div>
</div>
