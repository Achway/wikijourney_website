﻿<?php 

if(isset($_COOKIE['lg']))
{

	if($_COOKIE['lg'] == 'en')
		include("./lg/en.php");
	
	else if($_COOKIE['lg'] == 'fr')
		include("./lg/fr.php");

	else //Not normal
	{
		include("./lg/en.php");
		setcookie("lg","en"); //Redefine cookie
	}
}

else 
{
	include("./lg/fr.php");
	setcookie("lg","fr"); //Define cookie
}
	


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

	<title><?php echo _TITLE; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css" />
	<link rel="Shortcut icon" href="./images/design/favicon.ico" />
	

	
	</head>
	<body>
	
	<div id="banniere">
				<table>
					<tr>
						<td><img  id="logoban" src="<?php echo _SRC_IMAGE_LOGO; ?>" alt="Logo" /></td>
						
						<td><p id="languagesBox">
							<a href="action.php?lg=en">English</a><br/>
							<a href="action.php?lg=fr">Français</a>
							</p>
						</td>
						
					</tr>
				</table>
			
			
			<div id="menu">
				<table id="liste_menu.php" style="border-collapse: separate;" >
					<tr>
						<td id="lien_index.php"><a href="index.php"><?php echo _INDEX ;?></a></td>
						<td id="lien_team.php"><a href="team.php"><?php echo _TEAM ;?></a></td>
						<td id="lien_about.php"><a href="about.php"><?php echo _ABOUT ;?></a></td>
						<td id="lien_contact.php"><a href="technical.php"><?php echo _TECHNICAL ;?></a></td>
					</tr>
				</table>
			</div>	
			<?php
			//Colorating the active page
				$nomPage = $_SERVER['PHP_SELF'];
				$reg = '#^(.+[\\\/])*([^\\\/]+)$#';
				$nomPage = preg_replace($reg, '$2', $nomPage); 
			?>
			<script type="text/javascript">
				document.getElementById("lien_" + "<?php echo $nomPage; ?>").style.cssText = "background-color: rgb(137,160,173);";
			</script>
		
		</div>
		<div id="corps">