
<?php
    include "include/login.php"; 
    include "tpl/header.php"; 
?>
    <div class="mt-4"></div>
    <div class="header">
        <div class="container">
            <div class="logo">
                <h1>
                    <a href="#"><span>Cronos</span></a>
                </h1>
            </div>
            <div class="date">
               Le <?php echo date("d/m/Y");  ?>
            </div>
        </div>
    </div>
    <div class="mb-4"></div>
    <div class="content">
        <div class="container">
            <p class="welcome-portal">Bienvenu sur Le Portail Cronos</p>
            <?php if($errors) { ?>
                <div class="alert alert-danger">
                    <?php
                        foreach ($errors as $value){ echo $value;} 
                        unset($value);
                    ?>
                </div> 
            <?php } ?>
            <form action="index.php" method="post" class="form-login">
                <input name="identity" type="text" class="form-control" placeholder="Identifiant">
                <input name="mdp" type="password" class="form-control" placeholder="Mot de passe">
                <input type="submit" name="submit" value="OK" class="submit-ok">
            </form>
        <div>
    </div>

<?php include "tpl/footer.php"; ?>
    
