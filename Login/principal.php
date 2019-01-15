<?php
session_start();
if ((($_SESSION['pri']) == "Master" || ($_SESSION['pri']) == "Usuario") && $_SESSION["acesso"] == 1){
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/stylehome.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section>
<div class="container">

		<div class="row mbr-justify-content-center">
        <a href="usuarios.php"
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-volume-up fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Controle De <span>Usuarios</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    </div>
                </div>
            </div>
            </a>       
            
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-calendar fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Create
                            <span>An Effective Team</span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-globe fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Launch
                            <span>A Unique Project</span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-trophy fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Achieve <span>Your Targets</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    </div>
                </div>
            </div>

            

            
        </div>

</div>

</section>
</body>
</html>



<?php
}
else{
    echo "<script>window.location='index.php';</script>";
}
?>