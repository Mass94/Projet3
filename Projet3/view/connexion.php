<!DOCTYPE html> 
<html> 
<head>
  <title>formulaire clasee</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-cerulean.min.css"> 
</head> 
<body>
  <nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
      <li><font color="white" align="center"><marquee >FORMULAIRE POO</marquee></font></li>
    </ul>
  </nav>
  <div class="col-md-4"></div>
  <div class="row container" >
     <div class="col-md-4">
    <div class="panel panel-primary">
    <div class="panel-heading">Formulaire</div>
    <div class="panel-body">
            <form action="inscrition.php" method="POST">
         	  <?php
              include "../model/classeform.php";
              $form = new classeform();?>
             <?= $form->saisie("text", "login") ?>
             <?= $form->saisie("password", "mdp") ?>
        	 <button type="submit" name="valide" class="btn btn-primary">connexion</button>          
            	<a href="inscription.php" class="btn btn-primary"> Inscription</a>
        </form>      
        </div> 
    </div>  
  </div> 
</body> 
</html> 
 
 
 