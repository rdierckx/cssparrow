<?php require "lib/markdown.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>Style</title>

  <link rel="stylesheet" media="screen" href="../css/cssparrow_min.css">
  <link rel="stylesheet" media="screen" href="../css/cssparrow_min.css">
  <meta name="viewport" content="width=device-width">
  <script src="../js/module/panel_nav.js"></script>
</head>
    
<body class="my-elements-page"> 
	<aside class="panel-nav--panel dark-color">
		<nav>
			<ul class="reset-list box">
			    <li><a class='text-white uppercase' href="layout.php">Layout</a></li>
			    <li><a class='text-white uppercase' href="style.php">Style</a></li>
			    <li><a class='text-white uppercase' href="font.php">Font &amp; Form</a></li>
			</ul>
		</nav>
	</aside>
    <div class="container-wrapper panel-nav--pt">
		<header class="nav-bar">
			<div class="v-middle-box">
				<div>
					<a class="panel-nav--btn text-default" href="#">
						<span class="menu-icon ml1 text-big">☰</span>
						<h1 class="h3-like mt0 mb0 ml1 uppercase inline-b">Style</h1>
					</a>
				</div>
			</div>
		</header>
	    <div class="wrapper pt3">
	    	<div class="row">
				<div class="s-push1 s-column10 m-push2 m-column8">
				    <section>
					    <header class="title-header">
							<h2 class="text-main">Color</h2>
					    </header>
					    <p class="sub-text">Simple color system to set background color easily. With variable.scss file you can set text color behavior to keep the best contrast.</p>
					    <h3><strong>Background color</strong></h3>
					    <div class="mb1">
					    	<div class="t-row">
					    		<div class="column4">
									<div class="box main-color">Main color</div>
								</div>
					    		<div class="column4">
									<div class="box third-color">Third color darken</div>
								</div>
								<div class="column4">
									<div class="box dark-color">Dark color</div>
								</div>
							</div>
							<div class="t-row">
								<div class="column12">
									<div class="box second-color">Second color</div>
								</div>
							</div>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_background_color.text')); ?>
				    	</div>					    	
					    <!--code_end-->

					    <h3><strong>Background alert color</strong></h3>
					    <div class="mb1">
							<div class="t-row">
								<div class="column4">
									<div class="box important-color">Important color</div>
								</div>
								<div class="column4">
									<div class="box error-color">Error color</div>
								</div>
								<div class="column4">
									<div class="box success-color">Success color</div>
								</div>
							</div>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_background_alert.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>

				    <section>
					    <header class="title-header">
							<h2 class="text-main">Button</h2>
					    </header>
					    <h3><strong>Button color</strong></h3>
					    <div>
						    <a href="#" class="btn second-color mb1 mr1">Button Action</a>
						    <a href="#" class="btn main-color mb1 mr1">Button Main</a>
					    	<a href="#" class="btn third-color mb1 mr1">Button Third</a>
							<a href="#" class="btn dark-color mb1 mr1">Button Dark</a>
						</div>
						<div>
						    <a href="#" class="btn important-color mb1 mr1">Button Important</a>
						    <a href="#" class="btn success-color mb1 mr1">Button Success</a>
						    <a href="#" class="btn error-color mb1 mr1">Button Error</a>
					    </div>

					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_btn_color.text')); ?>
				    	</div>					    	
					    <!--code_end-->

					    <header class="title-header">
							<h2 class="text-main">Button border</h2>
					    </header>
					    <h3><strong>Button color</strong></h3>
					    <div>
					    	<a href="#" class="btn-border mb1 mr1">Border button default</a>
						    <a href="#" class="btn-border main-color mb1 mr1">Button main</a>
						    <a href="#" class="btn-border third-color mb1 mr1">Button third</a>
						    <a href="#" class="btn-border dark-color mb1 mr1">Button dark</a>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_btn_border.text')); ?>
				    	</div>					    	
					    <!--code_end-->

					    <h3><strong>Button size</strong></h3>
					    <div class="">
						    <a href="#" class="btn main-color king-size mb1 mr1">King Size</a>
						    <a href="#" class="btn main-color mb1 mr1">Default Size</a>
						    <a href="#" class="btn main-color small-size mb1 mr1">small Size</a>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_btn_size.text')); ?>
				    	</div>					    	
					    <!--code_end-->

					    <h3><strong>Button block</strong></h3>
					    <div class="mb1">
					    	<a href="#" class="btn third-color mb1">Button inherit</a>
						    <a href="#" class="btn main-color btn-block mb1">Button block</a>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_btn_block.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>

				    <section>
					    <header class="title-header">
							<h2 class="text-main">Fluid pictures</h2>
					    </header>
					    <p class="sub-text">Make the image take the full width of his container and preserved ratio</p>
					    <div class="row mb1 text-center">
							<div class="column4">
								<img class="flex-img xs-mb2" src="img/hong_kong_taxi.jpg" alt="thumb"/>
							</div>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_img.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>

				    <section>
					    <header class="title-header">
							<h2 class="text-main">Rounded elements</h2>
					    </header>
					    <div class='clearfix'>
							<div class='f-left rounded1 main-color mr1 mb1' style='height: 50px; width: 50px;'></div>	
							<div class='f-left rounded2 main-color mr1 mb1' style='height: 50px; width: 50px;'></div>	
							<div class='f-left circle-edge main-color mr1 mb1' style='height: 50px; width: 110px;'></div>	
							<div class='f-left circle main-color mr1 mb1' style='height: 50px; width: 50px;'></div>			    	
					    </div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_rounded.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>

				    <section>
					    <header class="title-header">
							<h2 class="text-main">Shadow element</h2>
					    </header>
					    <div class='clearfix'>
							<div class='f-left shadow1 mr1 mb1' style='height: 50px; width: 50px;'></div>	
							<div class='f-left shadow2 mr1 mb1' style='height: 50px; width: 50px;'></div>	
							<div class='f-left shadow3 mr1 mb1' style='height: 50px; width: 50px;'></div>		    	
					    </div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_shadow.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>

				    <section>
					    <header class="title-header">
							<h2 class="text-main">Misc</h2>
					    </header>
					    <h3 class="h4-like"><strong>Box</strong></h3>
					    <div class="mb1">
							<div class="inline-b dark-color">without box</div>
							<div class="box inline-b main-color">with box</div>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_misc.text')); ?>
				    	</div>					    	
					    <!--code_end-->

					    <h3><strong>Bar</strong></h3>
					    <div class="mb1">
							<div class="bar second-color clearfix">
								<div class="f-left ml1">
									<h3 class='inline-b mb0 mt0'>Bar title aligned</h3>	
								</div>
								<div class="f-right mr1">
							    	<a class="btn dark-color" href="#">button</a>
							    	<a class="btn dark-color" href="#">button</a>
							    </div>
							</div>
						</div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/style/sty_misc_bar.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>
				</div>
			</div>
	    </div>
	</div>
</body>
</html>