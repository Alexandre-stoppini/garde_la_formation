<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: controller/login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['prenom']);
    header("location: controller/login.php");
}
?>
<?php
include_once "../Vue/header.php";
?>
<nav class="py-1">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-2"> <a href="#" class="h5 nav-link">Les demandes</a></div>
            <div class="col-md-2"> <a href="#" class="h5 nav-link">Mes filleuls</a> </div>
            <div class="col-md-4">
                <span id="logo"></span>
            </div>
            <div class="col-md-2"> <a href="#" class="h5 nav-link">Mon profil</a> </div>
            <div class="col-md-2"> <a href="index.php?logout='1'" class="h5 nav-link" id="btn-login">Se déconnecter</a> </div>

        </div>
    </div>
</nav>
<div class="container-fluid p-0">
    <div id="image1">
    </div>
</div>
<div class="container-fluid p-0">
    <div id="image2"></div>
</div>
<div class="container-fluid py-5 px-0" id="image3">
    <div class="row justify-content-center">
        <div class="col-md-5 py-5 mx-3 my-3 profil-card">
            <div class="row">
                <div class="col-md-2 profil-img mx-2"></div>
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat officia illo quibusdam
                        distinctio
                        animi ipsam, ullam nostrum sapiente? Hic ex maiores harum illum iste repudiandae commodi
                        adipisci
                        corporis animi rerum?
                        Voluptas dolore facere doloribus aspernatur culpa odit perspiciatis eius, architecto tempore
                        sunt
                        reprehenderit consectetur unde ipsum. Tempora ipsam minima aut exercitationem dicta. Quo
                        recusandae
                        tenetur officiis? Quis distinctio itaque unde.</p>
                </div>
            </div>

        </div>
        <div class="col-md-5 py-5 mx-3 my-3 profil-card">
            <div class="row">
                <div class="col-md-2 profil-img mx-2"></div>
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat officia illo quibusdam
                        distinctio
                        animi ipsam, ullam nostrum sapiente? Hic ex maiores harum illum iste repudiandae commodi
                        adipisci
                        corporis animi rerum?
                        Voluptas dolore facere doloribus aspernatur culpa odit perspiciatis eius, architecto tempore
                        sunt
                        reprehenderit consectetur unde ipsum. Tempora ipsam minima aut exercitationem dicta. Quo
                        recusandae
                        tenetur officiis? Quis distinctio itaque unde.</p>
                </div>
            </div>

        </div>
        <div class="col-md-5 py-5 mx-3 my-3 profil-card">
            <div class="row">
                <div class="col-md-2 profil-img mx-2"></div>
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat officia illo quibusdam
                        distinctio
                        animi ipsam, ullam nostrum sapiente? Hic ex maiores harum illum iste repudiandae commodi
                        adipisci
                        corporis animi rerum?
                        Voluptas dolore facere doloribus aspernatur culpa odit perspiciatis eius, architecto tempore
                        sunt
                        reprehenderit consectetur unde ipsum. Tempora ipsam minima aut exercitationem dicta. Quo
                        recusandae
                        tenetur officiis? Quis distinctio itaque unde.</p>
                </div>
            </div>

        </div>
        <div class="col-md-5 py-5 mx-3 my-3 profil-card">
            <div class="row">
                <div class="col-md-2 profil-img mx-2"></div>
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat officia illo quibusdam
                        distinctio
                        animi ipsam, ullam nostrum sapiente? Hic ex maiores harum illum iste repudiandae commodi
                        adipisci
                        corporis animi rerum?
                        Voluptas dolore facere doloribus aspernatur culpa odit perspiciatis eius, architecto tempore
                        sunt
                        reprehenderit consectetur unde ipsum. Tempora ipsam minima aut exercitationem dicta. Quo
                        recusandae
                        tenetur officiis? Quis distinctio itaque unde.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include_once "../Vue/footer.php";
?>