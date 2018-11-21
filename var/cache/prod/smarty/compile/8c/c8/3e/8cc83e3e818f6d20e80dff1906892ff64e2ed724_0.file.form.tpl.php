<?php
/* Smarty version 3.1.33, created on 2018-11-21 14:30:56
  from '/var/www/html/Prestashop/admin432isyt8x/themes/default/template/controllers/slip/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf55e109c82f4_40330163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cc83e3e818f6d20e80dff1906892ff64e2ed724' => 
    array (
      0 => '/var/www/html/Prestashop/admin432isyt8x/themes/default/template/controllers/slip/helpers/form/form.tpl',
      1 => 1542805943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf55e109c82f4_40330163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18400301195bf55e109c7275_68638635', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_18400301195bf55e109c7275_68638635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18400301195bf55e109c7275_68638635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	$(document).ready(function() {
		var btn_save_date = $('span[class~="process-icon-save-date"]').parent();
		var btn_submit_date = $('#submitPrint');

		if (btn_save_date.length > 0 && btn_submit_date.length > 0)
		{
			btn_submit_date.hide();
			btn_save_date.find('span').removeClass('process-icon-save-date');
			btn_save_date.find('span').addClass('process-icon-save-calendar');
			btn_save_date.click(function() {
				btn_submit_date.before('<input type="hidden" name="'+btn_submit_date.attr("name")+'" value="1" />');

				$('#order_slip_form').submit();
			});
		}
	});

<?php
}
}
/* {/block 'script'} */
}
