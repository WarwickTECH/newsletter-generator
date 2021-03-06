<?php
	session_start();
		class article {

		public $head;
		public $desc;
		public $further;
		public $URL;
		public $button;
		public $picture;
		
		public function setDescription($description)
		    {
		        $this->desc = $description;
		    }
		public function getDescription()
		    {
		        return $this->desc; 
		    }
		public function setHeading($heading)
		    {
		        $this->head = $heading;
		    }
		public function getHeading()
		    {
		        return $this->head; 
		    }
		public function setFurtherInfo($furtherinfo)
		    {
		        $this->further = $furtherinfo;
		    }
		public function getFurtherInfo()
		    {
		        return $this->further; 
		    }
		public function setURL($newURL)
		    {
		        $this->URL = $newURL;
		    }
		public function getURL()
		    {
		        return $this->URL; 
		    }
		public function setButton($buttontext)
		    {
		        $this->button = $buttontext;
		    }
		public function getButton()
		    {
		        return $this->button; 
		    }
		public function setPictureURL($pictureurl)
		    {
		        $this->picture = $pictureurl;
		    }
		public function getPictureURL()
		    {
		        return $this->picture; 
		    }
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<!-- If you delete this meta tag, the ground will open and swallow you. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<title>WarwickTECH - Newsletter</title>

<link rel="stylesheet" type="text/css" href="stylesheets/email.css" >

</head>

<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#4A4A4A">
	<tr>
		<td></td>
		<td class="header container" align="">

			<!-- /content -->
			<div class="content">
				<table bgcolor="#4A4A4A" >
					<tr>
						<td><a href="http://www.warwick.tech"><img  src="images/warwicktech.png" /></a></td>
						<td align="right"><h6 class="collapse" style="color:white;">Newsletter</h6></td>
					</tr>
				</table>
			</div><!-- /content -->

		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->

<!-- BODY -->
<table class="body-wrap" bgcolor="">
	<tr>
		<td></td>
		<td class="container" align="" bgcolor="#FFFFFF">

			<!-- content -->
			<div class="content">
				<table>
					<tr>
						<td>

							<h1><strong>Newsletter - Week <?php echo $_SESSION["weekno"]?></strong></h1>
							<p class="lead"><?php echo htmlspecialchars($_SESSION["headline"]);?></p>

							<p><img src="images/<?php echo htmlspecialchars($_SESSION["cover"]);?>" /></p>
							<p style="color:#424242;"><?php echo htmlspecialchars($_SESSION["summary"]);?></p>
						</td>
					</tr>
				</table>
			</div>
			<?php
				for ($i = 0; $i <= ($_SESSION["articleno"]-1); $i++) {
				echo '
				<div class="content">
					<table name="'.$i.'" bgcolor="#F0F0F0">
						<tr>
							<td class="small" width="20%"style="vertical-align: top; padding-right:10px;"><img src="images/'.$_SESSION[$i . "a"]->getPictureURL().'"/>
							</td>
							<td>
								<h4>'.$_SESSION[$i . "a"]->getHeading() .'</h4>
								<p style="color:#424242">'. $_SESSION[$i . "a"]->getDescription() .'</p>
								<p style="color:#262626">'.$_SESSION[$i . "a"]->getFurtherInfo().'</p>
								<a class="btn btn-sm" href="'.$_SESSION[$i . "a"]->getURL() .'">'. $_SESSION[$i . "a"]->getButton() .'</textarea> &raquo;</a>
							</td>
						</tr>
					</table>
				</div>';
				}
			?>

		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<!-- /FOOTER -->

</body>
</html>