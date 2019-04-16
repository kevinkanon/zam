<?php
/* Smarty version 3.1.32, created on 2019-04-14 22:14:31
  from '/home/kanonkevin/public_html/themes/zamoundaofficiel/modules/xipblog/views/templates/front/default/archive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb394a782c8e0_43090937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80095a0dfba1d4a0bd211ae31a5fe27678932ac1' => 
    array (
      0 => '/home/kanonkevin/public_html/themes/zamoundaofficiel/modules/xipblog/views/templates/front/default/archive.tpl',
      1 => 1555271371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:xipblog/views/templates/front/default/post-video.tpl' => 1,
    'module:xipblog/views/templates/front/default/post-audio.tpl' => 1,
    'module:xipblog/views/templates/front/default/post-gallery.tpl' => 1,
    'module:xipblog/views/templates/front/default/pagination.tpl' => 1,
  ),
),false)) {
function content_5cb394a782c8e0_43090937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198383975cb394a77e5ab1_43924366', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1857073655cb394a77e90b0_33582155', "page_content_container");
?>

<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9553835675cb394a7821b21_73955929', "left_column");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20773966805cb394a78279b3_02891993', "right_column");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_198383975cb394a77e5ab1_43924366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_198383975cb394a77e5ab1_43924366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block "xipblog_post_thumbnail"} */
class Block_2346129375cb394a77f93f6_00693655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] == 'video') {?>
									<?php $_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['xpblgpst']->value['video']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postvideos']->value) > 1) {?>
										<?php $_smarty_tpl->_assignInScope('class', 'carousel');?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('class', '');?>
									<?php }?>
									<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('postvideos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'870','height'=>"482",'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, true);
?>
								<?php } elseif ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] == 'audio') {?>
									<?php $_smarty_tpl->_assignInScope('postaudio', explode(',',$_smarty_tpl->tpl_vars['xpblgpst']->value['audio']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postaudio']->value) > 1) {?>
										<?php $_smarty_tpl->_assignInScope('class', 'carousel');?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('class', '');?>
									<?php }?>
									<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('postaudio'=>$_smarty_tpl->tpl_vars['postaudio']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, true);
?>
								<?php } elseif ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] == 'gallery') {?>
									<?php if (count($_smarty_tpl->tpl_vars['xpblgpst']->value['gallery_lists']) > 1) {?>
										<?php $_smarty_tpl->_assignInScope('class', 'carousel');?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('class', '');?>
									<?php }?>
									<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery_lists'=>$_smarty_tpl->tpl_vars['xpblgpst']->value['gallery_lists'],'imagesize'=>"large",'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, true);
?>
								<?php } else { ?>
									<img class="img-thumbnail" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_img_large'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
">
									<div class="blog_mask">
										<div class="blog_mask_content">
											<a class="thumbnail_lightbox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_img_large'], ENT_QUOTES, 'UTF-8');?>
">
												<i class="icon_plus"></i>
											</a>										
										</div>
									</div>
								<?php }?>
							<?php
}
}
/* {/block "xipblog_post_thumbnail"} */
/* {block "page_content_container"} */
class Block_1857073655cb394a77e90b0_33582155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1857073655cb394a77e90b0_33582155',
  ),
  'xipblog_post_thumbnail' => 
  array (
    0 => 'Block_2346129375cb394a77f93f6_00693655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/kanonkevin/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

	<section id="content" class="page-content">
	<?php if (isset($_smarty_tpl->tpl_vars['xipblogpost']->value) && !empty($_smarty_tpl->tpl_vars['xipblogpost']->value)) {?>
	<div class="kr_blog_post_area">
		<div class="kr_blog_post_inner blog_style_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblogsettings']->value['blog_style'], ENT_QUOTES, 'UTF-8');?>
 column_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblogsettings']->value['blog_no_of_col'], ENT_QUOTES, 'UTF-8');?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xipblogpost']->value, 'xpblgpst');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xpblgpst']->value) {
?>
				<article id="blog_post" class="blog_post blog_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'], ENT_QUOTES, 'UTF-8');?>
 clearfix col-xs-12 col-sm-12 col-md-3 h-15">
					<div class="blog_post_content">
						<div class="blog_post_content_top">
							<div class="post_thumbnail">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2346129375cb394a77f93f6_00693655', "xipblog_post_thumbnail", $this->tplIndex);
?>

							</div>
						</div>

						<div class="blog_post_content_bottom">
							<h3 class="post_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
							
							<div class="post_meta clearfix">
								
									
								
								<div class="meta_author" style="margin-right: 0; padding-right: 0;">
																										</div>

								<div class="post_meta_date">
																		<i class="fas fa-calendar-alt"></i>
									<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['xpblgpst']->value['post_date'],"%b %dTH, %Y"), ENT_QUOTES, 'UTF-8');?>

								</div>

								<div class="meta_category">
																		<i class="fas fa-images"></i>
																		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['category_default_arr']['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['category_default_arr']['name'], ENT_QUOTES, 'UTF-8');?>
</a>
								</div>
															</div>

							<div class="post_content">
								<?php if (isset($_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt']) && !empty($_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt'])) {?>
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt'],500,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								<?php } else { ?>
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xpblgpst']->value['post_content'],400,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								<?php }?>
							</div>
							<div class="content_more">
								<a class="read_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','mod'=>'xipblog'),$_smarty_tpl ) );?>
<i class="fas fa-arrow-circle-right" style="margin-left: 0.5rem;"></i></a>
							</div>
						</div>

					</div>
				</article>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php }?>
	</section>
<?php
}
}
/* {/block "page_content_container"} */
/* {block "left_column"} */
class Block_9553835675cb394a7821b21_73955929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_9553835675cb394a7821b21_73955929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/kanonkevin/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<?php $_smarty_tpl->_assignInScope('layout_column', strval(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,'layouts/',''),'.tpl','')));?>
	<?php if (($_smarty_tpl->tpl_vars['layout_column']->value == 'layout-left-column')) {?>
		<div id="left-column" class="sidebar col-xs-12 col-sm-12 col-md-3 pull-md-9">
			<?php if (($_smarty_tpl->tpl_vars['xipblog_column_use']->value == 'own_ps')) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayxipblogleft"),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

			<?php }?>
		</div>
	<?php }
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_20773966805cb394a78279b3_02891993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_20773966805cb394a78279b3_02891993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/kanonkevin/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<?php $_smarty_tpl->_assignInScope('layout_column', strval(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,'layouts/',''),'.tpl','')));?>
	<?php if (($_smarty_tpl->tpl_vars['layout_column']->value == 'layout-right-column')) {?>
		<div id="right-column" class="sidebar col-xs-12 col-sm-4 col-md-3">
			<?php if (($_smarty_tpl->tpl_vars['xipblog_column_use']->value == 'own_ps')) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayxipblogright"),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

			<?php }?>
		</div>
	<?php }
}
}
/* {/block "right_column"} */
}
