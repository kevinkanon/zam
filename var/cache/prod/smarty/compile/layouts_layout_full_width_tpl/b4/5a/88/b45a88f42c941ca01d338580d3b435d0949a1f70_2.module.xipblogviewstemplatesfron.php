<?php
/* Smarty version 3.1.32, created on 2019-04-14 21:40:54
  from 'module:xipblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb38cc655c507_78614353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45a88f42c941ca01d338580d3b435d0949a1f70' => 
    array (
      0 => 'module:xipblogviewstemplatesfron',
      1 => 1554825847,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb38cc655c507_78614353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/kanonkevin/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><div class="comments_area" id="comments">
    <h2 class="comments_title">
            </h2>
    <ol class="comment_list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xipblog_commets']->value, 'xipblog_commet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xipblog_commet']->value) {
?>
        <li class="comment" id="comment_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblog_commet']->value['id_xip_comments'], ENT_QUOTES, 'UTF-8');?>
">
            <article class="comment_body">
				<div class="comment_author vcard">
				    <img alt="" class="xipblog_img avatar avatar-70 photo" height="70" src="http://2.gravatar.com/avatar/597a1e6b0dfdf57f53ef8fb80fa190d7?s=70&d=mm&r=g" width="70">
				</div>
				<div class="comment_content">
					<div class="comment_meta">
					    <div class="comment_meta_author">
					    	<b class="fn"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblog_commet']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>
					    </div>
					    <div class="comment_meta_date">
					    	<time datetime="2016-03-07T04:33:23+00:00">
					    	    <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['xipblog_commet']->value['created'],"%e %B, %Y"), ENT_QUOTES, 'UTF-8');?>

					    	</time>
					    </div>
					    <div class="reply">
					        <a aria-label="Reply to raihan@sntbd.com" class="comment-reply-link" href="#" onclick='return addComment.moveForm( "div-comment-3", "3", "respond", "38" )' rel="nofollow">
					            Reply
					        </a>
					    </div>
					</div>
					<div class="comment_content_bottom">
						<p>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblog_commet']->value['content'], ENT_QUOTES, 'UTF-8');?>

						</p>
					</div>
				</div>
            </article>
        </li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
</div><?php }
}
