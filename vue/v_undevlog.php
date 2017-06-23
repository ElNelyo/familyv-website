
<div class="container">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
  <h1><?php echo $unDevlog->get_titre()?></h1>

  </div>
  <div class="panel-body">
    <p><?php echo $unDevlog->get_texte()?></p>
  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">  
    <h3>Ajout</h3>
    <p><?php echo $unDevlog->get_ajout()?></p></li>
    <li class="list-group-item">  
    <h3>Modification</h3>
    <p><?php echo $unDevlog->get_modif()?></p></li>
    <li class="list-group-item">
    <h3>Suppression</h3>
    <p><?php echo $unDevlog->get_suppr()?></p></li>
  </ul>
</div>
</div>