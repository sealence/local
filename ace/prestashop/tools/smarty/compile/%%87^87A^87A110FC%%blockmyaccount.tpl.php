<?php /* Smarty version 2.6.20, created on 2009-07-15 16:34:33
         compiled from /home/sealence/local/ace/prestashop/modules/blockmyaccount/blockmyaccount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/modules/blockmyaccount/blockmyaccount.tpl', 3, false),)), $this); ?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<h4><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'blockmyaccount'), $this);?>
</a></h4>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php" title=""><?php echo smartyTranslate(array('s' => 'My orders','mod' => 'blockmyaccount'), $this);?>
</a></li>
			<?php if ($this->_tpl_vars['returnAllowed']): ?>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-follow.php" title=""><?php echo smartyTranslate(array('s' => 'My merchandise returns','mod' => 'blockmyaccount'), $this);?>
</a></li>
			<?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-slip.php" title=""><?php echo smartyTranslate(array('s' => 'My credit slips','mod' => 'blockmyaccount'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
addresses.php" title=""><?php echo smartyTranslate(array('s' => 'My addresses','mod' => 'blockmyaccount'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" title=""><?php echo smartyTranslate(array('s' => 'My personal info','mod' => 'blockmyaccount'), $this);?>
</a></li>
			<?php if ($this->_tpl_vars['voucherAllowed']): ?>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
discount.php" title=""><?php echo smartyTranslate(array('s' => 'My vouchers','mod' => 'blockmyaccount'), $this);?>
</a></li>
			<?php endif; ?>
			<?php echo $this->_tpl_vars['HOOK_BLOCK_MY_ACCOUNT']; ?>

		</ul>
		<p class="logout">
			<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
index.php?mylogout" title="<?php echo smartyTranslate(array('s' => 'log out','mod' => 'blockmyaccount'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Sign out','mod' => 'blockmyaccount'), $this);?>
</a>
		</p>
	</div>
</div>
<!-- /Block myaccount module -->