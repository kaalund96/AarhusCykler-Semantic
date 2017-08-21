<!doctype html>
<html style="width: 100%; height: 100%;">
<head>
<meta charset="utf-8">
<!-- Meta tekst for seo -->
<meta name="description" content="Ny cykel eller el-cykel? Aarhus Cykler sælger cykeltilbehør og reservedele fra populære cykelmærker og tilbyder desuden servicetjek og reparationer.">
<meta name="author" content="Aarhus Cykler, Jan Lund Nielsen">
<meta name="Keywords" content="Aarhus, Cykler, El-cykler, Nye Cykler, Reservedele, Citybikes, Damecykel, Cykelhjelm, Herrecykel, cykellås, cykellygter, cykelskærm, kæde, reparation, service, tjek, servicetjek, Jan, byens bedste cykler, staiger, avenue, norden, ebsen, e-fly, abus, yepp, klickflix, BBB, Basil">


<title>Aarhus Cykler</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/fav.gif">

<!--Alle stylesheet & Jquery bliver linket her-->
<link rel="stylesheet" href="css/reset.css"/>
<link rel="stylesheet" href="css/style.css"/>

<!--jQuery libary -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Ek+Mukta:300,400,500,600," rel="stylesheet"/>

</head>


<body>
<!--Alle de sider, som indeholder selve html koden for siden-->
<header id="headermobile">
<?php include 'sektioner/headerM.php';?>
</header>


<header id="headerdesktop">
<?php include 'sektioner/headerD.php';?>
</header>
<?php include 'sektioner/video.php'; ?>


<main>
<section id="service">
<?php include 'sektioner/service.php';?>
</section>

<section id="cykler">
<?php include 'sektioner/cykler.php';?>
	</section> 

<section id="tilbehoer">
<?php include 'sektioner/tilbehoer.php';?>
	</section>

<section id="omos">
<?php include 'sektioner/omos.php';?>
	</section> 
<script>
      $(function () {
        $('form').bind('submit', function (event) {
            event.preventDefault();
          $.ajax({
            type: 'POST',
            url: 'sektioner/mail.php',
            data: $('form').serialize(),
			      success: function () {
              alert('Mailen blev sendt!');
              $("#form")[0].reset();
            }
          });

        });
      });
    </script>
<section itemscope itemtype="http://schema.org/LocalBusiness" itemref="_telephone3 _email4 _address5 _openingHoursSpecification9" id="kontakt">
<?php include 'sektioner/kontakt.php';?>
	</section> 
</main>
	
	
<footer>
<?php include 'sektioner/footer.php';?>
</footer>





<!-----------------------Javascript kommer herfra og ned------------------------------>



<!--jQuery til video baggrunden, tubular plugin --->
	<script type="text/javascript" charset="utf-8" src="JS/jquery.tubular.1.0.js"></script>
    <script type="text/javascript" charset="utf-8" src="JS/index.js"></script>
    
<!--- jquery.nav.js fundet på http://trevordavis.net/blog/jquery-one-page-navigation-plugin 
den tilføjer en class som hedder current, som viser hvilket anchor, som man befinder sig på-->
<script src="JS/jquery.nav.js"></script>

<!-- Her linker vi jquery.nav.js sammen med navigationen på mobil versionen.-->
<script>
	   $(document).ready(function() {
       $('#nav').onePageNav();
       });
</script>

<!-- Her linker vi jquery.nav.js sammen med navigationen på desktopversionen versionen.-->
<script>
	   $(document).ready(function() {
       $('#nav1').onePageNav();
       });
</script>
 
 
 <!--- Her kommer noget javascript, som implementere en funktion, som vi har kladet change. 
 change styre alt det visuelle i burger menuen. --> 
<script src="JS/change.js"></script>

<!-- Her kommer det javascript, som styre side boksende. -->
<script src="JS/sideboks.js"></script>

<!-- Her har vi så en jQuery fil, som sørger for, at navigationen får en baggrundsfarve efter 500px-->
<script src="JS/nav_farve.js"></script>

 <!-- Her kommer scripet for modalbokse til tilbud sektionen-->
 <script type="application/javascript" src="JS/modals1.js"></script> 
 
  <!-- Her kommer scripet for modalbokse til tilbehørsektionen-->
 <script type="application/javascript" src="JS/modals.js"></script>


<!-- Her kommer slider for tilbud og mærker-->
<script type="text/javascript" src="JS/jquery.rotateSlider.js"></script>
<script>$(function() {
  $('#slider').rotateSlider({

  });

	});</script>
<script type="text/javascript" src="JS/jquery.rotateSlider1.js"></script>
<script>$(function() {
  $('#slider1').rotateSlider1({

  });

	});
</script>


<!-- Validator til emailen, så man ikke bare kan skrive hvad man vil.--->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
	  $.validate({
    lang: 'dk'
  });
</script>
</body>
</html>