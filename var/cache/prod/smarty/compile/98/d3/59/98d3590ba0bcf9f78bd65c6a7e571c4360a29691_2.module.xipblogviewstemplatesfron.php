<?php
/* Smarty version 3.1.32, created on 2019-04-15 00:50:20
  from 'module:xipblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb3b92c986462_99443276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d3590ba0bcf9f78bd65c6a7e571c4360a29691' => 
    array (
      0 => 'module:xipblogviewstemplatesfron',
      1 => 1555282216,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:xipblog/views/templates/front/post-video.tpl' => 2,
    'module:xipblog/views/templates/front/post-audio.tpl' => 2,
    'module:xipblog/views/templates/front/post-gallery.tpl' => 2,
  ),
),false)) {
function content_5cb3b92c986462_99443276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/kanonkevin/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><div class="home_blog_post_area <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_designlayout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="home_blog_post">
		<div class="page_title_area">
			<?php if (isset($_smarty_tpl->tpl_vars['xipbdp_title']->value)) {?><h3 class="page-heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_title']->value, ENT_QUOTES, 'UTF-8');?>
<span class="heading_carousel_arrow"></span></h3><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['xipbdp_subtext']->value)) {?><p class="page_subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_subtext']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
			<div class="heading-line d_none"><span></span></div>
		</div>
		<div class="row home_blog_post_inner carousel">
		<?php if ((isset($_smarty_tpl->tpl_vars['xipblogposts']->value) && !empty($_smarty_tpl->tpl_vars['xipblogposts']->value))) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xipblogposts']->value, 'xipblgpst');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xipblgpst']->value) {
?>
				<article class="blog_post col-xs-12 col-sm-12 col-md-3">
					<div class="blog_post_content">
						<div class="blog_post_content_top">
							<div class="post_thumbnail">
								<?php if ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'video') {?>
									<?php $_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['xipblgpst']->value['video']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postvideos']->value) > 1) {?>
										<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'570','height'=>"316",'class'=>"carousel"), 0, true);
?>
									<?php } else { ?>
										<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'570','height'=>"316",'class'=>''), 0, true);
?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'audio') {?>
									<?php $_smarty_tpl->_assignInScope('postaudio', explode(',',$_smarty_tpl->tpl_vars['xipblgpst']->value['audio']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postaudio']->value) > 1) {?>
										<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'570','height'=>"316",'class'=>"carousel"), 0, true);
?>
									<?php } else { ?>
										<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'570','height'=>"316",'class'=>''), 0, true);
?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'gallery') {?>
									<?php if (count($_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists']) > 1) {?>
																				<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"large",'class'=>"carousel"), 0, true);
?>
									<?php } else { ?>
																				<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"large",'class'=>''), 0, true);
?>
									<?php }?>
								<?php } else { ?>
									<img class="xipblog_img img-thumbnail" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_img_home_default'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
">
									<div class="blog_mask">
										<div class="blog_mask_content">
											<a class="thumbnail_lightbox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_img_large'], ENT_QUOTES, 'UTF-8');?>
">
												<i class="icon_plus"></i>
											</a>
										</div>
									</div>
								<?php }?>
							</div>
						</div>
						<div class="blog_post_content_bottom">
							<h3 class="post_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
							<div class="post_meta clearfix">
																<p class="meta_date">
																		<i class="fas fa-calendar-alt"></i>
									<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['xipblgpst']->value['post_date'],"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>

								</p>
								
								<p class="meta_category">
									 
									<i class="fas fa-images"></i>
																		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['category_default_arr']['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['category_default_arr']['name'], ENT_QUOTES, 'UTF-8');?>
</a>
								</p>
							</div>
							
							<div class="post_content">
								<?php if (isset($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt']) && !empty($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'])) {?>
									<p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'],100,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
								<?php } else { ?>
									<p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_content'],100,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
								<?php }?>
							</div>
							<div class="content_more">
								<a class="read_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
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
		<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','mod'=>'xipblog'),$_smarty_tpl ) );?>
</p>
		<?php }?>
		</div>
	</div>
</div>
<?php }
}
