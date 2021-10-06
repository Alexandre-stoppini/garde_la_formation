<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: Vue/login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['prenom']);
    header("location: Vue/login.php");
}
?>
<?php
include_once "../Vue/header.php";
?>

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