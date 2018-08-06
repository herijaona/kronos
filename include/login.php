<?php
@ob_start();
session_start ();?>
<?php
$errors = [];
$identity = array('technicien','chefdeservice','responsablehse','directeurusine','corporate');
$mdp ='motdepasse';
if (isset($_POST['submit']) && (!empty($_POST['submit']))) {
      if(!in_array(($_POST['identity']), $identity, true) || ($_POST['mdp']) != $mdp){
        if (empty($_POST['identity']) && empty($_POST['mdp'])){
            $errors['identity'] = 'Identifiant ou mot de passe vide!';
        }else{
        $errors['identity'] = 'Identifiant ou mot de passe incorrect!';
        }
      }   
      if(($_POST['mdp']) == $mdp){
          if(($_POST['identity']) == $identity['0']){
                /* session_start(); */
                $_SESSION['identity'] = ($_POST['identity']);
                /* header("Location:technicien.php");   
                exit; */ 
                echo "
                <script type='text/javascript'>document.location.replace('technicien.php');</script>";
                exit();	 
            }
            if(($_POST['identity']) == $identity['1']){
                $_SESSION['identity'] = ($_POST['identity']);
                echo "
                <script type='text/javascript'>document.location.replace('chefdeservice.php');</script>";
                exit();	 
            }
            if(($_POST['identity']) == $identity['2']){
                $_SESSION['identity'] = ($_POST['identity']);
                echo "
                <script type='text/javascript'>document.location.replace('responsablehse.php');</script>";
                exit();	 
            }
            if(($_POST['identity']) == $identity['3']){
                $_SESSION['identity'] = ($_POST['identity']);
                echo "
                <script type='text/javascript'>document.location.replace('directeurusine.php');</script>";
                exit();	
            }
            if(($_POST['identity']) == $identity['4']){
                $_SESSION['identity'] = ($_POST['identity']);
                echo "
                <script type='text/javascript'>document.location.replace('corporate.php');</script>";
                exit();	 
            }
      }
}

?>
