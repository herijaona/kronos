<?php include "include/login.php";?>
<?php include "tpl/header.php";?>
<?php    
    if(empty($_SESSION['identity'])) {
        /* header('Location: index.php');
        exit(); */
        echo "
        <script type='text/javascript'>document.location.replace('technicien.php');</script>";
        exit();	 
    }
    $page = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="bg_1"></div>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1>
                <a href="#"><span>Cronos</span></a>
            </h1>
        </div>
        <div class="date">
            Le <?php echo date("d/m/Y");  ?><br>
            <span><?php echo $_SESSION['identity'];?></span><br>
            <span><a href="logout.php">Se deconnecter</a></span>
        </div>
    </div>
</div>
<div class="bg_1"></div>
<div class="bg-technicien">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light nav-tech">
            <!-- <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto tabs">
                <li class="nav-item">
                    <a data-tab="tab-1" class="nav-link current" href="#">Certificats Q19</a>
                </li>
                <li class="nav-item">
                    <a data-tab="tab-2" class="nav-link" href="#">Rapports<br> de controle</a>
                </li>
                <li class="nav-item">
                    <a data-tab="tab-3" class="nav-link disabled" href="#">Armoires electriques</a>
                </li>
                <li class="nav-item">
                    <a data-tab="tab-4" class="nav-link disabled" href="#">Anomalies constatees</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        	<div id="tab-1" class="tab-content current">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="tab-2" class="tab-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="tab-3" class="tab-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="tab-4" class="tab-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
    
    </div>
</div>
<?php include "tpl/footer.php"; ?>
