<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: vote.php");
}
?>
<?php global $msg; echo $msg;?>

<div id="mainSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
    <ol class="carousel-indicators">
        <li data-bs-slide-to="0" data-bs-target="#mainSlider" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/7.jpg" alt="slider" class="w-100 h-500" />
            <div class="carousel-caption my-caption">
                <h1>HelloW Aurnab</h1>
                <p>Name:Ali Akbar Aurnab</p>
                <p>Id:2017-2-60-095</p>
                <p>Course:CSE480</p>
                <p>Section:01</p>
            </div>
        </div>
    </div>
    <a href="#mainSlider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    <a href="#mainSlider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
</div>


</body>
<?php include "footer.php";?>
