<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <!-- HEAD DEFAULTS - START -->
    
      <!-- META DEFAULT -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
      <meta name="robots" content="index, follow" />    
      <meta name="author" content="Isaque Costa" />
      
      <!-- META CLIENT -->
        <meta name="description" content="Isaque Costa - Desenvolvedor Web" />
      <meta name="keywords" content="Designer, site, website, meu site, novo site, como criar um site, responsivo, desenvolvimento, desenvolvimento de sites, aplicativos, android, iOS, iPhone, apple">
      
      <!-- CLIENT TITLE -->
        <title>Ellite Festa - Assessoria e Eventos</title>

        <!-- DEFAULT FAVICONS -->
        <?php $icon = file_get_contents('http://api.isaquecosta.com/websites/defaults/getFavicon.php'); ?>
      
        <link rel="shortcut icon" href="<?=$icon;?>">
        <link rel="apple-touch-icon" href="<?=$icon;?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=$icon;?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=$icon;?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=$icon;?>">
      <!-- END OF DEFAULT CONFIGS -->
    
    <!-- HEAD DEFAULTS - END -->

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- FontsOnline -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- COLORS -->
    <link rel="stylesheet" id="color" href="css/default.css">

    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?=file_get_contents('https://api.isaquecosta.com/websites/slim_scroll.php');?>
  </head>
<body>

