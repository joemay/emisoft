<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=7" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>EMISOFT - Inicio</title>	
    
  <?= link_tag("css/style.css"); ?>
    <?= link_tag("css/jquery.wysiwyg.css"); ?>
    <?= link_tag("css/facebox.css"); ?>
    <?= link_tag("css/visualize.css"); ?>
    <?= link_tag("css/date_input.css"); ?>
	
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->

</head>

<body>
	
	<div id="hld">
	
		<div class="wrapper">		<!-- wrapper begins -->
	
	
			
			<div id="header">
				<div class="hdrl"></div>
				<div class="hdrr"></div>
				
				<h1><a href="#">EMISOFT</a></h1>
				
				<ul id="nav">
					<li><a href="#">Inicio</a></li>
					<li class="active"><a href="#">Pages</a>
						<ul>
							<li><a href="#">List pages</a></li>
							<li><a href="#">Add page</a></li>
							<li><a href="#">More actions</a>
								<ul>
									<li><a href="#">Some action</a></li>
									<li><a href="#">Some action</a></li>
									<li><a href="#">Some action</a>
										<ul>
											<li><a href="#">Some action</a></li>
											<li><a href="#">Some action</a></li>
											<li><a href="#">Some action</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#">Posts</a></li>
					<li><a href="#">Media</a>
						<ul>
							<li><a href="#">List media</a></li>
							<li><a href="#">Add media</a></li>
							<li><a href="#">Something else</a></li>
						</ul>
					</li>
					<li><a href="#">Users</a></li>
				</ul>
				
				<p class="user">Hello, <a href="#">John</a> | <a href="index.html">Logout</a></p>
			</div>		<!-- #header ends -->
			

			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Pages</h2>
					
					<ul>
						<li><a href="#">Edit pages</a></li>
						<li><a href="#">Add page</a></li>
					</ul>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
					<form action="" method="post">
					
						<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
						
							<thead>
								<tr>
									<th width="10"><input type="checkbox" class="check_all" /></th>
									<th>Page title</th>
									<th>Status</th>
									<th>Date created</th>
									<th>Author</th>
									<td>&nbsp;</td>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">Aorem ipsum dolor</a></td>
									<td>Published</td>
									<td>20.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
								
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">Zn ac libero nunc, vel congue neque</a></td>
									<td>Published</td>
									<td>18.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
								
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">Borem ipsum dolor</a></td>
									<td>Published</td>
									<td>20.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
								
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">Aaa In ac libero nunc, vel congue neque</a></td>
									<td>Published</td>
									<td>18.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
								
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">Lorem ipsum dolor</a></td>
									<td>Published</td>
									<td>20.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
								
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">In ac libero nunc, vel congue neque</a></td>
									<td>Published</td>
									<td>18.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
								
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">Lorem ipsum dolor</a></td>
									<td>Published</td>
									<td>20.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
								
								<tr>
									<td><input type="checkbox" /></td>
									<td><a href="#">In ac libero nunc, vel congue neque</a></td>
									<td>Published</td>
									<td>08.03.2010</td>
									<td><a href="#">John Doe</a></td>
									<td class="delete"><a href="#">Delete</a></td>
								</tr>
							</tbody>
							
						</table>
						
						
						
						<div class="tableactions">
							<select>
								<option>Actions</option>
								<option>Delete</option>
								<option>Edit</option>
							</select>
							
							<input type="submit" class="submit tiny" value="Apply to selected" />
						</div>		<!-- .tableactions ends -->
						
						
						
						<div class="pagination right">
							<a href="#">&laquo;</a>
							<a href="#" class="active">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">6</a>
							<a href="#">&raquo;</a>
						</div>		<!-- .pagination ends -->
						
					</form>
					
				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				<div class="bendr"></div>
			</div>		<!-- .block ends -->
			
			

			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Forms</h2>
					
					<form action="" method="post">
						<input type="text" class="text" value="Search" />
					</form>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
					<p class="breadcrumb"><a href="#">Parent page</a> &raquo; <a href="#">Sub page</a> &raquo; <strong>Form page</strong> (breadcrumb)</p>
				
					<div class="message errormsg"><p>An error message goes here</p></div>
					
					<div class="message success"><p>A success message goes here</p></div>
					
					<div class="message info"><p>An informative message goes here</p></div>
					
					<div class="message warning"><p>A warning message goes here</p></div>
					
					
					<form action="" method="post">
						<p>
							<label>Small input label:</label><br />
							<input type="text" class="text small" /> 
							<span class="note">*A note</span>
						</p>
						
						<p>
							<label>Medium input label:</label><br />
							<input type="text" class="text medium error" /> 
							<span class="note error">Error!</span>
						</p>
						
						<p>
							<label>Big input label:</label><br />
							<input type="text" class="text big" />
						</p>
						
						<p>
							<label>Textarea label:</label><br />
							<textarea class="wysiwyg"></textarea>
						</p>
						
						<p>
							<label>Starting date:</label> 
							<input type="text" class="text date_picker" />
							&nbsp;&nbsp;
							<label>Ending date:</label> 
							<input type="text" class="text date_picker" />
						</p>
						
						
						<p><label>Select label:</label> <br />
						
							<select class="styled">
								<optgroup label="Group 1">
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
								</optgroup>
								
								<optgroup label="Group 2">
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
								</optgroup>
								
								<optgroup label="Group 3">
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
								</optgroup>							
							</select></p>
						
												
						<p class="fileupload">
							<label>File input label:</label><br />
							<input type="file" id="fileupload" />
							<span id="uploadmsg">Max size 3Mb</span>
						</p>
																		
						<p>
							<input type="checkbox" class="checkbox" checked="checked" id="cbdemo1" /> <label for="cbdemo1">Checkbox label</label> 
							<input type="checkbox" class="checkbox" id="cbdemo2" /> <label for="cbdemo2">Checkbox label</label>
						</p>
						
						<p><input type="radio" checked="checked" class="radio" /> <label>Radio button label</label></p>
												
						<hr />
						
						<p>
							<input type="submit" class="submit small" value="Submit" />
							<input type="submit" class="submit mid" value="Long submit" />
							<input type="submit" class="submit long" value="Even longer submit" />
						</p>
					</form>
					
					
				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				<div class="bendr"></div>
					
			</div>		<!-- .block ends -->
		
		
			
			<div id="footer">
			
				<p class="left"><a href="#">EMISOFT</a></p>
				
			</div>
		
		
		</div>						<!-- wrapper ends -->
		
	</div>		<!-- #hld ends -->
	
	
	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.img.preload.js"></script>
	<script type="text/javascript" src="js/jquery.filestyle.mini.js"></script>
	<script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="js/jquery.date_input.pack.js"></script>
	<script type="text/javascript" src="js/facebox.js"></script>
	<script type="text/javascript" src="js/jquery.visualize.js"></script>
	<script type="text/javascript" src="js/jquery.visualize.tooltip.js"></script>
	<script type="text/javascript" src="js/jquery.select_skin.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="js/ajaxupload.js"></script>
	<script type="text/javascript" src="js/jquery.pngfix.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

	
</body>
</html>