<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/PostSlide.css" type="text/css" media="screen"/>
<style>
	body{
		background:#BFE2FF;
		font-family:Arial;
	}
	h1{
		position:relative;
		text-indent:-9000px;
		width:633px;
		height:150px;
		margin:20px;
		background:transparent url(postSlide/title.png) no-repeat top left;
	}
	.content{
		margin:0 auto;
	}
	a.back{
		background:transparent url(postSlide/back.png) no-repeat top left;
		height:13px;
		width:248px;
		display:block;
		clear:both;
		text-indent:-9000px;
		margin:20px auto;
		position:absolute;
		bottom:10px;
		left:50%;
		margin-left:-124px;
	}
	a.back:hover{
		background-position:0px -13px;
	}
	div.shuffle{
		position:fixed;
		top:476px;
		right:19px;
		width:200px;
		height:50px;
		background:transparent url(postSlide/shuffle.png) no-repeat top left;
	}
	div.hover{
		position:fixed;
		top:68px;
		right:90px;
		width:253px;
		height:65px;
		background:transparent url(postSlide/hover.png) no-repeat top left;
	}
/* O z-index do div#mask deve ser menor que do div#boxes e do div.window */
#mask {position:absolute;
z-index:9000;  
background-color:#000; 
display:none;
}

#boxes .window {
position:absolute;
width:440px;
height:200px;
display:none;
z-index:9999;
padding:20px;
}

/* Personalize a janela modal aqui. Você pode adicionar uma imagem de fundo. */
#boxes #dialog, #dialog2, #dialog3, #dialog4, #dialog5, #dialog6, #dialog7, #dialog8, #dialog9, #dialog10{
width:475px;
height:303px;
background-color:#06F;
}
/* posiciona o link para fechar a janela */
.close {
display:block; 
text-align:right;
}  
</style>
<!--
<div class="content">
	<h1>Realted Posts Slide Out Boxes with jQuery and CSS3</h1>
	<a href="http://tympanus.net/codrops/2010/07/21/related-posts-slide-out-boxes/" class="back">Back to the Codrops Tutorial</a>
	<div class="shuffle"></div>
	<div class="hover"></div>
</div>
-->

<div id="rp_list" class="rp_list">
	<ul>
		<li>
			<div>
				<img src="images/1.jpg" alt=""/>
				<span class="rp_title">Viagens para Disney por preços pequenos!</span>
				<span class="rp_links">                    
                    <a href="#dialog" name="modal">Veja+</a>				
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/2.jpg" alt=""/>
				<span class="rp_title">Conheça Bonito no Mato Grosso do sul/BR</span>
				<span class="rp_links">
					<a href="#dialog2" name="modal">Veja+</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/3.jpg" alt=""/>
				<span class="rp_title">Se hospede na cidade maravilhosa!</span>
				<span class="rp_links">
					<a href="#dialog3" name="modal">Veja+</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/4.jpg" alt=""/>
				<span class="rp_title">Faça um safari na Angola</span>
				<span class="rp_links">
					<a href="#dialog4" name="modal">Veja+</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/5.jpg" alt=""/>
				<span class="rp_title">Fresh Sliding Thumbnails Gallery</span>
				<span class="rp_links">
					<a href="#dialog5" name="modal">Veja+</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/6.jpg" alt=""/>
				<span class="rp_title">A jQuery Heat Map</span>
				<span class="rp_links">
					<a href="#dialog5" name="modal">Veja+</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/7.jpg" alt=""/>
				<span class="rp_title">jTextTranslate: A jQuery Translation Plugin</span>
				<span class="rp_links">
					<a href="#dialog6" name="modal">Veja+</a>
				</span>
			</div>
		</li>