<!-- Page Wrapper -->
<div id="wrap"> 
  
  <!-- Header -->
  <header class="header header-menu">
    <div class="container-fluid">
      <div class="logo"> <a href="index.html"><img src="images/logo_black.png" alt=""></a> </div>
      
      <!-- Nav -->
      <div class="fat-nav">
        <div class="fat-nav__wrapper">
          <div class="position-center-center"> <a class="logo" href="index.html"><img src="images/logo.png" alt=""></a>
            <ul>
              <li class="scroll active"><a href="#hme">Início </a></li>
              <li class="scroll"><a href="#abt">Sobre </a> </li>
              <li class="scroll"><a href="#team">Equipe </a></li>
              <li class="scroll"><a href="#wrk">Portfólio </a></li>
              <li class="scroll"><a href="#test">Testemunhos </a></li>
              <li class="scroll"><a href="#fnc">Fornecedores </a></li>
              <li class="scroll"><a href="#price">Planos </a></li>
              <li class="scroll"><a href="#contact">Contato</a></li>
            </ul>
          </div>
        </div>
        <!-- Right Img -->
        <div class="fat-right"> </div>
      </div>
    </div>
  </header>
  <!-- End Header --> 
  
  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider" id="hme">
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="images/slides/slide-bg-1.jpg"  alt="home_slider2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-200" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.06" 
                data-endelementdelay="0.1" 
                data-endspeed="300"
                style="z-index: 5; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">Nós fazemos </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfl tp-resizeme text-color-secondary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-80" 
                data-speed="500" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; max-width: auto; font-weight:900; font-size:140px; letter-spacing:-7px; max-height: auto; white-space: nowrap;">dos seus sonhos </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption sfb tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="50" 
                data-speed="500" 
                data-start="2300" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.08" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">uma Realidade! </div>
          </li>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="images/slides/slide-bg-2.jpg"  alt="slider"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme text-color-secondary"
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-100" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.06" 
                data-endelementdelay="0.1" 
                data-endspeed="300"
                style="z-index: 5; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">Nós entregamos </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfl tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="20" 
                data-speed="500" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; max-width: auto; font-weight:900; font-size:150px; letter-spacing:-7px; max-height: auto; white-space: nowrap;">Excelência. </div>
          </li>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="images/slides/slide-bg-3.jpg"  alt="home_slider2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-100" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.06" 
                data-endelementdelay="0.1" 
                data-endspeed="300"
                style="z-index: 5; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">Nós somos a Ellite!</div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content">

    <!-- SOBRE NÓS -->
    <section id="abt" class="padding-top-100 padding-bottom-100"> 
      <!-- HEADING -->
      <div class="heading-block text-center margin-bottom-60">
        <h2>Quem Somos</h2>
        <hr>
      </div>
      
      <!-- Services -->
      <div class="row"> 
          <!-- Basic Plan -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <p class="about-text">
              Ellite Festa veio para fazer a diferença no mercado de consultoria e planejamento de eventos. Somos uma empresa movida a inovação e desafios, sempre buscando novidades para aprimorar nossos serviços e de forma estritamente profissional proporcionar um dia inesquecível para nossos clientes! Estamos aqui para lhe ajudar a tornar o seu sonho uma realidade.
            </p>
          </div>
          <div class="col-md-3"></div>
      </div>
    </section>

    <!-- ASSESSORIA -->
    <section class="about"> 
      
      <!-- Right Background -->
      <div class="main-page-section half_left_layout">
        <div class="main-half-layout half_right_layout"> </div>
        
        <!-- Left Content -->
        <div class="main-half-layout-container half_right_layout">
          <div class="about-us-con">
            <h3>ASSESSORIA</h3>
            <p>Sabe aquele detalhe que geralmente passa despercebido e que você só lembra quando já virou um problema logo encima da hora?<br> Pois é, deixa com a gente!</p>
            
            <!-- About Content -->
            <div class="panel-group accordion padding-top-20" id="accordion"> 
              
              <!-- According 1 -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Neque porro quisquam est, qui dolorem ipsum</a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia nisl vitae sodales aliquam. Cras bibendum mauris vel consequat tempus. Quisque arcu felis, scelerisque eget egestas a, efficitur ullamcorper dolor. </p>
                  </div>
                </div>
              </div>
              
              <!-- According 2 -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed"> Sed quia non numquam eius modi tempora incidunt</a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia nisl vitae sodales aliquam. Cras bibendum mauris vel consequat tempus. Quisque arcu felis, scelerisque eget egestas a, efficitur ullamcorper dolor. </p>
                  </div>
                </div>
              </div>
              
              <!-- According 3 -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed"> Vel illum qui dolorem eum fugiat quo voluptas</a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia nisl vitae sodales aliquam. Cras bibendum mauris vel consequat tempus. Quisque arcu felis, scelerisque eget egestas a, efficitur ullamcorper dolor. </p>
                  </div>
                </div>
              </div>
              
              <!-- According 4 -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed"> Neque porro quisquam est, qui dolorem ipsum</a> </h4>
                </div>
                <div id="collapsefour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia nisl vitae sodales aliquam. Cras bibendum mauris vel consequat tempus. Quisque arcu felis, scelerisque eget egestas a, efficitur ullamcorper dolor. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FATOS / CONTADORES -->
    <section class="dark our-banafits padding-top-100 padding-bottom-100">
      <div class="container">
        
        <!-- Counter -->
        <div class="counters nolist-style">
          <ul class="row">
            
            <!-- PROPOSALS SENT -->
            <li class="col-sm-3"> <i class="icon-wine"></i> <span class="counter" >100</span><span>+</span>
              <p class="text-white">Eventos Realizados</p>
            </li>
            <!-- PROPOSALS SENT -->
            <li class="col-sm-3"> <i class="icon-clock"></i> <span class="counter">3</span> ANOS
              <p class="text-white">de mercado</p>
            </li>
            <!-- AWARDS WON -->
            <li class="col-sm-3"> <i class="icon-briefcase"></i> <span class="counter">180</span><span>+</span>
              <p class="text-white">Fornecedores</p>
            </li>
            <li class="col-sm-3"> <i class="icon-map"></i> <span class="counter">25</span><span>+</span>
              <p class="text-white">Cidades</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- EQUIPE - YOU CAN FIND IT ON disabled.html -->
    
    <!-- GALERIA -->
    <section id="wrk" class="portfolio padding-top-100 padding-bottom-100">
      <div class="container"> 
        <!-- Heading Block -->
        <div class="heading-block text-center margin-bottom-100">
          <h2>Galeria de Eventos</h2>
          <hr>
        </div>
      </div>
      <div class="container-fluid no-padding"> 
        
        <!-- PORTOFLIO ITEMS FILTER -->
        <div class="text-center">
          <div id="js-filters-awesome-work" class="cbp-l-filters-buttonCenter filter-style-3">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todos
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".brand" class="cbp-filter-item"> 15 ANOS
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".web" class="cbp-filter-item"> CASAMENTOS
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".mob-app" class="cbp-filter-item">FORMATURAS
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".photo" class="cbp-filter-item"> EMPRESARIAL
              <div class="cbp-filter-counter"></div>
            </div>
          </div>
        </div>
        
        <!-- Item Start -->
        <div id="js-grid-awesome-work" class="no-space col-4 text-left"> 
          
          <!-- Item 1 -->
          <div class="cbp-item col-md-6 web mob-app photo ui">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-1.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045 <span>Rebecca & Isaque</span> <a href="images/portfolio/img-1.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 2 -->
          <div class="cbp-item col-md-3 brand web mob-app">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-2.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045<span>Allan & Luiza</span> <a href="images/portfolio/img-2.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 3 -->
          <div class="cbp-item col-md-3 web photo ui">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-3.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045 <span>Rebecca & Isaque</span> <a href="images/portfolio/img-3.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 4 -->
          <div class="cbp-item col-md-6 mob-app photo ui">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-4.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045 <span>Allan & Luiza</span> <a href="images/portfolio/img-8.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 5 -->
          <div class="cbp-item col-md-3 mob-app photo">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-5.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045 <span>Hugo & Alice</span> <a href="images/portfolio/img-5.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 6 -->
          <div class="cbp-item col-md-6 brand web mob-app">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-6.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045 <span>Yuri & Mariza</span> <a href="images/portfolio/img-7.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 7 -->
          <div class="cbp-item col-md-6 brand web mob-app">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-7.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045 <span>Yuri & Mariza</span> <a href="images/portfolio/img-7.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 8 -->
          <div class="cbp-item col-md-3 mob-app photo">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="images/portfolio/img-8.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">65/48/2045 <span>Hugo & Alice</span> <a href="images/portfolio/img-5.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> <a href="ajax-work/project1.html" class="cbp-singlePage link" rel="nofollow"><i class="icon-link"></i> </a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        
        <!-- LOAD MORE -->
        <div class="text-center margin-top-50 animate fadeInUp" data-wow-delay="0.4s">
          <div id="js-loadMore-awesome-work"> <a href="ajax-work/loadMore-portfolio-1.html" class="cbp-l-loadMore-link btn" rel="nofollow"> <span class="cbp-l-loadMore-defaultText">CARREGAR MAIS</span> <span class="cbp-l-loadMore-loadingText">CARREGANDO...</span> <span class="cbp-l-loadMore-noMoreLoading">#- FIM -#</span> </a> </div>
        </div>
      </div>
    </section>

    <!-- TESTEMUNHOS -->
    <section id="test" class="dark testimonial padding-bottom-100 padding-top-100">
      <div class="container"> 
        <!-- Heading Block -->
        <div class="heading-block text-center margin-bottom-30">
          <h2>O que nossos clientes dizem ?</h2>
          <hr>
        </div>
        
        <!-- Slider -->
        <div id="testi-slide"> 
          <!-- Slide -->
          <div class="item"> 
            <!-- avatar <i class="icon-profile-male"></i> -->             
            <p>Passando aqui pra agradecer por toda acessória e carinho que vocês tiveram conosco,  😻muito obrigada por tudo , não mediu esforços pra fazer nosso dia mais lindo e inesquecível  . Vocês são demais , todos atenciosos  e cuida da gente de uma maneira muito especial , deixando tudo de uma maneira mais leve ✨😻Obrigada Ellite Cerimonial!!!</p>
            <h6>Paula & Charles</h6>
            <span>Casamento - 19/01/2019</span> </div>
          
          <!-- Slide -->
          <div class="item"> 
            <p>Oie Yuri boa tarde 🤗 vim aqui agradecer você e sua equipe pela dedicação , companheirismo e organização no meu casamento ,eu e Alef ficamos muito felizes pelo trabalho de vocês ❤</p>
            <h6>Paloma & Alef</h6>
            <span>Casamento - 04/03/2019</span> </div>
          
          <!-- Slide -->
          <div class="item"> 
            <p>Gostaríamos de agradecer todos da equipe ellite cerimonial por ter feito todo perfeito em meu casamento,foi além do que eu imaginava, agradeço pela dedicação que vcs estiveram com os meus convidados, pelo carinho q vcs tiveram com agente, muitas pessoas elogiaram vcs, vcs estão de parabéns por tudo. E a decoração ficou um arraso.obg ellite cerimonial por tudo que vcs fizeram pra nós, foi um casamento perfeito.desde já agradeço. Que Deus continue abençoando vcs 😘❤😍😍😍</p>
            <h6>Debley & Alan</h6>
            <span>Casamento - 17/11/2018</span> </div>
          
          <!-- Slide -->
          <div class="item"> 
            <p>Agradecendo pelo insta, mas ja agradeci pelo Whatsapp rsrs vcs são um verdadeiro sucesso, profissionais,competentes, fizeram do meu dia de noiva excelente, qria ser noiva todo sábado so pra ser pararicada assim!! Obrigada por tudo super indico smp 😍🔝</p>
            <h6>Renata & Douglas</h6>
            <span>Casamento - 08/12/2018</span> </div>
          
          <!-- Slide -->
          <div class="item"> 
            <p>Yuri passando para agradecer pela assistência no meu dia, realmente surpreendeu a todos, tanto vc quanto as meninas, foi tudo maravilhoso👏🏻👏🏻👏🏻😍😍😍  e com certeza indicaria o seu trabalho pra outras pessoas, como disse ficamos surpreendidos e não tenho nada a reclamar, obrigada ❤❤</p>
            <h6>Isabela & Eduardo</h6>
            <span>Casamento - 22/02/2019</span> </div>
        </div>
      </div>
    </section>

    <!-- Let’s talk  -->
    <section class="let-talk-sec" data-stellar-background-ratio="0.5">
      <div class="container">
        <h1>Vamos conversar sobre o seu grande dia!</h1>
        <a href="https://api.whatsapp.com/send?phone=5531992941447&text=Ol%C3%A1%2c%20gostaria%20de%20conhecer%20mais%20sobre%20os%20seus%20servi%C3%A7os!" target="_blank" class="btn btn-whatsapp margin-top-50"> <i class="ion-social-whatsapp"></i> ABRIR O WHATSAPP</a> </div>
    </section>
    
    <!-- APLICATIVO -->
    
    <!-- FORNECEDORES -->
    <section id="fnc" class="light-gry-bg clients-img padding-top-100 padding-bottom-100">
      <div class="container">
        <!-- Heading Block -->
        <div class="heading-block text-center margin-bottom-40">
          <h2>Fornecedores Favoritos</h2>
          <hr>
        </div>

        <div class="clint-sli fornecedores">
          <div class="has-image-hover">
            <a href="pages/isaquecosta.html" class="cbp-singlePage link" rel="nofollow">
              <img class="image" src="images/fornecedores/img-1.png" alt="" >
              <img class="image-hover" src="images/fornecedores/img-1-h.png" alt="" ></a>
          </div>
          <div class="has-image-hover">
            <a href="pages/isaquecosta.html" class="cbp-singlePage link" rel="nofollow">
              <img class="image" src="images/fornecedores/img-2.png" alt="" >
              <img class="image-hover" src="images/fornecedores/img-2-h.png" alt="" ></a>
          </div>
          <div class="has-image-hover">
            <a href="pages/isaquecosta.html" class="cbp-singlePage link" rel="nofollow">
              <img class="image" src="images/fornecedores/img-3.png" alt="" >
              <img class="image-hover" src="images/fornecedores/img-3-h.png" alt="" ></a>
          </div>
          <div class="has-image-hover">
            <a href="pages/isaquecosta.html" class="cbp-singlePage link" rel="nofollow">
              <img class="image" src="images/fornecedores/img-4.png" alt="" >
              <img class="image-hover" src="images/fornecedores/img-4-h.png" alt="" ></a>
          </div>
          <div class="has-image-hover">
            <a href="pages/isaquecosta.html" class="cbp-singlePage link" rel="nofollow">
              <img class="image" src="images/fornecedores/img-5.png" alt="" >
              <img class="image-hover" src="images/fornecedores/img-5-h.png" alt="" ></a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- PLANOS -->
    <section id="price" class="pricing dark style-2 padding-top-100  padding-bottom-80">
      <div class="container"> 
        
        <!-- Heading Block -->
        <div class="heading-block text-center margin-bottom-100">
          <h2>Planos & Vantagens</h2>
          <hr>
        </div>

        <div class="row"> 
          <!-- Basic Plan -->
          <div class="col-md-3 margin-bottom-30">
            <ul class="pricing-table">
              <li class="title text-copper">BRONZE
                <div class="price"><span class="currency">R$</span>1.200</div> <!-- <span class="period">em até 3x.</span> -->
              </li>
              <li class="bullet-item">2 Cerimonialistas</li>
              <li class="bullet-item">1 Coordenador</li>
              <li class="bullet-item">*Chuva de Prata</li>
              <li class="bullet-item">*Lágrimas de Alegria</li>
              <li class="bullet-item">*Gravata para brincadeira</li>
              <li class="cta-button"><a class="btn btn-copper" href="https://api.whatsapp.com/send?phone=5531992941447&text=Olá%2c%20gostaria%20de%20conhecer%20mais%20sobre%20o%20PACOTE%20BRONZE!">CONTRATAR</a></li>
            </ul>
          </div>
          
          <!-- Basic Plan -->
          <div class="col-md-3 margin-bottom-30">
            <ul class="pricing-table">
              <li class="title text-silver">PRATA
              <div class="price"><span class="currency">R$</span>1.600</div> <!-- <span class="period">em até 3x.</span> -->
              </li>
              <li class="bullet-item">3 Cerimonialistas</li>
              <li class="bullet-item">1 Coordenador</li>
              <li class="bullet-item">*Chuva de Prata</li>
              <li class="bullet-item">*Lágrimas de Alegria</li>
              <li class="bullet-item">*Gravata para brincadeira</li>
              <li class="cta-button"><a class="btn btn-silver" href="https://api.whatsapp.com/send?phone=5531992941447&text=Olá%2c%20gostaria%20de%20conhecer%20mais%20sobre%20o%20PACOTE%20PRATA!">CONTRATAR</a></li>
            </ul>
          </div>
          
          <!-- Premium Plan -->
          <div class="col-md-3 margin-bottom-30">
            <ul class="pricing-table">
              <li class="title text-gold">OURO
              <div class="price"><span class="currency">R$</span>2.000</div> <!-- <span class="period">em até 3x.</span> -->
              </li>
              <li class="bullet-item">3 Cerimonialistas</li>
              <li class="bullet-item">1 Coordenador</li>
              <li class="bullet-item">1 Segurança</li>
              <li class="bullet-item">*Chuva de Prata</li>
              <li class="bullet-item">*Lágrimas de Alegria</li>
              <li class="bullet-item">*Gravata para brincadeira</li>
              <li class="cta-button"><a class="btn btn-gold" href="https://api.whatsapp.com/send?phone=5531992941447&text=Olá%2c%20gostaria%20de%20conhecer%20mais%20sobre%20o%20PACOTE%20OURO!">CONTRATAR</a></li>
            </ul>
          </div>
          
          <!-- Premium Plan -->
          <div class="col-md-3 margin-bottom-30">
            <ul class="pricing-table">
              <li class="title text-diamond">DIAMANTE
              <div class="price"><span class="currency">R$</span>3.500</div> <!-- <span class="period">em até 3x.</span> -->
              </li>
              <li class="bullet-item">4 Cerimonialistas</li>
              <li class="bullet-item">1 Coordenador</li>
              <li class="bullet-item">2 Seguranças</li>
              <li class="bullet-item">1 Aux. Toilet</li>
              <li class="bullet-item">*Chuva de Prata</li>
              <li class="bullet-item">*Lágrimas de Alegria</li>
              <li class="bullet-item">*Gravata para brincadeira</li>
              <li class="cta-button"><a class="btn btn-diamond" href="https://api.whatsapp.com/send?phone=5531992941447&text=Olá%2c%20gostaria%20de%20conhecer%20mais%20sobre%20o%20PACOTE%20DIAMANTE!">CONTRATAR</a></li>
            </ul>
          </div>
        </div>

        <div class="row"> 
          <!-- Basic Plan -->
          <div class="col-md-12 margin-bottom-30">
            <ul class="pricing-table">
              <li class="title" style="padding-bottom: 10px;">Observações Importantes!</li>
              <li class="bullet-item">Formas de Pagamento: Dinheiro, Cartão de Débito, Cartão de Crédito e Boleto.</li>
              <li class="bullet-item">Para parcelamento, os valores deverão ser consultados.</li>
              <li class="bullet-item">Em todos os pacotes, a reserva da data é feita mediante o pagamento de 50% do valor.</li>
            </ul>
          </div>
        </div>

      </div>
    </section>

  </div>
  <!-- End Content --> 
  
  <!-- Footer -->
  <footer id="contact" class="footer">
    <div class="container"> 
      
      <!-- Heading Block -->
      <div class="heading-block text-center margin-bottom-30">
        <h2>Fale Conosco</h2>
        <hr>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="container">

      <!-- Services -->
      <ul class="row  margin-bottom-30">        
        <li class="col-sm-6">
          <a href="pages/orcamento.html" class="cbp-singlePage link" rel="nofollow">
            <div class="services">
              <div class="service-part"> <i class="flaticon-monitor animate fadeInLeft" data-wow-delay="0.4s"></i>
                <h6>Faça seu Orçamento</h6>
                <p>Preencha um pequeno formulário que lhe retornaremos em breve.</p>
              </div>
            </div>
          </a>
        </li>
        <li class="col-sm-6">
          <a href="pages/trabalhe_conosco.html" class="cbp-singlePage link" rel="nofollow">
            <div class="services">
              <div class="service-part"> <i class="flaticon-group-of-students  animate fadeInLeft" data-wow-delay="0.4s"></i>
                <h6>Trabalhe Conosco</h6>
                <p>Faça parte da nossa equipe, nosso banco de talentos está sempre aberto.</p>
              </div>
            </div>
          </a>
        </li>
      </ul>

      <div class="row"> 
        
        <!-- Contact Form -->
        <div class="col-md-6">
          <div class="contact">
            <h6>Mande-nos uma Mensagem</h6>
            
            <!-- Success Msg -->
            <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Obrigado. Retornaremos em breve.</div>
            
            <!-- FORM -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <ul class="row">
                <li class="col-sm-6">
                  <label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                  </label>
                </li>
                <li class="col-sm-6">
                  <label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Sua mensagem para nós..."></textarea>
                  </label>
                </li>
                <li class="col-sm-12">
                  <button type="submit"  value="submit" id="btn_submit" onClick="proceed();">ENVIAR</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
        <div class="col-md-6"> 
          
          <!-- Endereço -->
          <div class="row">
            <div class="col-xs-6">
              <h6>Endereço</h6>
              <p>Rua Madressilva, 348 <br>
                Esperânça, Ipatinga - MG</p>
              
              <!-- Social Icons -->
              <h6 class="margin-top-30">Segue lá!</h6>
              <div class="social-icons"> <a href="https://instagram.com/ellitecerimonial" target="_blank"><i class="ion-social-instagram"></i></a> <a href="https://fb.com/ellitefestaeventos/" target="_blank"><i class="ion-social-facebook"></i></a> <a href="#." target="_blank"><i class="ion-social-twitter"></i></a> </div>
            </div>
            
            <!-- Contatos -->
            <div class="col-xs-6">
              <div class="office-info">
                <h6>Contatos</h6>
                <p><i class="icon-call-in text-color-primary"></i> (31) 9 9294 1447</p>
                <p><i class="icon-envelope text-color-primary"></i> contato@ellitefesta.com.br</p>
                <p><i class="icon-global text-color-primary"></i> www.ellitefesta.com.br</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Map -->
    <section class="map-block">
      <iframe class="map-wrapper" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.1042361582896!2d-42.576966858083!3d-19.469885415537625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xafff9135d1b2e3%3A0xc5a198e45670d1ee!2sRua+Madressilva%2C+348+-+Esperan%C3%A7a%2C+Ipatinga+-+MG%2C+35162-332!5e0!3m2!1spt-BR!2sbr!4v1552187616186" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    
    <!-- Rights -->
    <div class="rights">
      <div class="container">
        <?=file_get_contents('http://api.isaquecosta.com/websites/defaults/getFooter.php?type=light');?>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper -->

  <!-- LOADER -->
  <div id="loader">
    <div class="loader">
      <div class="position-center-center"> <img src="images/logo.png" alt="">
        <div class="loading">
          <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScripts --> 
  <script src="js/vendors/jquery/jquery.min.js"></script> 
  <script src="js/vendors/wow.min.js"></script> 
  <script src="js/vendors/bootstrap.min.js"></script> 
  <script src="js/vendors/jquery.cubeportfolio.min.js"></script> 
  <script src="js/vendors/own-menu.js"></script> 
  <script src="js/vendors/jquery.sticky.js"></script> 
  <script src="js/vendors/owl.carousel.min.js"></script> 
  <script src="js/vendors/jquery.fatNav.min.js"></script>
  <script src="js/vendors/jquery.mb.YTPlayer.js"></script> 

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
  <script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
  <script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
  <script src="js/main.js"></script>
</body>
</html>