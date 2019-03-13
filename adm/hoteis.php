<!DOCTYPE html>

<html>
       
<script>
    function Mudarestado(el) { // FUNÇÃO ESCONDER
    var display = document.getElementById(el).style.display;
    if(display == "none") {
        document.getElementById(el).style.display = 'block';
    }
    else {
        document.getElementById(el).style.display = 'none';
    }
</script>

<head>
<?php
        include_once('header.html')
    ?>
</head>

<body>
    
    <div class="container" id="minhaDiv">
        <div class="col-md-10 col-md-offset-1">
            <h3 class="titulo" color="white">Hotel Beira Mar - Fortaleza</h3>
            <div class="card">
            <img class="card-img-top" src="../img/hotelx660x494.jpg" alt="Beira Mar - Fortaleza-CE"/>
            <div class="card-body">
                <h5 class="card-title">Hotel Beira-Mar - Fortaleza/CE.</h5>
                <dl class="row">
                    <dt class="col-sm-3">Endereço</dt>
                    <dd class="col-sm-9">Av. Beira Mar, 3130 - Meireles, Fortaleza - CE, 60165-120</dd>

                    <dt class="col-sm-3">Bairro/Estado:</dt>
                    <dd class="col-sm-9">Meireles, Fortaleza - CE, 60165-120</dd>

                    <dt class="col-sm-3">Tel:</dt>
                    <dd class="col-sm-9">(85) 4009-2000</dd>

                    <dt class="col-sm-3 text-truncate">E-Mail Contato:</dt>
                    <dd class="col-sm-9">reserva@beiramar.com.br</dd>
                </dl>
                
               
                <a class="card-link" 
                    href="http://www.hotelbeiramar.com.br/">http://www.hotelbeiramar.com.br/</a>
                <br/><br/>
                <br/>
                <hr/>
                <strong>Código para desconto: BeiraMarGroup</strong>
                <br/>
                <br/>
            </div>
            Veja a localização dos hotéis no <a href="https://goo.gl/maps/FWRjX1f4L9N2"
                target="_blank">mapa do local</a>.
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d995.346080537752!2d-38.49273621946598!3d-3.726098707049927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd65066c932cd7ec8!2sHotel+Beira+Mar!5e0!3m2!1spt-BR!2sbr!4v1552484094135" width="600" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
            <br/>
            <br/> 
            <hr/> 
            </div>
            <strong><h1>Tarifas com desconto:</h1></strong><br/> 
            <form class="form-group" method="post" action="#">
                <div class="radio">
                    <label>
                        <input type="radio" name="SJ" value="SJ" id="radioSJ">
                            Salas Comercial DBL R$ 150,00 com Café incluso.<br/>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="SJ" value="SJ"> 
                            Suite Junior BR R$ 236,00.<br>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="SJD" value="SJD">
                            Suite Junior Duplo BR R$ 270,00.<br>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="SE" value="SE">
                            Suite Executiva SGL R$ 289,00.<br>
                    </label>
                </div>
                <p class="text-left">Taxas adicionais: 5% de ISS e R$ 2,20 de taxa de turismo</p>     
                <button class="btn btn-lg btn-success" onclick="Mudarestado('minhaDiv')"
                    type="button" >Mostrar Valores</button>
                <button class="btn btn-lg btn-warning" type="button"><a href="../adm/login.php">
                    Reservar</a></button>
                <br/>
            <hr/>
                
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php
    include_once('footer.html');
?>
</body>
</html>
