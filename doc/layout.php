<?php require "lib/markdown.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>Layout</title>

  <link rel="stylesheet" media="screen" href="../css/cssparrow_min.css">
  <link rel="stylesheet" media="screen" href="overview.css">
  <meta name="viewport" content="width=device-width">
  <script src="../js/module/panel_nav.js"></script>
</head>
    
<body> 
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
						<h1 class="h3-like mt0 mb0 ml1 uppercase inline-b">Layout</h1>
					</a>
				</div>
			</div>
		</header>
	    <div class="wrapper pt1">
	    	<div class="row">
				<div class="s-push1 s-column10">
				    <section id="grid">
					    <header class="title-header">
							<h2 class="text-main">Grid</h2>
					    </header>
					    <p class="sub-text text-big">Cssparrow grid system is fully flexible and responsive. You can manage position and column size to feet on each device. Mix "row" context and "t-row" context to create any layout. Vertical alignement is now easy to implement.</p>
					    <h3><strong>Regular grid</strong></h3>
					    <p class="mb1">use <code class="text-main">.row</code> to create context for <code class="text-main">.colmun(+ column number)</code>. Also use <code class="text-main">s-</code> (tablette screen) and <code class="text-main">m-</code> (desktop screen) prefix to set column behavior for other screen size and device.</p>
					    <div class="row my-grid">
							<div class="column6 s-column2 mb1"><span class="doc-demo--block second-color text-center">2</span></div>
							<div class="column6 s-column2 mb1"><span class="doc-demo--block second-color text-center">2</span></div>
							<div class="column6 s-column2 mb1"><span class="doc-demo--block second-color text-center">2</span></div>
							<div class="column6 s-column2 mb1"><span class="doc-demo--block second-color text-center">2</span></div>
							<div class="column6 s-column2 mb1"><span class="doc-demo--block second-color text-center">2</span></div>
							<div class="column6 s-column2 mb1"><span class="doc-demo--block second-color text-center">2</span></div>
					    </div>
					    <div class="row my-grid">        
							<div class="column6 s-column3 mb1"><span class="doc-demo--block second-color text-center">3</span></div>
							<div class="column6 s-column3 mb1"><span class="doc-demo--block second-color text-center">3</span></div>
							<div class="column6 s-column3 mb1"><span class="doc-demo--block second-color text-center">3</span></div>
							<div class="column6 s-column3 mb1"><span class="doc-demo--block second-color text-center">3</span></div>
					    </div>
					    <div class="row my-grid">
							<div class="column6 s-column4 mb1"><span class="doc-demo--block second-color text-center">4</span></div>
							<div class="column6 s-column4 mb1"><span class="doc-demo--block second-color text-center">4</span></div>
							<div class="column12 s-column4 mb1"><span class="doc-demo--block second-color text-center">4</span></div>
					    </div>
					    <div class="row my-grid">
							<div class="column12 s-column6 mb1"><span class="doc-demo--block second-color text-center">6</span></div>
							<div class="column12 s-column6 mb1"><span class="doc-demo--block second-color text-center">6</span></div>
					    </div>
					    <!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/positioning/pos_grid.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    
					    <h3><strong>Nested grid</strong></h3>
					    <div class="row">        
							<div class="column12"><span class="doc-demo--block second-color text-center mb1">12</span>
							    <div class="row">
									<div class="column6"><span class="doc-demo--block second-color text-center mb1">6</span>
									    <div class="row">
											<div class="column6"><span class="doc-demo--block second-color text-center mb1">6</span></div>
											<div class="column6"><span class="doc-demo--block second-color text-center mb1">6</span></div>
									    </div>
									</div>
									<div class="column6"><span class="doc-demo--block second-color text-center mb1">6</span>
									    <div class="row">
											<div class="column6"><span class="doc-demo--block second-color text-center mb1">6</span></div>
											<div class="column6"><span class="doc-demo--block second-color text-center mb1">6</span></div>
									    </div>
									</div>
							    </div>
							</div>
						</div>
						<!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/positioning/pos_grid_nested.text')); ?>
				    	</div>					    	
					    <!--code_end-->

					    <h3><strong>Table mix grid</strong></h3>
						<div class="mix-grid t-row mb1"> 
							<div class="block"><span class="doc-demo--block second-color text-center">block</span></div>
							<div class="block"><span class="doc-demo--block second-color text-center">block</span></div>
							<div class="block"><span class="doc-demo--block second-color text-center">block</span></div>
							<div class="column4 v-top"><span class="block second-color text-center">4</span></div>
							<div class="column4 v-top"><span class="block second-color text-center">4</span></div>
						</div>
						<!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/positioning/pos_grid_mix.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>

				    <section id="margin">
					    <header class="title-header">
							<h2 class="text-main">Margin</h2>
					    </header>
					    <p class="text-big sub-text">
					    	Inspired by <a href="http://www.knacss.com/">Knacss</a> margin system: 
					    	<ul class="reset-list">
					    		<li><strong>m</strong> = margin </li>
				    			<li><strong>b</strong> = bottom ; <strong>t</strong> = top ; <strong>l</strong> = left ; <strong>r</strong> = right </li>
				    			<li><strong>level</strong> = 1 -> 3 </li>
				    		</ul>
					    </p>
					    <p class="mb1">Use <code class="text-main">s-</code> and <code class="text-main">m-</code> prefix like column system to set margin behavior.</p>
					    <div class="row mb2">
					    	<div class="column2">
						    	<div class="box mb1 main-color">mb1</div>
						    	<div class="third-color">.</div>
					   		</div>
					    	<div class="column2">
						    	<div class="box mb2 main-color">mb2</div>
						    	<div class="third-color">.</div>
					   		</div>
					    	<div class="column2">
						    	<div class="box mb3 main-color">mb3</div>
						    	<div class="third-color">.</div>
					   		</div>
					    	<div class="column2">
					    		<div class="third-color">.</div>
						    	<div class="box mt1 main-color">mt1</div>
					   		</div>
					    	<div class="column2">
					    		<div class="third-color">.</div>
						    	<div class="box mt2 main-color">mt2</div>
					   		</div>
					    	<div class="column2">
					    		<div class="third-color">.</div>
						    	<div class="box mt3 main-color">mt3</div>
					   		</div>
					    </div>
						<!--CODE-->
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/positioning/pos_margin.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>

				    <section id="vertical-centerize">
					    <header class="title-header">
							<h2 class="text-main">Place element vertically</h2>
					    </header>
					    <p class="important-text sub-text">
					    	The front-end developer nightmare 100% accessible 100% CSS thanks to display table. 
					    </p>
		
						<div class="centerize-element--height">
						    <div class="v-middle-box f-width">
								<div class="text-center f-width">
									<!-- element to centerize -->
									<div class='box main-color adjust-wrapper centerize'>
										<span>centerized element</span>
									</div>
								</div>
							</div>
						</div>
						<!--CODE-->				
				    	<div class="mb3 mt1">
							<?= Markdown(file_get_contents('code/positioning/pos_vertical_element.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>
	    
				    <section id="misc">
					    <header class="title-header">
							<h2 class="text-main">Misc</h2>
					    </header>
					    <p class="important-text sub-text">
					    	Most common elements in css framework.
					    </p>

					    <h3 class="h4-like"><strong>Float and clearfix</strong></h3>	
						<!--CODE-->				
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/positioning/pos_misc_float.text')); ?>
				    	</div>					    	
					    <!--code_end-->

					    <h3><strong>Inline-block + vertical-align</strong></h3>	
					    <p>Use <code class="text-main">.v-(top ; bottom ; middle)</code> to play with align.</p>
					    <div class="mb1">
					    	<div class="doc-demo--tallest-block inline-b box third-color">Tallest block</div>
						    <div class="inline-b box main-color v-top">vertical top</div>
						    <div class="inline-b box main-color v-middle">vertical middle</div>
						    <div class="inline-b box main-color v-bottom">vertical bottom</div>
						</div>
						<!--CODE-->				
				    	<div class="mb3">
							<?= Markdown(file_get_contents('code/positioning/pos_misc_inline.text')); ?>
				    	</div>					    	
					    <!--code_end-->
				    </section>
				</div>
			</div>
	    </div>
    </div>
</body>
</html>