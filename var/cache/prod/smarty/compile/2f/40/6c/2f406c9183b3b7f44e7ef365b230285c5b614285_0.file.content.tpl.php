<?php
/* Smarty version 3.1.33, created on 2018-11-21 14:28:47
  from '/var/www/html/Prestashop/admin432isyt8x/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf55d8f916198_97470598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f406c9183b3b7f44e7ef365b230285c5b614285' => 
    array (
      0 => '/var/www/html/Prestashop/admin432isyt8x/themes/default/template/content.tpl',
      1 => 1542805943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf55d8f916198_97470598 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
