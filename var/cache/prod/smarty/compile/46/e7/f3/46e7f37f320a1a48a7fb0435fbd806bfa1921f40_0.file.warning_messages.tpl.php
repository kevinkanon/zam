<?php
/* Smarty version 3.1.32, created on 2019-04-14 20:57:28
  from '/home/kanonkevin/public_html/admin397kwnoux/themes/new-theme/template/components/layout/warning_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb382984b78f0_61371311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e7f37f320a1a48a7fb0435fbd806bfa1921f40' => 
    array (
      0 => '/home/kanonkevin/public_html/admin397kwnoux/themes/new-theme/template/components/layout/warning_messages.tpl',
      1 => 1554826694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb382984b78f0_61371311 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings:','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value))),$_smarty_tpl ) );?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
