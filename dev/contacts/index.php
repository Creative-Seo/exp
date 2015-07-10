<?php $title = 'Контакты'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php 

include("../blocks/meta.php");
include("../blocks/header.php");?> 

<div class="container">
    <div class="row"><?php include("../blocks/navbar.php"); ?></div>
</div>



<article>
   <div class="container">
      <div class="row">
         <h1>Контакты</h1>
         <div class="col-md-4">
             <br>
             600000, г.Владимир, Коммунальный спуск, 1 <br><br>
             пн-пт: 9:00-18:00, сб.,вс.-выходной <br><br>
             Телефоны:  +7 (4922) 37-92-57 <br><br>
             <a href="mailto:info@expert-ocenka33.ru">info@expert-ocenka33.ru</a> <br><br>
         </div>
         <div class="col-md-8"></div>



      </div><!-- row -->

      <div class="row">
          <div class="col-md-12">
              <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=xaijgDtjKUD8hdlFDMeMYSTfIs_Wz_z-&width=auto&height=350"></script> 
          </div>
      </div>  

    <div class="row">
    <div class="col-md-8 col-md-push-2 callback">
        <h3>Обратная связь</h3>
        <div class="form-group has-success">
        <input type="text" class="form-control form-control-success floating-label" placeholder="Ваше имя">
        <input type="text" class="form-control floating-label" placeholder="Ваш телефон">
        <input type="text" class="form-control floating-label" placeholder="Ваш e-mail">
        <textarea class="form-control floating-label" placeholder="Ваше сообщение"></textarea>
        </div>
    </div>
  </div>

   </div><!-- container -->
</article>
<?php include("../blocks/footer.php"); ?>