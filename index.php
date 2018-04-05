<?php get_header(); ?>

<section>
        
        <!--
        
        <div class="w3-content w3-section" style="max-width:500px">
  <p>The w3-animate-fading class animates an element in and out (takes about 10 seconds).</p>
-->
<div class="fl_right clearfix slideShow" style="margin: 10px">
  <img class="mySlides w3-animate-fading" src="<?php echo get_template_directory_uri(); ?>/images/fria_uvodnik.jpg"" style="border-radius: 50%; max-width: 300px">
  <img class="mySlides w3-animate-fading" src="<?php echo get_template_directory_uri(); ?>/images/lisha_uvodnik.jpg"" style="border-radius: 50%; max-width: 300px">
  <img class="mySlides w3-animate-fading" src="<?php echo get_template_directory_uri(); ?>/images/fria_moon.jpg"" style="border-radius: 50%; max-width: 300px">
  
  
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 8000);    
    }
</script>
    
        <h1>Úvodní strana</h1>
        <p>Vítej drahý čtenáři! Právě se nacházíš na stránkách českého online komiksu Smaragdová duše, jenž vypráví příběh světa Manul očima mladé trofijanky putující za pomstou.</p>
        <p> Co je trofijan a jak vypadá? Popis této rasy a podrobnější informace o světě <b>MANUL</b> se dočteš ve stejnojmenné sekci.</p>
        <p>S hlavní hrdiny se seznámíš jak na stránkách komiksu, tak v sekci <b>POSTAVY</b>. Lze zde filtrovat výběr i dle rasy.</p>
        <p>Zajímá tě kdo za tím vším stojí? Nahlédni do stránky <b>AUTOR</b>, kde o mě najdeš informace a kontakt, pokud bys mi rád napsal. </p>
        <p>Děkuji za tvou návštěvu. Doufám, že se ti zde bude líbit a věřím v tvůj brzký návrat.</p>
</section>

<?php get_footer();