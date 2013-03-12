<div class="hero-unit raised outline" id="login-form">
	<div class="outline_inner">
	<?php
		echo HTML::image( ADMIN_RESOURCES . 'images/logo-color.png');
	?>
	<hr />
	<?php if( is_array( $install_data)): ?>
	<div class="alert alert-info">
		<h5><?php echo __('KodiCMS succefully installed!'); ?></h5>
		<ul>
			<li><?php echo __('Login: :login', array(':login' => Arr::get($install_data, 'username'))); ?></li>
			<li><?php echo __('Password: :password', array(':login' => Arr::get($install_data, 'password_field'))); ?></li>
		</ul>
	</div>
	<?php endif; ?>

	<?php echo Form::open( Route::get('user')->uri(array('action' => 'login') ), array(
		'method' => 'post', 'class' => 'form-vertical'
	) ); ?>

	<?php echo Form::hidden( 'token', Security::token() ); ?>

	<div class="control-group">
		<div class="input-prepend">
			<span class="add-on"><i class="icon-user"></i></span>
			<input class="login-field" type="text" id="username" name="login[username]" value="">
		</div>
	</div>

	<div class="control-group">
		<div class="input-prepend  input-append">
			<span class="add-on">
				<i class="icon-lock"></i>
			</span>
			<input class="login-field" type="password" id="password" name="login[password]" value="">
			<?php echo HTML::anchor(ADMIN_DIR_NAME . '/login/forgot', __('Forgot password?'), array('class' => 'btn btn-large btn-link')); ?>
		</div>
	</div>

	<div class="control-group">
		<label class="checkbox">
			<input name="login[remember]" type="checkbox" value="checked" tabindex="4">
			<?php echo __('Remember me for :num days', array(':num' => Kohana::$config->load('auth.lifetime') / 60 / 60 / 24 )); ?>
		</label>
	</div>

	<hr />
	
	<?php Observer::notify('admin_login_form'); ?>

	<?php echo Form::button('sign-in', __('Login') . UI::icon('chevron-right'), array(
		'class' => 'btn btn-large'
	)); ?>
	
	<div class="clearfix"></div>

	<?php echo Form::close(); ?>
	
	<?php Observer::notify('admin_login_form_after_button'); ?>
	</div>
</div>