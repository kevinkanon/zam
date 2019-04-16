<?php
/* Smarty version 3.1.32, created on 2019-04-06 23:39:30
  from '/home/kanonkevin/public_html/zamoundaofficiel/admin397kwnoux/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca91c9269b117_26463785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b4b787a23db4783623e04a4fbecf7937ac6d3e9' => 
    array (
      0 => '/home/kanonkevin/public_html/zamoundaofficiel/admin397kwnoux/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1552152908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca91c9269b117_26463785 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
