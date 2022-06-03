<?php
    $data = simplexml_load_file("Proizvodi.xml");
    $cdovi = [];
    $merchovi = [];
    $knjige = [];
    
    foreach($data->children() as $subject){
        if(isset($subject->CD)){
            foreach($subject->CD as $cd_data){
                $cdovi[] = $cd_data;
            }
        }
        if(isset($subject->merch)){
            foreach($subject->merch as $merch_data){
                $merchovi[] = $merch_data;
            }
        }
        if(isset($subject->knjiga)){
            foreach($subject->knjiga as $knjiga_data){
                $knjige[] = $knjiga_data;
            }
        }
    }
    
?>

<!DOCTYPE html>
    <head>
        <title>Webshop</title>
        <meta charset="UTF-8"/>
        <meta name="keywords" content="Elemental bend"/>
        <meta name="description" content="Stranica o hrvatskom bendu imena Elemental"/>
        <meta name="author" content="Margita Habrun, JMBAG:0246099707"/>
        <meta http-equiv="refresh" content="60"/>
        <link rel="icon" href="Images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
         <!--Google fontovi-->
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fontawesome-free5.13.0-web/css/all.css" />
        <script src="https://kit.fontawesome.com/b05e340512.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <!--Zaglavlje stranice-->
        <header class="row">
            <h1 id="header"><img src="images/logo_invis.png" width="70" height="70" alt="logo" style="vertical-align:middle;">Elemental</h1>
        </header>

        <!--Main-->
        <div class="flex-container">
            <div class="red">
                <div class="stupac">
                    <img src="Images/Merch/cd1.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $cdovi[0]->naziv;?> - CD</h3>
                    <?php echo $cdovi[0]->godina_izdavanja;?>
                    <article class="popust"></br><?php echo $cdovi[0]->cijena;?></article>
                    <?php echo $cdovi[0]->cijena_popust;?>
                    <button class="button"> KUPI </button>

                </div>
                <div class="stupac">
                    <img src="Images/Merch/cd2.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $cdovi[1]->naziv;?> - CD</h3>
                    <?php echo $cdovi[1]->godina_izdavanja;?>
                    <article class="popust"></br><?php echo $cdovi[1]->cijena;?></article>
                    <?php echo $cdovi[1]->cijena_popust;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="Images/Merch/cd3.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $cdovi[2]->naziv;?> - CD</h3>
                    <?php echo $cdovi[2]->godina_izdavanja;?>
                    <article class="popust"></br><?php echo $cdovi[2]->cijena;?></article>
                    <?php echo $cdovi[2]->cijena_popust;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="Images/Merch/cd4.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $cdovi[3]->naziv;?> - CD</h3>
                    <?php echo $cdovi[3]->godina_izdavanja;?>
                    <article class="popust"></br><?php echo $cdovi[3]->cijena;?></article>
                    <?php echo $cdovi[3]->cijena_popust;?>
                    <button class="button"> KUPI </button>
                </div>
            </div>
            <div class="red">
                <div class="stupac">
                    <img src="Images/Merch/majica1.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $merchovi[0]->naziv;?></h3>
                    <?php echo $merchovi[0]->opis;?>
                    </br></br>
                    <?php echo $merchovi[0]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="Images/Merch/majica2.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $merchovi[1]->naziv;?></h3>
                    <?php echo $merchovi[1]->opis;?>
                    </br></br>
                    <?php echo $merchovi[1]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="Images/Merch/majica3.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $merchovi[2]->naziv;?></h3>
                    <?php echo $merchovi[2]->opis;?>
                    </br></br>
                    <?php echo $merchovi[2]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="Images/Merch/majica4.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $merchovi[3]->naziv;?></h3>
                    <?php echo $merchovi[3]->opis;?>
                    </br></br>
                    <?php echo $merchovi[3]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
            </div>
            <div class="red">
                <div class="stupac">
                    <img src="images/Merch/hoodie.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $merchovi[4]->naziv;?></h3>
                    <?php echo $merchovi[4]->opis;?>
                    </br></br>
                    <?php echo $merchovi[4]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="images/Merch/torba1.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $merchovi[5]->naziv;?></h3>
                    <?php echo $merchovi[5]->opis;?>
                    </br></br>
                    <?php echo $merchovi[5]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="images/Merch/torba2.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $merchovi[6]->naziv;?></h3>
                    <?php echo $merchovi[6]->opis;?>
                    </br></br>
                    <?php echo $merchovi[6]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
                <div class="stupac">
                    <img src="images/Merch/biografija.jpg" style="max-width: 100%; padding: 10px;">
                    <h3><?php echo $knjige[0]->naziv;?></h3>
                    <?php echo $knjige[0]->opis;?>
                    </br></br>
                    <?php echo $knjige[0]->cijena;?>
                    <button class="button"> KUPI </button>
                </div>
            </div>
        </div>
        
        <!--Footer-->
        <footer>
            Margita Habrun, 0246099707
            <br/>
            Informatički dizajn
        </footer>
    </body>
</html>