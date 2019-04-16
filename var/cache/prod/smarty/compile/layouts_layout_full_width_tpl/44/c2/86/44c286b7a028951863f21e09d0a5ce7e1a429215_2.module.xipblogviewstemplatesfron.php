<?php
/* Smarty version 3.1.32, created on 2019-04-14 23:42:04
  from 'module:xipblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb3a92c1b0711_17640241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44c286b7a028951863f21e09d0a5ce7e1a429215' => 
    array (
      0 => 'module:xipblogviewstemplatesfron',
      1 => 1555278117,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb3a92c1b0711_17640241 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="gallery-block grid-gallery">
	<div class="heading"><h2>Galerie photos</h2></div>
	<div class="row">
		<?php if (isset($_smarty_tpl->tpl_vars['gallery_lists']->value) && $_smarty_tpl->tpl_vars['gallery_lists']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gallery_lists']->value, 'galleryimg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galleryimg']->value) {
?>
				<div class="col-md-4 col-lg-4 item">
					<a class="lightbox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryimg']->value[$_smarty_tpl->tpl_vars['imagesize']->value], ENT_QUOTES, 'UTF-8');?>
"><img class="img-thumbnail image scale-on-hover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryimg']->value[$_smarty_tpl->tpl_vars['imagesize']->value], ENT_QUOTES, 'UTF-8');?>
"></a>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</section>

<?php echo '<script'; ?>
>
	baguetteBox.run('.grid-gallery', 
		{ animation: 'slideIn', async: 'true' }
	);
<?php echo '</script'; ?>
><?php }
}
