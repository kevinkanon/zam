<?php
/* Smarty version 3.1.32, created on 2019-04-07 00:51:48
  from '/home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca92d8445cb69_40263633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7149c5cdf92454aa84d3ca8977ef7cf0987bdc22' => 
    array (
      0 => '/home/kanonkevin/public_html/zamoundaofficiel/themes/zamoundaofficiel/templates/page.tpl',
      1 => 1552152471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca92d8445cb69_40263633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9894092515ca92d844579b2_68113806', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_5148017315ca92d84458691_12691982 extends Smarty_Internal_Block
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
class Block_6357887175ca92d84457f75_76994807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5148017315ca92d84458691_12691982', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9427416135ca92d8445a357_16231728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10315144925ca92d8445ac75_70631757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11974178705ca92d84459d44_90026530 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9427416135ca92d8445a357_16231728', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10315144925ca92d8445ac75_70631757', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14174681545ca92d8445be82_74575281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15265519675ca92d8445b922_23378704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14174681545ca92d8445be82_74575281', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9894092515ca92d844579b2_68113806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9894092515ca92d844579b2_68113806',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6357887175ca92d84457f75_76994807',
  ),
  'page_title' => 
  array (
    0 => 'Block_5148017315ca92d84458691_12691982',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11974178705ca92d84459d44_90026530',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9427416135ca92d8445a357_16231728',
  ),
  'page_content' => 
  array (
    0 => 'Block_10315144925ca92d8445ac75_70631757',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15265519675ca92d8445b922_23378704',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14174681545ca92d8445be82_74575281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6357887175ca92d84457f75_76994807', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11974178705ca92d84459d44_90026530', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15265519675ca92d8445b922_23378704', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
