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
            <form action="connexion.php" method="POST">
         	  <?php
              include "../model/classeform.php";
              $form = new classeform();?>
             <?= $form->saisie("text", "Nom") ?>
             <?= $form->saisie("text", "Prenom") ?>
             <?= $form->saisie("email", "email") ?>
             <?= $form->saisie("text", "login") ?>
             <?= $form->saisie("password", "mdp") ?>
             
        	 <button type="submit" name="valide" class="btn btn-primary">Valider</button>          
           <button type="reset" name="valide" class="btn btn-danger">Annuler</button>          
        </form>      
        </div> 
    </div>  
  </div> 
</body> 
</html> 
 
 
 