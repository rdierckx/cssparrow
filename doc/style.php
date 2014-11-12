<?php require "lib/markdown.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php
include 'include/head.html';
?>
    
<body> 
    <div class="wrapper mt1">
    	<div class="row">
			<div class="s-push1 s-column10">
				<?php
				include 'include/nav.html';
				?>
			    <section>
				    <header class="title-header">
						<h2 class="text-main">Color</h2>
				    </header>
				    <p class="sub-text text-big">Simple color system to set background color easily. With variable.scss file you can set text color behavior to keep the best contrast.</p>
				    <h3><strong>Background color</strong></h3>
			    	<div class="row">
			    		<div class="column6 s-column4 m-column3">
			    			<div class="doc-box--container shadow2 rounded2 mb1">
								<div class="doc-box--color main-color"></div>
								<span class="text-little">Main color</span>
			    			</div>
						</div>
			    		<div class="column6 s-column4 m-column3">
			    			<div class="doc-box--container shadow2 rounded2 mb1">
								<div class="doc-box--color third-color"></div>
								<span class="text-little">Third color</span>
			    			</div>
						</div>
						<div class="column6 s-column4 m-column3">
							<div class="doc-box--container shadow2 rounded2 mb1">
								<div class="doc-box--color dark-color"></div>
								<span class="text-little">Dark color</span>
							</div>
						</div>
						<div class="column6 s-column4 m-column3">
							<div class="doc-box--container shadow2 rounded2 mb1">
								<div class="doc-box--color second-color"></div>
								<span class="text-little">Second color</span>
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
						<div class="row">
							<div class="column6 s-column4 m-column3">
								<div class="doc-box--container shadow2 rounded2 mb1">
									<div class="doc-box--color important-color"></div>
									<span class="text-little">Important color</span>
								</div>
							</div>
							<div class="column6 s-column4 m-column3">
								<div class="doc-box--container shadow2 rounded2 mb1">
									<div class="doc-box--color error-color"></div>
									<span class="text-little">Error color</span>
								</div>
							</div>
							<div class="column6 s-column4 m-column3">
								<div class="doc-box--container shadow2 rounded2 mb1">
									<div class="doc-box--color success-color"></div>
									<span class="text-little">Success color</span>
								</div>
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
</body>
</html>