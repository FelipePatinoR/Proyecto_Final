<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>
<div>
    <center>
        <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide1"></button>
                <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1"
                    aria-label="Slide2"></button>
                <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2"
                    aria-label="Slide3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active data-mdb-interval='1'">
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide1.jpg" class="d-block w-90" alt="Slide1" />
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: white">ElectroCordoba</h1>
                        <h5 style="color: white">Bienvenid@ a la tienda virtual de la mejor ferretería del país</h5>
                    </div> -->
                </div>
                <div class="carousel-item data-mdb-interval='1'">
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide2.jpg" class="d-block w-90" alt="Slide2" />
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black">Garantía y Calidad</h1>
                        <h5 style="color: black">Productos garantizados y de la mejor calidad</h5>
                    </div> -->
                </div>
                <div class="carousel-item data-mdb-interval='1'">
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide3.jpg" class="d-block w-90" alt="Slide3" />
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: white">Personal Capacitado</h1>
                        <h5>Acérquese para darnos el gusto de atenderlo</h5>
                    </div> -->
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <br>
        <h1 style="color: white;">¿Quiéres saber más de nosotros?</h1>
        <a href="<?php echo base_url()?>Acerca_de"><button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark" >Conócenos</button></a>
    </center>
</div>
<?php echo $this->endSection(); ?>