<?php /* Smarty version 2.6.20, created on 2009-07-15 17:46:43
         compiled from /home/sealence/local/ace/prestashop/themes/ace/cms.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/themes/ace/cms.tpl', 10, false),)), $this); ?>
<?php if ($this->_tpl_vars['cms']): ?>
	<?php if ($this->_tpl_vars['content_only']): ?>
	<div style="text-align:left; padding:10px;">
		<?php echo $this->_tpl_vars['cms']->content; ?>

	</div>
	<?php else: ?>
		<?php echo $this->_tpl_vars['cms']->content; ?>

	<?php endif; ?>
<?php else: ?>
	<?php echo smartyTranslate(array('s' => 'This page does not exist.'), $this);?>

<?php endif; ?>
<br />
<?php if (! $this->_tpl_vars['content_only']): ?>
<p><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.gif" alt="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></p>
<?php endif; ?>
