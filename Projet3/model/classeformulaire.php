<?php
//Classe qui permet la saisie d'un formulaire
class classeform{   
	const EMAIL="email";
	const INPUT="text";
	const MDP="password";
	public function saisie($type="text",$name)
	{
			    if($type==self::EMAIL)
         	  	{
         	  		echo '<div class="form-group">             
         	  		<label class="control-label">'.$name.'</label>             
         	  		<input type="'.$type.'" name="'.$name.'" class="form-control">          
         		    </div> ';
         	  	}else
         	  	if($type==self::MDP){
         	  		echo '<div class="form-group">             
         	  		<label class="control-label">'.$name.'</label>             
         	  		<input type="'.$type.'" name="'.$name.'" class="form-control">          
         		    </div> ';
         	  	}else
				 echo '<div class="form-group">             
         	  	<label class="control-label">'.$name.'</label>             
         	  	<input type="text" name="'.$name.'" class="form-control">          
         	  </div> ';
	}
}	
