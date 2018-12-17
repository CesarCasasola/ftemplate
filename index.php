<?php defined('_JEXEC') or die('Restricted access'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->language;?>">
<head>
    <jdoc:inclue type="head"/>
    <meta charset="utf-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css"/>
  	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/<?php echo $this->template?>.css"
        type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">


</head>
<body>
    <jdoc:include type="modules" name="top"/>
    <jdoc:include type="component"/>
  	<jdoc:include type="modules" name="left"/>
    <jdoc:include type="modules" name="bottom"/>
  
  	<script type="text/javascript">
  		window.onload = function() {
          console.log('onload');
          document.getElementById('btn-menu').onclick = ()=> {
            console.log('onclick');
            document.getElementById('mn-items').classList.toggle('active');
          } 
        }
  	</script>    
</body>
</html>