<!--
		<li>
			<div>
				<img src="images/8.jpg" alt=""/>
				<span class="rp_title">Awesome Mobile Image Gallery Web App</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/05/27/awesome-mobile-image-gallery-web-app/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/WonderwallMobileGallery/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/13.jpg" alt=""/>
				<span class="rp_title">Awesome CSS3 & jQuery Slide Out Button</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/02/08/awesome-css3-jquery-slide-out-button/">Article</a>
					<a target="_blank" href="http://www.tympanus.net/Tutorials/SlideOutButton/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/14.jpg" alt=""/>
				<span class="rp_title">Beautiful Slide Out Navigation</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2009/11/30/beautiful-slide-out-navigation-a-css-and-jquery-tutorial/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/FixedNavigationTutorial/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/9.jpg" alt=""/>
				<span class="rp_title">Neat Photo Hover Effect with CSS Sprites and jQuery</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/02/22/neat-photo-hover-effect-with-css-sprites-and-jquery/">Article</a>
					<a target="_blank" href="http://www.tympanus.net/Development/PhotoEffect/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/10.jpg" alt=""/>
				<span class="rp_title">Beautiful Photo Stack Gallery</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/06/27/beautiful-photo-stack-gallery-with-jquery-and-css3/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/PhotoStack/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/11.jpg" alt=""/>
				<span class="rp_title">Pimp Your Tables with CSS3</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/05/03/pimp-your-tables-with-css3/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/CSS3Tables/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/12.jpg" alt=""/>
				<span class="rp_title">Scrolling to the Top and Bottom with jQuery</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/01/03/scrolling-to-the-top-and-bottom-with-jquery/">Article</a>
					<a target="_blank" href="http://www.tympanus.net/scrollupdown/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/15.jpg" alt=""/>
				<span class="rp_title">Awesome Cufonized Fly-out Menu</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/06/28/awesome-cufonized-fly-out-menu/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/CufonizedFlyOutMenu/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/16.jpg" alt=""/>
				<span class="rp_title">Minimalistic Slideshow Gallery with jQuery</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/07/05/minimalistic-slideshow-gallery/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/MinimalisticSlideshowGallery/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/17.jpg" alt=""/>
				<span class="rp_title">Interactive Photo Desk with jQuery and CSS3</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/07/01/interactive-photo-desk/">Article</a>
					<a target="_blank" href="http://tympanus.net/Development/PhotoDesk/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/18.jpg" alt=""/>
				<span class="rp_title">Sliding Panel Photo Wall Gallery with jQuery</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/05/14/sliding-panel-photo-wall-gallery-with-jquery/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/SlidingPanelPhotowallGallery/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/19.jpg" alt=""/>
				<span class="rp_title">Slide Down Box Menu with jQuery and CSS3</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/07/16/slide-down-box-menu/">Article</a>
					<a target="_blank" href="http://tympanus.net/Tutorials/SlideDownBoxMenu/">Demo</a>
				</span>
			</div>
		</li>
		<li>
			<div>
				<img src="images/20.jpg" alt=""/>
				<span class="rp_title">Multimedia Gallery for Images, Video and Audio</span>
				<span class="rp_links">
					<a target="_blank" href="http://tympanus.net/codrops/2010/06/24/multimedia-gallery/">Article</a>
					<a target="_blank" href="http://tympanus.net/Development/MultiMediaGallery/">Demo</a>
				</span>
			</div>
		</li>
	</ul>
-->
	<span id="rp_shuffle" class="rp_shuffle">
	</span>
</div>
<!--SCRIPT PARA JANELA POUPUP-->
<script type="text/javascript">
$(document).ready(function() {
//seleciona os elementos a com atributo name="modal"
$('a[name=modal]').click(function(e) {
//cancela o comportamento padrão do link
e.preventDefault();
//armazena o atributo href do link
var id = $(this).attr('href');
//armazena a largura e a altura da tela
var maskHeight = $(document).height();
var maskWidth = $(window).width();

//Define largura e altura do div#mask iguais ás dimensões da tela
$('#mask').css({'width':maskWidth,'height':maskHeight});

//efeito de transição
$('#mask').fadeIn(1000);
$('#mask').fadeTo("slow",0.8);

//armazena a largura e a altura da janela
var winH = $(window).height();
var winW = $(window).width();
//centraliza na tela a janela popup
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
//efeito de transição
$(id).fadeIn(2000);
});

//se o botãoo fechar for clicado
$('.window .close').click(function (e) {
//cancela o comportamento padrão do link
e.preventDefault();
$('#mask, .window').hide();
});

//se div#mask for clicado
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
});
</script>
<!--FIM DA JANELA POUPUP-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
	$(function() {
		/**
		* the list of posts
		*/
		var $list 		= $('#rp_list ul');
		/**
		* number of related posts
		*/
		var elems_cnt 		= $list.children().length;
		
		/**
		* show the first set of posts.
		* 200 is the initial left margin for the list elements
		*/
		load(200);
		
		function load(initial){
			$list.find('li').hide().andSelf().find('div').css('margin-left',-initial+'px');
			var loaded	= 0;
			//show 5 random posts from all the ones in the list. 
			//Make sure not to repeat
			while(loaded < 5){
				var r 		= Math.floor(Math.random()*elems_cnt);
				var $elem	= $list.find('li:nth-child('+ (r+1) +')');
				if($elem.is(':visible'))
					continue;
				else
					$elem.show();
				++loaded;
			}
			//animate them
			var d = 200;
			$list.find('li:visible div').each(function(){
				$(this).stop().animate({
					'marginLeft':'-50px'
				},d += 100);
			});
		}
			
		/**
		* hovering over the list elements makes them slide out
		*/	
		$list.find('li:visible').live('mouseenter',function () {
			$(this).find('div').stop().animate({
				'marginLeft':'-220px'
			},200);
		}).live('mouseleave',function () {
			$(this).find('div').stop().animate({
				'marginLeft':'-50px'
			},200);
		});
		
		/**
		* when clicking the shuffle button,
		* show 5 random posts
		*/
		$('#rp_shuffle').unbind('click')
						.bind('click',shuffle)
						.stop()
						.animate({'margin-left':'-18px'},700);
						
		function shuffle(){
			$list.find('li:visible div').stop().animate({
				'marginLeft':'60px'
			},200,function(){
				load(-60);
			});
		}
	});
</script>
