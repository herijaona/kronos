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
        <nav class="navbar navbar-expand-lg navbar-light nav-tech pl-0 pr-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto tabs">
                <li class="nav-item pl-0 pr-0">
                    <a data-tab="tab-1"  class="nav-link current pic" href="#">Certificats Q19</a>
                </li>
                <li class="nav-item pl-0 pr-0">
                    <a data-tab="tab-2" class="nav-link" href="#">Rapports<br> de controle</a>
                </li>
                <li class="nav-item pl-0 pr-0">
                    <a data-tab="tab-3" class="nav-link disabled" href="#">Armoires <br> electriques</a>
                </li>
                <li class="nav-item pl-0 pr-0">
                    <a data-tab="tab-4" class="nav-link disabled" href="#">Anomalies <br> constatees</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 search-top" type="search" placeholder="Recherche" aria-label="Search">
                <a>
                    <img src="img/search.PNG" alt="">
                </a>
                </form>
            </div>
        </nav>
        <div id="tab-1" class="tab-content current q19-tech mt-4">
            <div class="row text-center mb-70">
                <div class="col-4">
                    <i class="fa fa-file-pdf"></i>
                    <p class="openImg">C-ALG RAM 10/2017</p>
                </div>
                <div class="col-4">
                    <i class="fa fa-file-pdf"></i>
                    <p>C-ALG RAM 10/2017</p>
                </div>
                <div class="col-4">
                    <i class="fa fa-file-pdf"></i>
                    <p>C-ALG RAM 10/2017</p>
                </div>
            </div>
            <div class="row text-center mb-70 pdfu">
                <div class="col-4">
                    <i class="fa fa-file-pdf"></i>
                    <p>C-ALG RAM 10/2017</p>
                </div>
                <div class="col-4">
                    <i class="fa fa-file-pdf"></i>
                    <p>C-ALG RAM 10/2017</p>
                </div>
                <div class="col-4">
                    <i class="fa fa-file-pdf"></i>
                    <p>C-ALG RAM 10/2017</p>
                </div>
            </div>
            <img src="img/téléchargement.png" width="100%" class="down-img" alt="">
            <iframe id="myFrame" style="display:none" width="100%" height="500px"></iframe>
        </div>
        <div id="tab-2" class="tab-content table-responsive pl-0 pr-0">
            <table class="table table-bordered tech-table text-center">
                <thead>
                    <tr>
                        <th scope="col">N° de Rapport</th>
                        <th scope="col">Date de controle</th>
                        <th scope="col">Anomalies <br> <span class="priorite1">Priorite 1</span></th>
                        <th scope="col">Anomalies <br> <span class="priorite2">Priorite 2</span></th>
                        <th scope="col">Anomalies <br> <span class="priorite3">Priorite 3</span></th>
                        <th scope="col">TELECHARGER <br> LE RAPPORT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ALG RAM 10/2017</td>
                        <td>25/07/2018</td>
                        <td class="orange">10/15</td>
                        <td class="red">1/5</td>
                        <td class="red">1/15</td>
                        <td> <a href="upload/test.pdf"><i class="fa fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <td>ALG RAM 09/2017</td>
                        <td>25/07/2018</td>
                        <td class="green">10/15</td>
                        <td class="orange">1/5</td>
                        <td class="red">1/15</td>
                        <td> <a href="upload/test.pdf"><i class="fa fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <td>ALG RAM 08/2017</td>
                        <td>25/07/2018</td>
                        <td class="orange">10/15</td>
                        <td class="red">1/5</td>
                        <td class="orange">1/15</td>
                        <td> <a href="upload/test.pdf"><i class="fa fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <td>ALG RAM 07/2017</td>
                        <td>25/07/2018</td>
                        <td class="red">10/15</td>
                        <td class="green">1/5</td>
                        <td class="red">1/15</td>
                        <td> <a href="upload/test.pdf"><i class="fa fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <td>ALG RAM 06/2017</td>
                        <td>25/07/2018</td>
                        <td class="red">10/15</td>
                        <td class="orange">1/5</td>
                        <td class="orange">1/15</td>
                        <td> <a href="upload/test.pdf"><i class="fa fa-file-pdf"></i></a></td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div id="tab-3" class="tab-content table-responsive pl-0 pr-0">
            <table class="table table-bordered tech-table text-center">
                <thead>
                    <tr>
                        <th scope="col">N° Armoire <br> electrique</th>
                        <th scope="col">Date de controle</th>
                        <th scope="col">N° de Rapport</th>
                        <th scope="col">Anomalies</th>
                        <th scope="col">Date de derniere <br> intervation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ALG-01</td>
                        <td>25/07/2018</td>
                        <td>ALG RAM 10/2017</td>
                        <td class="red">1/5</td>
                        <td>30/11/2018</td>
                    </tr>
                    <tr>
                        <td>ALG-02</td>
                        <td>25/07/2018</td>
                        <td>ALG RAM 09/2017</td>
                        <td class="orange">11/18</td>
                        <td>30/11/2018</td>
                    </tr>
                    <tr>
                        <td>ALG-03</td>
                        <td>25/07/2018</td>
                        <td>ALG RAM 10/2017</td>
                        <td class="red">0/8</td>
                        <td>30/11/2018</td>
                    </tr>
                    <tr>
                        <td>ALG-04</td>
                        <td>25/07/2018</td>
                        <td>ALG RAM 09/2017</td>
                        <td class="green">5/5</td>
                        <td>30/11/2018</td>
                    </tr>
                    <tr>
                        <td>ALG-05</td>
                        <td>25/07/2018</td>
                        <td>ALG RAM 09/2017</td>
                        <td class="green">5/5</td>
                        <td>30/11/2018</td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div id="tab-4" class="tab-content text-center mt-4">
                <ul class="list-inline anom-const">
                    <li class="list-inline-item"><a href="#">Liste des <br> anomalies</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="list-inline-item"><a href="#">Anomalies <br> résolues <br> <img src="img/ok2.PNG" alt=""></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="list-inline-item"><a href="#">Anomalies <br> non résolues <br> <img src="img/del2.PNG" alt=""></a></li>
                </ul>
            </div>
    </div>
</div>
<?php include "tpl/footer.php"; ?>
<script type="text/javascript">
    function openPdf()
    {  
        var omyFrame = document.getElementById("myFrame");
        omyFrame.style.display="block";
        omyFrame.src = "upload/test.pdf";
    }
    $(document).ready(function(){
        $('.openImg').click(function(){
            $('.down-img').css('display','block');
            $('.mb-70').css('display','none');
        });
        $('.pic').click(function(){
            $('.down-img').css('display','none');
            $('.mb-70').css('display','inline-flex');
        });
    });
</script>
