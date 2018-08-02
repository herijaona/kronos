<?php
session_start ();
$errors = [];
$identity = array('technicien','chefservice','chefetablissement','corporate');
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
                session_start();
                $_SESSION['identity'] = ($_POST['identity']);
                header("Location:technicien.php");   
                exit; 
            }
            if(($_POST['identity']) == $identity['1']){
                header("Location:service.php");   
                exit; 
            }
            if(($_POST['identity']) == $identity['2']){
                header("Location:etablissement.php");   
                exit; 
            }
            if(($_POST['identity']) == $identity['3']){
                header("Location:corporate.php");   
                exit; 
            }
      }
}

?>

