<?php
/* Smarty version 3.1.32, created on 2019-04-15 10:39:25
  from '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/zamounda/zamounda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb4433d6e6593_41561888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8699c28936fef744105bf2ee9d273442501b4f68' => 
    array (
      0 => '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/zamounda/zamounda.tpl',
      1 => 1554825824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb4433d6e6593_41561888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12711878035cb4433d6e3900_74709102', 'page_header_container');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13779346655cb4433d6e4cb8_40272077', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_12711878035cb4433d6e3900_74709102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_12711878035cb4433d6e3900_74709102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_13779346655cb4433d6e4cb8_40272077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_13779346655cb4433d6e4cb8_40272077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="zamoundaPage_full_background">
        <div class="text-overlay">
            <h1 id="textTyping"></h1>
        </div>
        <div class="buttonScrollContainer">
            <a href="#" class="scroll-down"></a>
        </div>
    </div>
    
    <div class="container description">
        <div class="row">
            <p style="margin:25px 0px">Dans toutes les villes du monde, il existe des gens qui se démarquent par leurs allures soignées. À paris, on les appelle <span>ZAMOUNDA</span>.</p>
            <h2 class="text-center">Le Zamounda c’est quoi ?</h2>
            <p>Crée il y a 6 ans, LE CONCEPT ZAMOUNDA va au delà du style vestimentaire, c'est un état d'esprit une philosophie voir un mode de vie basé sur des valeurs et principes communs comme le partage, positivé, l'humilité, la paix, la famille et l'amour...
                Inspiré du dandysme et des gentlemen, les membres du Zamounda mettent un point d'honneur à faire un lien entre la modernité africaine et occidentale, s'imposant plus comme des concepteurs que des sapeurs. 
            </p>
            <p> Ils revisitent le style des " Classic men". Pour les concepteurs du Zamounda ce n'est pas le prix qui fait l'élégence mais plutot la façon dont les vetements s'accordent.</p>
        </div>
    </div>

<?php
}
}
/* {/block 'page_content'} */
}
