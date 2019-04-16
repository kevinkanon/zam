<?php
/* Smarty version 3.1.32, created on 2019-04-14 20:57:33
  from '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cb3829d3aff40_48156270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c70d7fb27d0288b808314ed8dba7682fcf613bd7' => 
    array (
      0 => '/home/kanonkevin/public_html/themes/zamoundaofficiel/templates/index.tpl',
      1 => 1554899726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb3829d3aff40_48156270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12960205865cb3829d3a1545_50102218', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_3747966585cb3829d3a42b2_09278256 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_5405656865cb3829d3ae680_31457202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_18042009925cb3829d3ae0e9_67774453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5405656865cb3829d3ae680_31457202', 'hook_home', $this->tplIndex);
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12960205865cb3829d3a1545_50102218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12960205865cb3829d3a1545_50102218',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3747966585cb3829d3a42b2_09278256',
  ),
  'page_content' => 
  array (
    0 => 'Block_18042009925cb3829d3ae0e9_67774453',
  ),
  'hook_home' => 
  array (
    0 => 'Block_5405656865cb3829d3ae680_31457202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <section class="v-header">
                <!-- The video -->
        <div class="overlayFilm"></div>
        <video muted autoplay controls loop playsinline id="myVideo">
            <?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {?>
                <source src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
video/zamounda_fashionShow.mp4" type="video/mp4">
                <source src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
video/zamounda_fashionShow.webm" type="video/webm">
                <source src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
video/zamounda_fashionShow.ogv" type="video/ogg">
            <?php }?>
        </video>

        <!-- Optional: some overlay text to describe the video -->
        <div class="content videoHome">
            <h1 class="animatedVideoText"></h1>
            <!-- Use a button to pause/play the video with JavaScript -->
            <button id="myBtn">Pause</button>
        </div>
        
        <div class="buttonScrollContainer">
            <a href="#" class="scroll-down"></a>
        </div>
    </section>


    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3747966585cb3829d3a42b2_09278256', 'page_content_top', $this->tplIndex);
?>


        <div id="header-resume-block" class="header-resume-block">
            <div class="row">

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content zamounda">
                        <a href="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
zamounda-history<?php }?>"><img src="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');
}?>cms/costume.png" class="img-fluid"></a>
                        <h2>HISTOIRE</h2>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content shooting">
                        <a href="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
blog/category/shooting?page_type=category&subpage_type=post<?php }?>"><img src="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');
}?>cms/app-photo.png" class="img-fluid"></a>
                        <h2>SHOOTING</h2>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content events">
                        <a href="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
blog/category/events?page_type=category&subpage_type=post<?php }?>"><img src="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');
}?>cms/calendar.png" class="img-fluid"></a>
                        <h2>EVENTS</h2>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content collaborations">
                        <a href="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
blog/category/collaborations?page_type=category&subpage_type=post<?php }?>"><img src="<?php if (isset($_smarty_tpl->tpl_vars['urls']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');
}?>cms/collaboration.png" class="img-fluid"></a>
                        <h2>COLLABORATIONS</h2>
                    </div>
                </div>

            </div>
        </div>




        <div id="membres" class="membres container">
            <div class="row">
                <!-- Section heading -->
                <h2 class="col-xs-12 title">MEMBRES</h2>
            </div>

            <!-- trigger anchor top  -->
            <div id="trigger-top"></div>


            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="item item col-lg-4 col-md-6 col-xs-12" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine"  data-aos-mirror="true" data-aos-anchor="#trigger-top">
                    <div class="avatar mx-auto"><img src="./img/cms/mohamed.jpg" class="rounded-circle z-depth-1" alt="Sample avatar" /></div>
                    <h5 class="font-weight-bold mb-1">Mohamed Conde</h5>
                    <p class="blue-text"><strong>Fondateur & Directeur Artistique</strong></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="item col-lg-4 col-md-6 col-xs-12" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine"  data-aos-mirror="true">
                    <div class="avatar mx-auto"><img src="./img/cms/deekwayne.jpg" class="rounded-circle z-depth-1" alt="Sample avatar" /></div>
                    <h5 class="font-weight-bold mb-1">Delavega Deekwayne</h5>
                    <p class="blue-text"><strong>co-Fondateur</strong></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="item col-lg-4 col-md-6 col-xs-12" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="ease-in-sine"  data-aos-mirror="true">
                    <div class="avatar mx-auto"><img src="./img/cms/zagalo.jpg" class="rounded-circle z-depth-1" alt="Sample avatar" /></div>
                    <h5 class="font-weight-bold mb-1">Zagalo Mendosa</h5>
                    <p class="blue-text"><strong>Assitant Exécutif</strong></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="item col-lg-4 col-md-6 col-xs-12" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine"  data-aos-mirror="true">
                    <div class="avatar mx-auto"><img src="./img/cms/joyce.jpg" class="rounded-circle z-depth-1" alt="Sample avatar" /></div>
                    <h5 class="font-weight-bold mb-1">Joyce Angèle</h5>
                    <p class="blue-text"><strong>Community Manager</strong></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="item col-lg-4 col-md-6 col-xs-12" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="ease-in-sine"  data-aos-mirror="true">
                    <div class="avatar mx-auto"><img src="./img/cms/mad.jpg" class="rounded-circle z-depth-1" alt="Sample avatar" /></div>
                    <h5 class="font-weight-bold mb-1">Mad verges</h5>
                    <p class="blue-text"><strong>Concepteur Zamounda</strong></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="item col-lg-4 col-md-6 col-xs-12" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine"  data-aos-mirror="true">
                    <div class="avatar mx-auto"><img src="./img/cms/eddy.jpg" class="rounded-circle z-depth-1" alt="Sample avatar" /></div>
                    <h5 class="font-weight-bold mb-1">Eddy Anaele</h5>
                    <p class="blue-text"><strong>Photographe</strong></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="item col-lg-4 col-md-6 col-xs-12" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine"  data-aos-mirror="true" data-aos-anchor="#trigger-bottom">
                    <div class="avatar mx-auto"><img src="./img/cms/john.jpg" class="rounded-circle z-depth-1" alt="Sample avatar" /></div>
                    <h5 class="font-weight-bold mb-1">John Koffi</h5>
                    <p class="blue-text"><strong>Assistant & Conseiller</strong></p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

             <!-- trigger anchor bottom  -->
            <div id="trigger-bottom"></div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18042009925cb3829d3ae0e9_67774453', 'page_content', $this->tplIndex);
?>

    </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
