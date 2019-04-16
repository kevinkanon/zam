{**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2018 PrestaShop SA
    * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {extends file='page.tpl'}

    {block name='page_content_container'}

    {*if $page.page_name == 'index'}
    <!-- ZamoundaOfficiel banner img HD  -->
    <div class="container-fluid sub-header-banner" style="background-image:url({$urls.img_ps_url}sub-header-banner/sub_header-banner2.jpg)">

        <div class="container">
            <div class="sub-banner-heading">
                <h1 class="item-1">Welcome</h1>
                <h1 class="item-2">Classic Men</h1>
                <h1 class="item-3">Bienvenue</h1>
            </div>
        </div>
    </div>
    <!-- ZamoundaOfficiel banner img HD end  -->
    {/if*}
    <section class="v-header">
        {* video fullscreen homepage *}
        <!-- The video -->
        <div class="overlayFilm"></div>
        <video muted autoplay controls loop playsinline id="myVideo">
            {if isset($urls)}
                <source src="{$urls.img_ps_url}video/zamounda_fashionShow.mp4" type="video/mp4">
                <source src="{$urls.img_ps_url}video/zamounda_fashionShow.webm" type="video/webm">
                <source src="{$urls.img_ps_url}video/zamounda_fashionShow.ogv" type="video/ogg">
            {/if}
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
        {block name='page_content_top'}{/block}

        <div id="header-resume-block" class="header-resume-block">
            <div class="row">

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content zamounda">
                        <a href="{if isset($urls)}{$urls.base_url}zamounda-history{/if}"><img src="{if isset($urls)}{$urls.img_ps_url}{/if}cms/costume.png" class="img-fluid"></a>
                        <h2>HISTOIRE</h2>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content shooting">
                        <a href="{if isset($urls)}{$urls.base_url}blog/category/shooting?page_type=category&subpage_type=post{/if}"><img src="{if isset($urls)}{$urls.img_ps_url}{/if}cms/app-photo.png" class="img-fluid"></a>
                        <h2>SHOOTING</h2>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content events">
                        <a href="{if isset($urls)}{$urls.base_url}blog/category/events?page_type=category&subpage_type=post{/if}"><img src="{if isset($urls)}{$urls.img_ps_url}{/if}cms/calendar.png" class="img-fluid"></a>
                        <h2>EVENTS</h2>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 block-container">
                    <div class="block-content collaborations">
                        <a href="{if isset($urls)}{$urls.base_url}blog/category/collaborations?page_type=category&subpage_type=post{/if}"><img src="{if isset($urls)}{$urls.img_ps_url}{/if}cms/collaboration.png" class="img-fluid"></a>
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
        {block name='page_content'}{block name='hook_home'}{$HOOK_HOME nofilter}{/block}{/block}
    </section>
    {/block}