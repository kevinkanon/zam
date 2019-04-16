<?php
/* Smarty version 3.1.32, created on 2019-04-14 20:57:29
  from '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb382997446a8_85722607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'febdadd566dcaa7ebc4b0144bad555cbbd009fab' => 
    array (
      0 => '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/page.tpl',
      1 => 1554825809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb382997446a8_85722607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14909883005cb3829973c5e2_58977522', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10352782555cb3829973d6e5_62896810 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="page-header"><h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1></header><?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14444601025cb3829973ce34_64198324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10352782555cb3829973d6e5_62896810', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16533882055cb38299741775_20701822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12103726715cb382997420b1_54583200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1135092085cb38299741142_30977701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16533882055cb38299741775_20701822', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12103726715cb382997420b1_54583200', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11569952395cb382997437a0_02205175 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16504783025cb38299743160_67285502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11569952395cb382997437a0_02205175', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14909883005cb3829973c5e2_58977522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14909883005cb3829973c5e2_58977522',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14444601025cb3829973ce34_64198324',
  ),
  'page_title' => 
  array (
    0 => 'Block_10352782555cb3829973d6e5_62896810',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1135092085cb38299741142_30977701',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16533882055cb38299741775_20701822',
  ),
  'page_content' => 
  array (
    0 => 'Block_12103726715cb382997420b1_54583200',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16504783025cb38299743160_67285502',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11569952395cb382997437a0_02205175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14444601025cb3829973ce34_64198324', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1135092085cb38299741142_30977701', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16504783025cb38299743160_67285502', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
