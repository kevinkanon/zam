<?php
/* Smarty version 3.1.32, created on 2019-04-14 21:35:50
  from 'module:xipblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb38b96038234_51600227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '866f2560c056ca8de12e43fe06413fcc4d9ab2b7' => 
    array (
      0 => 'module:xipblogviewstemplatesfron',
      1 => 1555270521,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb38b96038234_51600227 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="post_format_items post_gallery <?php if (isset($_smarty_tpl->tpl_vars['class']->value) && $_smarty_tpl->tpl_vars['class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<?php if ((isset($_smarty_tpl->tpl_vars['gallery']->value) && !empty($_smarty_tpl->tpl_vars['gallery']->value))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gallery']->value, 'galleryimg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galleryimg']->value) {
?>
			<div class="post_gallery_img item">
				<img class="xipblog_img img-thumbnail" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryimg']->value[$_smarty_tpl->tpl_vars['imagesize']->value], ENT_QUOTES, 'UTF-8');?>
" alt="">
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div><?php }
}
