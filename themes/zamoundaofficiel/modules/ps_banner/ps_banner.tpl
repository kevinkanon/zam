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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{*
<a class="banner" href="{$banner_link}" title="{$banner_desc}">
  {if isset($banner_img)}
    <img src="{$banner_img}" alt="{$banner_desc}" title="{$banner_desc}" class="img-fluid">
  {else}
    <span>{$banner_desc}</span>
  {/if}
</a>
*}

{* hide the native banner and show or hide my personnal pop in && testimonial or temoignage section *}



<div class="container-fluid testimonial">
	<div class="row">
		<div class="col-md-8 col-center m-auto">
			<h2 style="text-align: center;">TEMOIGNAGES</h2>
			<div id="myTestimonialCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					{*<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>*}
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="./img/cms/razy.jpg" alt=""></div>
						<p class="testimonial">
                            <i class="fa fa-quote-left"></i> 
                               Le concept Zamounda ne se limite pas aux textile, c'est bien plus que ça. C'est un art de vivre. On veut marquer l'histoire et passer à autre chose.
                            <i class="fa fa-quote-right"></i> 
                        </p>
						<p class="overview"><b>Kevin RAZY</b>, Humoriste & Comédien Canal+</p>
					</div>
					{*<div class="item carousel-item">
						<div class="img-box"><img src="/examples/images/clients/2.jpg" alt=""></div>
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="/examples/images/clients/3.jpg" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
					</div>*}
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>


<!-- The Modal -->
{*
<div id="myPopIn" class="modal">
  <!-- Modal content -->
  <div class="popIn-content">  
    <!-- Close Button -->
    <a href="#" class="closePopIn">&times;</a>
    <img src="{$urls.img_ps_url}popin/zamounda-popIn.jpg" class="img-fluid" alt="welcome img popin">
    <p>Pour toute collaboration n'hesitez pas à nous contacter via ce formulaire</p>
  </div>

</div> 
*}



