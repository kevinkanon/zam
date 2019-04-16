<?php
/* Smarty version 3.1.32, created on 2019-04-07 00:51:48
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca92d844e47d2_70814850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1552152617,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca92d844e47d2_70814850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/modules/ps_socialfollow/ps_socialfollow.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13001758285ca92d844e3646_19903912', 'block_social');
?>

<!-- end /home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }
/* {block 'block_social'} */
class Block_13001758285ca92d844e3646_19903912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_13001758285ca92d844e3646_19903912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!-- social follow module berenice/module/ps_socialfollow.tpl -->
  <div class="block-social col-lg-12 col-md-12 col-sm-12">
    <h4 class="text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow us','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
    <ul>
      <li class="fb"><a href="https://www.facebook.com/zamoundaofficiel/" target="_blank"></a></li>
      <li class="insta"><a href="https://www.instagram.com/zamoundaofficiel/" target="_blank"></a></li>


          </ul>
  </div>
  <!-- end social follow module berenice/module/ps_socialfollow.tpl -->
<?php
}
}
/* {/block 'block_social'} */
}
