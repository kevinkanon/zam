<?php
/* Smarty version 3.1.32, created on 2019-04-07 13:46:46
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca9e326116145_40506209',
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
function content_5ca9e326116145_40506209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8705311615ca9e326110602_38986575';
?>
<!-- begin /home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/modules/ps_socialfollow/ps_socialfollow.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2740913595ca9e326112ed5_49953681', 'block_social');
?>

<!-- end /home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }
/* {block 'block_social'} */
class Block_2740913595ca9e326112ed5_49953681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_2740913595ca9e326112ed5_49953681',
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
