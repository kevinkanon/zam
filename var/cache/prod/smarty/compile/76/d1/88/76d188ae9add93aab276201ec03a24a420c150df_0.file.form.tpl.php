<?php
/* Smarty version 3.1.32, created on 2019-04-14 23:36:51
  from '/home/kanonkevin/public_html/modules/xipblog/views/templates/admin/xippost/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb3a7f3945b14_56583606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d188ae9add93aab276201ec03a24a420c150df' => 
    array (
      0 => '/home/kanonkevin/public_html/modules/xipblog/views/templates/admin/xippost/helpers/form/form.tpl',
      1 => 1554825725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb3a7f3945b14_56583606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7764217625cb3a7f38e8d89_82949028', "input");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_7764217625cb3a7f38e8d89_82949028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_7764217625cb3a7f38e8d89_82949028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'gallery') {?>
				<div class="text_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_multiple_parent">
		<?php if (isset($_smarty_tpl->tpl_vars['input']->value['defaults']) && !empty($_smarty_tpl->tpl_vars['input']->value['defaults'])) {?>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_delete" class="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_delete_class" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_delete_id" value="">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['defaults'], 'defaul');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['defaul']->value) {
?>
				<div class="row <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent">
					<div class="col-sm-3">
						<img src="<?php echo $_smarty_tpl->tpl_vars['input']->value['url'];
echo $_smarty_tpl->tpl_vars['defaul']->value;?>
" width="90" height="auto">
											<button type="button" class="btn btn-default <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_cros_class" data-val="<?php echo $_smarty_tpl->tpl_vars['defaul']->value;?>
">X</button>
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<div class="row <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent">
				<div class="col-sm-9">
					<input type="file" class="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]">
				</div>
			</div>
		<?php }?>
			<button type="button" class="btn btn-default <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_add_class">+</button>
				<?php echo '<script'; ?>
>
					function adddeleteimages(id){
						if(typeof id !== 'undefined'){
							if($("#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_delete_id").val() == ''){
								$("#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_delete_id").val(id);
							}else{
								$("#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_delete_id").val($("#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_delete_id").val()+','+id);
							}
						}
					}
					$(".<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_add_class").on("click",function() { 
						$(this).before('<div class="row <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent"><div class="col-sm-9"><input type="file" class="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]"></div><div class="col-sm-3"><button type="button" class="btn btn-default <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_cros_class">X</button></div></div>');
					 } );
					$(".text_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_multiple_parent").on("click",".<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_cros_class",function() { 
						adddeleteimages($(this).data("val"));
						$(this).closest(".<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent").remove();
					 } );
				<?php echo '</script'; ?>
>
		</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text_multiple') {?>
				<div class="text_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_multiple_parent">
		<?php if (isset($_smarty_tpl->tpl_vars['input']->value['defaults']) && !empty($_smarty_tpl->tpl_vars['input']->value['defaults'])) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['defaults'], 'defaul');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['defaul']->value) {
?>
				<div class="row <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent"><div class="col-sm-9"><input type="text" class="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['defaul']->value;?>
"></div><div class="col-sm-3"><button type="button" class="btn btn-default <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_cros_class">X</button></div></div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<div class="row <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent">
				<div class="col-sm-9">
					<input type="text" class="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]">
				</div>
			</div>
		<?php }?>
			<button type="button" class="btn btn-default <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_add_class">+</button>
				<?php echo '<script'; ?>
>
					$(".<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_add_class").on("click",function() { 
						$(this).before('<div class="row <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent"><div class="col-sm-9"><input type="text" class="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]"></div><div class="col-sm-3"><button type="button" class="btn btn-default <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_cros_class">X</button></div></div>');
					 } );
					$(".text_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_multiple_parent").on("click",".<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_cros_class",function() { 
						// console.log($(this).closest(".<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent"));
						$(this).closest(".<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_class_parent").remove();
					 } );
				<?php echo '</script'; ?>
>
		</div>
			<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
