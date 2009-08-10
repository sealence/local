<?php /* Smarty version 2.6.20, created on 2009-08-04 18:16:04
         compiled from /var/www/prestashop/themes/prestashop/authentication.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/themes/prestashop/authentication.tpl', 1, false),array('modifier', 'intval', '/var/www/prestashop/themes/prestashop/authentication.tpl', 6, false),array('modifier', 'escape', '/var/www/prestashop/themes/prestashop/authentication.tpl', 12, false),array('modifier', 'stripslashes', '/var/www/prestashop/themes/prestashop/authentication.tpl', 41, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Login'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
// <![CDATA[
idSelectedCountry = <?php if (isset ( $_POST['id_state'] )): ?><?php echo ((is_array($_tmp=$_POST['id_state'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php else: ?>false<?php endif; ?>;
countries = new Array();
<?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country']):
?>
	<?php if (isset ( $this->_tpl_vars['country']['states'] )): ?>
		countries[<?php echo ((is_array($_tmp=$this->_tpl_vars['country']['id_country'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
] = new Array();
		<?php $_from = $this->_tpl_vars['country']['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['states'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['states']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['state']):
        $this->_foreach['states']['iteration']++;
?>
			countries[<?php echo ((is_array($_tmp=$this->_tpl_vars['country']['id_country'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
]['<?php echo ((is_array($_tmp=$this->_tpl_vars['state']['id_state'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
'] = '<?php echo ((is_array($_tmp=$this->_tpl_vars['state']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
';
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
//]]>
</script>

<h2><?php if (! isset ( $this->_tpl_vars['email_create'] )): ?><?php echo smartyTranslate(array('s' => 'Log in'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Create your account'), $this);?>
<?php endif; ?></h2>

<?php $this->assign('current_step', 'login'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (isset ( $this->_tpl_vars['confirmation'] )): ?>
	<div class="confirmation">
		<p class="success"><?php echo smartyTranslate(array('s' => 'Your account has been successfully created.'), $this);?>
</p>
		<p>
			<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.gif" alt="<?php echo smartyTranslate(array('s' => 'Your account'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Your account'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Access your account'), $this);?>
</a>
		</p>
	</div>
<?php else: ?>
	<?php if (! isset ( $this->_tpl_vars['email_create'] )): ?>
		<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" method="post" id="create-account_form" class="std">
			<fieldset>
				<h3><?php echo smartyTranslate(array('s' => 'Create your account'), $this);?>
</h3>
				<h4><?php echo smartyTranslate(array('s' => 'Enter your e-mail address to create your account'), $this);?>
.</h4>
				<p class="text">
					<label for="email_create"><?php echo smartyTranslate(array('s' => 'E-mail address'), $this);?>
</label>
					<span><input type="text" id="email_create" name="email_create" value="<?php if (isset ( $_POST['email_create'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['email_create'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" class="account_input" /></span>
				</p>
				<p class="submit">
				<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" class="hidden" name="back" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['back'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php endif; ?>
					<input type="submit" id="SubmitCreate" name="SubmitCreate" class="button_large" value="<?php echo smartyTranslate(array('s' => 'Create your account'), $this);?>
" />
					<input type="hidden" class="hidden" name="SubmitCreate" value="<?php echo smartyTranslate(array('s' => 'Create your account'), $this);?>
" />
				</p>
			</fieldset>
		</form>
		<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" method="post" id="login_form" class="std">
			<fieldset>
				<h3><?php echo smartyTranslate(array('s' => 'Already registered ?'), $this);?>
</h3>
				<p class="text">
					<label for="email"><?php echo smartyTranslate(array('s' => 'E-mail address'), $this);?>
</label>
					<span><input type="text" id="email" name="email" value="<?php if (isset ( $_POST['email'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" class="account_input" /></span>
				</p>
				<p class="text">
					<label for="passwd"><?php echo smartyTranslate(array('s' => 'Password'), $this);?>
</label>
					<span><input type="password" id="passwd" name="passwd" value="<?php if (isset ( $_POST['passwd'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['passwd'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" class="account_input" /></span>
				</p>
				<p class="submit">
					<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" class="hidden" name="back" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['back'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php endif; ?>
					<input type="submit" id="SubmitLogin" name="SubmitLogin" class="button" value="<?php echo smartyTranslate(array('s' => 'Log in'), $this);?>
" />
				</p>
				<p class="lost_password"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
password.php"><?php echo smartyTranslate(array('s' => 'Forgot your password?'), $this);?>
</a></p>
			</fieldset>
		</form>
	<?php else: ?>
	<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" method="post" id="account-creation_form" class="std">
		<fieldset class="account_creation">
			<h3><?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
</h3>
			<p class="radio required">
				<span><?php echo smartyTranslate(array('s' => 'Title'), $this);?>
</span>
				<input type="radio" name="id_gender" id="id_gender1" value="1" <?php if (isset ( $_POST['id_gender'] ) && $_POST['id_gender'] == 1): ?>checked="checked"<?php endif; ?> />
				<label for="id_gender1" class="top"><?php echo smartyTranslate(array('s' => 'Mr.'), $this);?>
</label>
				<input type="radio" name="id_gender" id="id_gender2" value="2" <?php if (isset ( $_POST['id_gender'] ) && $_POST['id_gender'] == 2): ?>checked="checked"<?php endif; ?> />
				<label for="id_gender2" class="top"><?php echo smartyTranslate(array('s' => 'Ms.'), $this);?>
</label>
			</p>
			<p class="required text">
				<label for="customer_firstname"><?php echo smartyTranslate(array('s' => 'First name'), $this);?>
</label>
				<input onkeyup="$('#firstname').val(this.value);" type="text" class="text" id="customer_firstname" name="customer_firstname" value="<?php if (isset ( $_POST['customer_firstname'] )): ?><?php echo $_POST['customer_firstname']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="required text">
				<label for="customer_lastname"><?php echo smartyTranslate(array('s' => 'Last name'), $this);?>
</label>
				<input onkeyup="$('#lastname').val(this.value);" type="text" class="text" id="customer_lastname" name="customer_lastname" value="<?php if (isset ( $_POST['customer_lastname'] )): ?><?php echo $_POST['customer_lastname']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="required text">
				<label for="email"><?php echo smartyTranslate(array('s' => 'E-mail'), $this);?>
</label>
				<input type="text" class="text" id="email" name="email" value="<?php if (isset ( $_POST['email'] )): ?><?php echo $_POST['email']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="required password">
				<label for="password"><?php echo smartyTranslate(array('s' => 'Password'), $this);?>
</label>
				<input type="password" class="text" name="passwd" id="passwd" />
				<sup>*</sup>
				<span class="form_info"><?php echo smartyTranslate(array('s' => '(5 characters min.)'), $this);?>
</span>
			</p>
			<p class="select">
				<span><?php echo smartyTranslate(array('s' => 'Birthday'), $this);?>
</span>
				<select id="days" name="days">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_day'] == $this->_tpl_vars['day'] )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
								<select id="months" name="months">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['month']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['k'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_month'] == $this->_tpl_vars['k'] )): ?> selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => ($this->_tpl_vars['month'])), $this);?>
&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<select id="years" name="years">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_year'] == $this->_tpl_vars['year'] )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</p>
			<p class="checkbox" >
				<input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if (isset ( $_POST['newsletter'] ) && $_POST['newsletter'] == 1): ?> checked="checked"<?php endif; ?> />
				<label for="newsletter"><?php echo smartyTranslate(array('s' => 'Sign up for our newsletter'), $this);?>
</label>
			</p>
			<p class="checkbox" >
				<input type="checkbox"name="optin" id="optin" value="1" <?php if (isset ( $_POST['optin'] ) && $_POST['optin'] == 1): ?> checked="checked"<?php endif; ?> />
				<label for="optin"><?php echo smartyTranslate(array('s' => 'Receive special offers from our partners'), $this);?>
</label>
			</p>
		</fieldset>
		<fieldset class="account_creation">
			<h3><?php echo smartyTranslate(array('s' => 'Your address'), $this);?>
</h3>
			<p class="text">
				<label for="company"><?php echo smartyTranslate(array('s' => 'Company'), $this);?>
</label>
				<input type="text" class="text" id="company" name="company" value="<?php if (isset ( $_POST['company'] )): ?><?php echo $_POST['company']; ?>
<?php endif; ?>" />
			</p>
			<p class="required text">
				<label for="firstname"><?php echo smartyTranslate(array('s' => 'First name'), $this);?>
</label>
				<input type="text" class="text" id="firstname" name="firstname" value="<?php if (isset ( $_POST['firstname'] )): ?><?php echo $_POST['firstname']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="required text">
				<label for="lastname"><?php echo smartyTranslate(array('s' => 'Last name'), $this);?>
</label>
				<input type="text" class="text" id="lastname" name="lastname" value="<?php if (isset ( $_POST['lastname'] )): ?><?php echo $_POST['lastname']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="required text">
				<label for="address1"><?php echo smartyTranslate(array('s' => 'Address'), $this);?>
</label>
				<input type="text" class="text" name="address1" id="address1" value="<?php if (isset ( $_POST['address1'] )): ?><?php echo $_POST['address1']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="text">
				<label for="address2"><?php echo smartyTranslate(array('s' => 'Address (2)'), $this);?>
</label>
				<input type="text" class="text" name="address2" id="address2" value="<?php if (isset ( $_POST['address2'] )): ?><?php echo $_POST['address2']; ?>
<?php endif; ?>" />
			</p>
			<p class="required text">
				<label for="postcode"><?php echo smartyTranslate(array('s' => 'Postal code / Zip code'), $this);?>
</label>
				<input type="text" class="text" name="postcode" id="postcode" value="<?php if (isset ( $_POST['postcode'] )): ?><?php echo $_POST['postcode']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="required text">
				<label for="city"><?php echo smartyTranslate(array('s' => 'City'), $this);?>
</label>
				<input type="text" class="text" name="city" id="city" value="<?php if (isset ( $_POST['city'] )): ?><?php echo $_POST['city']; ?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
			<p class="required select">
				<label for="id_country"><?php echo smartyTranslate(array('s' => 'Country'), $this);?>
</label>
				<select name="id_country" id="id_country">
					<option value="">-</option>
					<?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
					<option value="<?php echo $this->_tpl_vars['v']['id_country']; ?>
" <?php if (( $this->_tpl_vars['sl_country'] == $this->_tpl_vars['v']['id_country'] )): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<sup>*</sup>
			</p>
			<p class="required id_state select">
				<label for="id_state"><?php echo smartyTranslate(array('s' => 'State'), $this);?>
</label>
				<select name="id_state" id="id_state">
					<option value="">-</option>
				</select>
				<sup>*</sup>
			</p>
			<p class="textarea">
				<label for="other"><?php echo smartyTranslate(array('s' => 'Additional information'), $this);?>
</label>
				<textarea name="other" id="other" cols="26" rows="3"><?php if (isset ( $_POST['other'] )): ?><?php echo $_POST['other']; ?>
<?php endif; ?></textarea>
			</p>
			<p class="text">
				<label for="phone"><?php echo smartyTranslate(array('s' => 'Home phone'), $this);?>
</label>
				<input type="text" class="text" name="phone" id="phone" value="<?php if (isset ( $_POST['phone'] )): ?><?php echo $_POST['phone']; ?>
<?php endif; ?>" />
			</p>
			<p class="text">
				<label for="phone_mobile"><?php echo smartyTranslate(array('s' => 'Mobile phone'), $this);?>
</label>
				<input type="text" class="text" name="phone_mobile" id="phone_mobile" value="<?php if (isset ( $_POST['phone_mobile'] )): ?><?php echo $_POST['phone_mobile']; ?>
<?php endif; ?>" />
			</p>
			<p class="required text" id="address_alias">
				<label for="alias"><?php echo smartyTranslate(array('s' => 'Assign an address title for future reference'), $this);?>
 !</label>
				<input type="text" class="text" name="alias" id="alias" value="<?php if (isset ( $_POST['alias'] )): ?><?php echo $_POST['alias']; ?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'My address'), $this);?>
<?php endif; ?>" />
				<sup>*</sup>
			</p>
		</fieldset>
		<?php echo $this->_tpl_vars['HOOK_CREATE_ACCOUNT_FORM']; ?>

		<p class="cart_navigation required submit">
			<input type="hidden" name="email_create" value="1" />
			<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" class="hidden" name="back" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['back'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php endif; ?>
			<input type="submit" name="submitAccount" id="submitAccount" value="<?php echo smartyTranslate(array('s' => 'Register'), $this);?>
" class="exclusive" />
			<span><sup>*</sup><?php echo smartyTranslate(array('s' => 'Required field'), $this);?>
</span>
		</p>

	</form>
	<?php endif; ?>
<?php endif; ?>