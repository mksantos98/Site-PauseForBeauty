<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pause For Beauty</title>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/404.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/404.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/camera.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Parisienne|Raleway:400,300' rel='stylesheet' type='text/css'>	
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  	<script type="text/javascript" src="js/camera.js"></script>
	
    <script type="text/javascript" src="js/jquery.cookie.js"></script> 
	<script type="text/javascript" src="js/jcarousel.js"></script>	
  	<script>
        jQuery(document).ready(function(){   

				//	Responsive layout, resizing the items
				$('.carousel.main ul').carouFredSel({
					auto: 4000,
					responsive: true,
					width: '100%',		
					scroll: 1,
				    prev: '#prev',
					next: '#next',
					pagination: false,
					mousewheel: false,
					swipe: {
						onMouse: true,
						onTouch: true
					},
					items: {
					  width:380,
					  height: 'auto',	//	optionally resize item-height
						visible: {
							min: 2,
							max: 3
						}
					}
				});

          });    
  	</script>	

  	<script type="text/javascript">                                     
		$(document).ready(function()
		{ $("#ajax-contact-form").submit(function() 
		  { var str = $(this).serialize(); $.ajax( 
			{ type: "POST", url: "contact.php", data: str, success: function(msg)
					{ if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
						{ result = '<div class="notification_ok">Your message has been sent. Thank you!<br> <a href="#" onclick="freset();return false;">send another mail</a></div>'; 
				$("#fields").hide(); 
				} 							
				else
						{ 
				  result = msg; 
				} 
				$("#note").html(result); 
			  } 
			  }); 
			return false; 
		  });
		});
		function freset()
		  {
			  $("#note").html(''); 	
			document.getElementById('ajax-contact-form').reset(); 	
			$("#fields").show();
		  }
	</script>  

  	<!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
   	<![endif]-->
    
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    	<!--[if lt IE 9]>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>

<body>
<div id="main">

    <div class="container top">
			<div class="row">
				<div class="span12">
					<div class="clearfix">
						<div class="social">
							<a href="#"><img src="images/social_1.png" alt="" width="29" height="30" border="0" /></a>
							<a href="#"><img src="images/social_2.png" alt="" width="29" height="30" border="0" /></a>
							<a href="#"><img src="images/social_3.png" alt="" width="29" height="30" border="0" /></a>
							<!--a href="#"><img src="images/social_4.png" alt="" width="29" height="30" border="0" /></a-->
							<a href="#"><img src="images/social_5.png" alt="" width="29" height="30" border="0" /></a>
						</div>
						<!--==============================Search=========================-->
						<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
							<input type="text" name="s"  value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''"  >
							<a href="#" onClick="document.getElementById('search-form').submit()"></a>
					</form>
					
					</div>
				</div>
			</div>
		</div>

<div id="inner">


<!--==============================Header=================================-->
<header>
    <div class="container">
    	<div class="row">
        	<div class="span5">
            	<div class="clearfix">
                    <div class="clearfix header-block-pad">
                       <a href="index.html"><img src="images/logo.png" alt=""></a>					
                    </div>
                </div>
          </div>  
      </div>   
    </div>
    
    <!--==============================Nav=================================-->          
    <div id="nav_section">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="navbar navbar_ clearfix">
              <div class="navbar-inner navbar-inner_">
                  <div class="container">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                      <div class="nav-collapse nav-collapse_ collapse">
                          <ul class="nav sf-menu">
                            <li class="active">
															<a href="index.html">
																Inicio
															</a>
														</li>
														<li  class="sub-menu">
															<a href="sobrenos.html">
																Sobre Nós
															</a>
															<ul>
																<li>
																	<a href="sobrenos.html">
																		Satisfação
																	</a>
																</li>
																<li>
																	<a href="sobrenos.html">
																		Nossos Parceiros
																	</a>
																</li>
																<li>
																	<a href="404.html">
																		Escolha
																	</a>
																</li>
															</ul>
														</li>
														<li>
															<a href="servicos.html">
																Serviços
															</a>
															
														</li>
														<li >
															<a href="terapia.html">
																Terapias
															</a>
														</li>
														<li >
															<a href="produtos.html">
																Produtos
															</a>
														</li>
														<li >
															<a href="faleconosco.html">
																Fale Conosco
															</a>
														</li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
<!--==============================End Nav=================================-->

</header>

<!--==============================Carusel=================================--> 
				
	<div class="carousel-box">
		<div class="inner span12">

			<div class="carousel main" >
				<ul >
					<li >
					  <a href="#">
							<small>1</small>
							<h4>Skin Care</h4>
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. 
							</p>
					  </a>
					</li>

					<li >
					  <a href="#">
							<small>2</small>
							<h4>Aromatherapy</h4>
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. 
							</p>
					  </a>
					</li>
					
					<li >
					    <a href="#">
							<small>3</small>
							<h4>Massage</h4>
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. 
							</p>
					    </a>
					</li>

					<li >
					    <a href="#">
							<small>4</small>
							<h4>Skin Care</h4>
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. 
							</p>
					    </a>
					</li>

					<li >
					    <a href="#">
							<small>5</small>
							<h4>Aromatherapy</h4>
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. 
							</p>
					    </a>
					</li>
					
					<li >
					    <a href="#">
							<small>6</small>
							<h4>Massage</h4>
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. 
							</p>
					    </a>
					</li>

				</ul>
			<a id="prev" href="javascript:;" style="display: block;" class=""></a>
			<a id="next" href="javascript:;" style="display: block;" class=""></a>

			</div>	
		</div>
	</div>
	
	
<!--==============================Content=================================--> 
<section id="content" >
  <div class="container">
    <div class="row ">
			<div class="clearfix ">
				
				<div class="span12">
					<h1>Resultados de Pesquisa:</h1>
					
						<div id="search-results">

						</div>

					<div class="padcontent"></div>
				</div>
			
			</div>
    </div> 
  </div>
</section>
<!--============================== end of Content=================================--> 

<!-- {%   Footer   %} -->

<div class="bg_center_footer">
	<div class="container">
		<div class="row">	
			<div class="span3 footer-logo">
				Pause For Beauty
			</div>
			<div class="span9">
				
				<ul>
					<li>
						<a href="index.html">
							Inicio
						</a>
					</li>
					<li>
						<a href="sobrenos.html">
							Sobre Nós
						</a>
					</li>
					<li>
						<a href="servicos.html">
							Serviços
						</a>
					</li>
					<li>
						<a href="terapia.html">
							Terapias
						</a>
					</li>
					<li>
						<a href="produtos.html">
							Produtos
						</a>
					</li>
					<li>
						<a href="faleconosco.html">
							Fale Conosco
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>

<!-- {%   Copyright   %} -->

<div class="copyright">
	<div class="container">
		<div class="row">	
			<div class="span12">
				
				&nbsp;&nbsp;<a href="privacidade.html">Politica de Privacidade</a> Pause For Beauty  &copy; 2021. Todos os direitos reservados.&nbsp;&nbsp;

			</div>
		</div>
	</div>
</div>

</div><!-- inner -->
</div><!-- main -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>