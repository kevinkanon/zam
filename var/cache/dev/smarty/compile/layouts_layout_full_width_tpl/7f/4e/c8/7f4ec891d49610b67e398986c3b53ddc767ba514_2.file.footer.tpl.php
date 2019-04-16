<?php
/* Smarty version 3.1.32, created on 2019-04-07 00:51:48
  from '/home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca92d844df587_19053519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f4ec891d49610b67e398986c3b53ddc767ba514' => 
    array (
      0 => '/home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/templates/_partials/footer.tpl',
      1 => 1552152620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca92d844df587_19053519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container-fluid">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229821815ca92d844dbcd3_22601967', 'hook_footer_before');
?>

  </div>
</div>


<div class="footer-container">
  <div class="container">
    <div class="row"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20106044885ca92d844dcd57_08054806', 'hook_footer');
?>
</div>
    <div class="row"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10836000425ca92d844ddcc2_80025966', 'hook_footer_after');
?>
</div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17907688255ca92d844deca3_94314215', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_229821815ca92d844dbcd3_22601967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_229821815ca92d844dbcd3_22601967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_20106044885ca92d844dcd57_08054806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_20106044885ca92d844dcd57_08054806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_10836000425ca92d844ddcc2_80025966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_10836000425ca92d844ddcc2_80025966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_17907688255ca92d844deca3_94314215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_17907688255ca92d844deca3_94314215',
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
