
 <div class="container">

    


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
  <a <?php echo "href=\"?page=article&num=".$DernierArticle->get_id()."\" "?>><img src=<?php echo"\"img/".$DernierArticle->get_image().".jpg\""?> alt="Dernier Article"></a>
    </div>
    <!--    -->

    <div class="item">
     <a <?php echo "href=\"?page=dev&num=".$DernierDevlog->get_id()."\" "?>><img src="img/devlog.jpg" alt="Dernier devlog">
    </div>

    <div class="item">
      <a href="?page=media"><img src="img/media.png" alt="Vos médias"></a>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</br>



<div class="row">
  <div class="col-sm-6 col-md-8">
    <div class="thumbnail">

      <?php echo "<img src=\"img/".$DernierArticle->get_image().".jpg\" alt=\"...\">";?>
      <div class="caption">
        <h3>
          <?php echo $DernierArticle->get_titre();?>
        </h3>
        <?php echo"<p><a href=\"?page=article&num=".$DernierArticle->get_id()."\" class=\"btn btn-primary\" role=\"button\">Voir plus</a></p>";?>

      </div>
    </div>
  </div>


 
    <div class="row no-margin-bottom">
     <div class="col-sm-6 col-md-4"> 
     <ul class="collection grey darken-4"> 
     <iframe  id="discordIframe" src="https://discordapp.com/widget?id=227487255319543809&theme=dark" width="97%" height="545" allowtransparency="true" frameborder="0"></iframe> 
     </ul> 
     </div> 

  
  </div>

</div>

<div class="row">
   <div class="col-sm-6 col-md-6"> 
    <div class="panel panel-default">
      <div class="panel-heading"><h2>Toutes les actualités</h2></div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
  </div>

   <div class="col-sm-6 col-md-6"> 
  <div class="panel panel-default">
    <div class="panel-heading"><h2>Tous les devblog</h2></div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  </div>
</div>










