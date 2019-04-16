<?php
/* Smarty version 3.1.32, created on 2019-04-14 20:57:30
  from '/home/kanonkevin/public_html/admin397kwnoux/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb3829a523c67_80267458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded1c72b58536a3ccad478ac82fa69d62af5e002' => 
    array (
      0 => '/home/kanonkevin/public_html/admin397kwnoux/themes/default/template/content.tpl',
      1 => 1554826662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb3829a523c67_80267458 (Smarty_Internal_Template $_smarty_tpl) {
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
