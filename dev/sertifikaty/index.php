<?php $title = 'Сертификаты'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $root='../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?> 

<div class="container">
    <div class="row"><?php include($root."blocks/navbar.php"); ?></div>
</div>

<article>
   <div class="container">
         <h1>Сертификаты</h1>
<?php 
$photo_col='col-md-3';
$photo_alt='Сертификаты строительства, экспертизы и оценки';
include($root."blocks/img.php");
?>
   </div><!-- container -->
</article>
<?php include($root."blocks/footer.php"); ?>