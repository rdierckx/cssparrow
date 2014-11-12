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
						<h2 class="text-main">General</h2>
				    </header>
				    <h3><strong>Title</strong></h3>
				    <div class="mb3">
						<h1>Title level 1</h1>
						<h2>Title level 2</h2>
						<h3>Title level 3</h3>
						<h4>Title level 4</h4>
					</div>
				    <h3><strong>Paragraphe</strong></h3>
				    <div class="row mb1">
						<p class='column6'>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<p class='column6 text-big'>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
					</div>
			    </section>
			    <section>
				    <header class="title-header">
						<h2 class="text-main">Form</h2>
				    </header>

				    <h3><strong>Input</strong></h3>
				    <div class="mb2">
						<form action="GET">
							<!-- text -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="input1">input text</label>									
								</div>
								<div class="column10">
									<input name='input1' id='input1' type="text">									
								</div>
							</div>

							<!-- Select -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="select-1">select</label>									
								</div>
								<div class="column10">
		                            <div class='custom-select'>
		                                <select name="case" id="case-choice">
		                                    <option value="frozen-white">Frozen white</option>
		                                    <option value="frozen-white">Black Mamba</option>
		                                    <option value="frozen-white">Frozen white</option>
		                                    <option value="frozen-white">Black Mamba</option>
		                                </select>
		                            </div>  									
								</div>
							</div>

							<!-- date -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="date-1">input date</label>									
								</div>
								<div class="column10">
									<input id='date-1' type="date">										
								</div>
							</div>

							<!-- number -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="number-1">input number</label>									
								</div>
								<div class="column10">
									<input id='number-1' type="number" value='1' min='02'>										
								</div>
							</div>
							
							<!-- checkbox -->
							<div class='t-row mb1'>
                                <label class='custom-checkbox' for="checkbox-1">
                                    <input class='' name='checkbox-1' id='checkbox-1' type="checkbox" checked> 
                                    <span aria-hidden='true' role='presentation' class='check-square mr1'></span>
                                    Checkbox                                
                                </label>
                            </div>

							<!-- radio -->
							<div class='mb1'>
								<p>
	                                <label class='custom-radio' for="radio-1">
	                                    <input class='' name='radio-1' id='radio-1' type="radio" checked> 
	                                    <span aria-hidden='true' role='presentation' class='radio-circle mr1'></span>
	                                    Radio                               
	                                </label>									
								</p>
								<p>
	                                <label class='custom-radio' for="radio-2">
	                                    <input class='' name='radio-1' id='radio-2' type="radio"> 
	                                    <span aria-hidden='true' role='presentation' class='radio-circle mr1'></span>
	                                    Radio                               
	                                </label>									
								</p>
                            </div>

							<div class='row'>
								<div class="column2">
									<span class='text-white'>.</span>									
								</div>
								<div class="column10">
									<a class='f-right btn main-color'href="#">Send</a>								
								</div>
							</div>
						</form>
					</div>

					<h3 class="h4-like">Input size</h3>
					<div class='row mb2'>
						<div class="column12">
							<input type="text">									
						</div>
						<div class="column12">
							<input class='big-input mt1' type="text">									
						</div>
					</div>					

					<h3 class="h4-like">Toggle</h3>
					<div class='row mb2'>
						<div class="column12">
		                    <div class='collapse-input t-row mt1'>
								<div class="toggle">
									<input name='toggle-1' id='toggle-1' type="checkbox">
									<label for="toggle-1">
										<div aria-hidden='true' role='presentation'></div>
									</label>
								</div>
		                    </div>						
						</div>
					</div>

				    <h3 class="h4-like">Input error</h3>
				    <div class="mb2">
						<form action="GET">
							<!-- text -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="input1">input text</label>									
								</div>
								<div class="column10">
									<input class='error' name='input1' id='input1' type="text">									
								</div>
							</div>

							<!-- Select -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="select-1">select</label>									
								</div>
								<div class="column10">
		                            <div class='custom-select'>
		                                <select class='error' name="case" id="case-choice">
		                                    <option value="frozen-white">Frozen white</option>
		                                    <option value="frozen-white">Black Mamba</option>
		                                    <option value="frozen-white">Frozen white</option>
		                                    <option value="frozen-white">Black Mamba</option>
		                                </select>
		                            </div>  									
								</div>
							</div>

							<!-- date -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="date-1">input date</label>									
								</div>
								<div class="column10">
									<input class='error' id='date-1' type="date">										
								</div>
							</div>

							<!-- number -->
							<div class='t-row mb1'>
								<div class="column2 vertical-middle">
									<label for="number-1">input number</label>									
								</div>
								<div class="column10">
									<input class='error' id='number-1' type="number" value='1' min='02'>										
								</div>
							</div>

							<div class='row'>
								<div class="column2">
									<span class='text-white'>.</span>									
								</div>
								<div class="column10">
									<a class='f-right btn main-color'href="#">Send</a>								
								</div>
							</div>
						</form>
					</div>
			    </section>
			</div>
		</div>
	</div>
</body>
</html>