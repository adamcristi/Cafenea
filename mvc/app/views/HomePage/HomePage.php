<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="http://localhost/www.httpcafe.com/img/coffee-cup.png" type="image/x-icon"/>
        <meta charset="UTF-8">  
        <title>1337-Cafe</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/www.httpcafe.com/css/HomePage.css">
    </head>
    <body>
        <header>
            <a href="http://localhost/www.httpcafe.com/home"> <img id="logo" src="http://localhost/www.httpcafe.com/img/Logo2.jpg" alt="Logo"> </a>
        </header>
        <div class="button">
            <div id="button1">
                <a href="#descriere">Despre noi</a>
            </div>
            <div>
                <a href="http://localhost/www.httpcafe.com/contact">Contact</a>
            </div>
        </div>
        <div id="visit">
            <img src="http://localhost/www.httpcafe.com/img/VisitCaffeImage.jpg" alt="Cafe Image">
            <div>
                <a href="http://localhost/www.httpcafe.com/local" onclick="getLocation()">Viziteaza 1337 Café</a>
                <script type="text/javascript">
                function getLocation() {
                    if(navigator.geolocation) {
                        navigator.permissions.query({name:'geolocation'})
                            .then(function(permissionStatus) 
                            {
                                if(permissionStatus.state == 'prompt' || permissionStatus.state == 'granted') 
                                {
                                    navigator.geolocation.getCurrentPosition(function(position) 
                                    {
                                        document.cookie = "latitude =" + position.coords.latitude;
                                        document.cookie = "longitude =" + position.coords.longitude;
                                        location.href = "http://localhost/www.httpcafe.com/local"
                                    });
                                } 
                                else if(permissionStatus.state == 'denied') 
                                {
                                    alert('The GPS was blocked by the user!');
                                }
                            },  function error(msg) {alert('Please enable your GPS position feature.');},  
                            {maximumAge:10000, timeout:5000, enableHighAccuracy: true});
                        }
                    }
            </script>
            </div>
        </div>
        <div id="descriere">
            <div id="imagine">
                <img src="http://localhost/www.httpcafe.com/img/CoffeeShop.jpg" alt="Coffe Shop">
            </div>
            <div id="text">
                <h1>Povestea Nostra</h1>
                <p><span><strong>1337 Café</strong></span>, un coffee shop care implementeaza conceptul de cafenea de specialitate, a fost lansat recent si se adreseaza in special informaticienilor. Este 100% produs romanesc, pornind de la ideea de a combina utilul (programarea) cu placutul (savurarea unei cafele). Incercam si reusim sa oferim clientilor o gama diversificata de cafea, avand peste 35 specialitati din cafea la alegere. Ai posibilitatea sa servesti la bar cafeaua ta preferata (Perle Noir 100% Arabica, Pure origins Massaya, Pure Origins Columbia, Costa Rica Tarazu si alte cafele de origine), sa achizitionezi pentru acasa din peste 100 tipuri de cafea (boabe, macinata sau instant) sau poti savura o prajitura cu ciocolata belgiana de la Cacao Barry.</p>
            </div>
        </div>
        <footer>
            <p>Proiect realizat de: Vrabie Alin-Stefan si Adam Cristian</p>
            <p>Contact information: <a href="mailto:alinvs09@gmail.com">alinvs09@gmail.com</a>.</p>
        </footer>
    </body>
</html>