<?php
/* Smarty version 3.1.32, created on 2019-04-14 20:57:29
  from '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb38299820f37_73003971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dda26995f4044d157dce9f11c4ba9ec19a3fba3' => 
    array (
      0 => '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/_partials/footer.tpl',
      1 => 1554825825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb38299820f37_73003971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container-fluid">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9623913025cb3829981d4c9_72838410', 'hook_footer_before');
?>

  </div>
</div>


<div class="footer-container">
  <div class="container">
    <div class="row"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12775098655cb3829981e6e8_85509136', 'hook_footer');
?>
</div>
    <div class="row"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15929540015cb3829981f5f6_98593168', 'hook_footer_after');
?>
</div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12704622375cb38299820647_65033539', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_9623913025cb3829981d4c9_72838410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_9623913025cb3829981d4c9_72838410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_12775098655cb3829981e6e8_85509136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_12775098655cb3829981e6e8_85509136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_15929540015cb3829981f5f6_98593168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_15929540015cb3829981f5f6_98593168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_12704622375cb38299820647_65033539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_12704622375cb38299820647_65033539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="_blank" href="#">©2012 Zamounda Officiel 
                          </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
