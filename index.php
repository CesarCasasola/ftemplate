<?php defined('_JEXEC') or die('Restricted access'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->language;?>">
<head>
    <jdoc:inclue type="head"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/<?php echo $this->template?>.css"
        type="text/css">
</head>
<body>
    <jdoc:include type="modules" name="top"/>
    <jdoc:include type="component"/>
    <jdoc:include type="modules" name="bottom"/>
</body>
</html>