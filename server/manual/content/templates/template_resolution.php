<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  		<title><?php echo PRODUCT_NAME; ?> Documentation</title>
 		<link rel="stylesheet" type="text/css" href="../../css/doc.css">
		<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
		<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />
  		<link href="img/favicon.ico" rel="shortcut icon">
  		<!-- Javascript Libraries -->
  		<script type="text/javascript" src="lib/jquery.pack.js"></script>
  		<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
  		<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
	</head>
	<body>
		<h2>Template Resolution</h2>

  		<p>User can add new template resolution to the <?php echo PRODUCT_NAME; ?> default templates.
  		From the navigation, select Displays > Resolutions. System available resolution list is shown.</p>

   		<p><img alt="Template_Resolution" src="template_resolution.png"
	   	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	   	width="807" height="387"></p>

  		<h2>Edit Resolution</h2>
	<blockquote>
  		<p>To add new resolution</p>
  
  		<ul>
  			<li>click "Add Resolution" button</li>
 			<li>"Edit Resolution" form is loaded</li>
  			<li>Enter the required information</li>
  			<li>Click "Save"</li>
  		</ul>

   		<p><img alt="Template_Edit_Resolution" src="template_edit_resolution.png"
	   	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	   	width="358" height="258"></p>
	   
		<p>Note: The maximum Width/Height value allowed is 800; mainly to limit displayed size during layout design.
  		The final actual Display size is scale from these values.</p>
 	</blockquote>

	<?php include('../../template/footer.php'); ?>
	</body>
</html>