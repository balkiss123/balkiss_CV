<?php

$titre2="Experience professionnelle";
$soustitre2="Expertise en entreprise";

$profession1="chef de projet technologique";
$entreprise1="-@Ets.M DE M";
$periode1="De juillet 2019 a ce jour - http://mde.cm";
$exercice1=" chef du projet annuaire-universel.cm de l'ART;";


$profession2="Fondateur & DT";
$entreprise2="-@Startup chickDev.com";
$periode2="De Juin 2015 a ce jour  -http://chickDev.com";
$exercice2="réalisation de plusieurs sites web et application web et mobiles";


$profession3=" Enseignant -";
$entreprise3="@institut universitaire de la cote ";
$periode3="De Octobre 2011 a ce jour - http://istdi.net";
$exercice3=" 'analyse.UML & MERISE','BD/SQL.ORACLE & MYSQL',...";


$profession4="Développeur en chef -";
$entreprise4="@khayroual group";
$periode4="De Mai 2015 -http://khayroual.com ";
$exercice4="  réalisation de multiples projets logiciels et web,infographie,...";


$profession5="Responsable commercial -";
$entreprise5="@BAO Sarl";
$periode5=" De Décembre 2012 a juin 2013 - http//bao-sarl.com";
$exercice5="definition des strategies commerciales,controle de qualite, suivie...";





?>
<?php
    class experiences{
       public $titre2;
       public $soustitre2;

       public $profession1;
       public $entreprise1;
       public $periode1;
       public $exercice1;


       public $profession2;
       public $entreprise2;
       public $periode2;
       public $exercice2;


       public $profession3;
       public $entreprise3;
       public $periode3;
       public $exercice3;


       public $profession4;
       public $entreprise4;
       public $periode4;
       public $exercice4;


       public $profession5;
       public $entreprise5;
       public $periode5;
       public $exercice5;




        
    function __construct($titre2,$soustitre2,$profession1,$entreprise1,$periode1,$exercice1,$profession2,$entreprise2,$periode2,$exercice2,$profession3,$entreprise3,$periode3,$exercice3,
    $profession4,$entreprise4,$exercice4,$periode4,$periode5,$profession5,$entreprise5,$exercice5)
    {
        $this->titre2=$titre2;
        $this->soustitre2=$soustitre2;

        $this->profession1=$profession1;
        $this->entreprise1=$entreprise1;
        $this->periode1=$periode1;
        $this->exercice1=$exercice1;
        
        $this->profession2=$profession2;
        $this->entreprise2=$entreprise2;
        $this->periode2=$periode2;
        $this->exercice2=$exercice2;
        
        $this->profession3=$profession3;
        $this->entreprise3=$entreprise3;
        $this->periode3=$periode3;
        $this->exercice3=$exercice3;
        
        $this->profession4=$profession4;
        $this->entreprise4=$entreprise4;
        $this->periode4=$periode4;
        $this->exercice4=$exercice4;
        
        $this->profession5=$profession5;
        $this->entreprise5=$entreprise5;
        $this->periode5=$periode5;
        $this->exercice5=$exercice5;
        
    }
    function get_titre2(){
      return $this->titre2;
    }
    function get_soustitre2(){
      return $this->soustitre2;
    }
    function get_profession1(){
        return $this->profession1;
    }
    function get_entreprise1(){
        return $this->entreprise1;
    }
    function get_periode1(){
        return $this->periode1;
    }
    function get_exercice1(){
        return $this->exercice1;
    }
    function get_profession2(){
        return $this->profession2;
    }
    function get_entreprise2(){
        return $this->entreprise2;
    }
    function get_periode2(){
        return $this->periode1;
    }
    function get_exercice2(){
        return $this->exercice1;
    }
    function get_profession3(){
        return $this->profession3;
    }
    function get_entreprise3(){
        return $this->entreprise3;
    }
    function get_periode3(){
        return $this->periode1;
    }
    function get_exercice3(){
        return $this->exercice1;
    }
    function get_profession4(){
        return $this->profession1;
    }
    function get_entreprise4(){
        return $this->entreprise1;
    }
    function get_periode4(){
        return $this->periode1;
    }
    function get_exercice4(){
        return $this->exercice1;
    }
    function get_profession5(){
        return $this->profession1;
    }
    function get_entreprise5(){
        return $this->entreprise1;
    }
    function get_periode5(){
        return $this->periode1;
    }
    function get_exercice5(){
        return $this->exercice1;
    }
    
    }
    $experience = new experiences("Experience professionnelle",
    "Expertise en entreprise",
    "chef de projet technologique",
    "-@Ets.M DE M",
    "De juillet 2019 a ce jour - http://mde.cm",
    " chef du projet annuaire-universel.cm de l'ART;",
    "Fondateur & DT",
    "-@Startup chickDev.com",
    "De Juin 2015 a ce jour  -http://chickDev.com",
    "réalisation de plusieurs sites web et application web et mobiles",
    " Enseignant -",
    "@institut universitaire de la cote ",
    "De Octobre 2011 a ce jour - http://istdi.net",
    " 'analyse.UML & MERISE','BD/SQL.ORACLE & MYSQL',...",
    "Développeur en chef -",
    "@khayroual group",
    "De Mai 2015 -http://khayroual.com ",
    "  réalisation de multiples projets logiciels et web,infographie,...",
    "Responsable commercial -",
    "@BAO Sarl",
    " De Décembre 2012 a juin 2013 - http//bao-sarl.com",
    "definition des strategies commerciales,controle de qualite, suivie...",
    
    );
?>

<div class="haut">
            <div class="titre"> <div class="im1"><img src="IMAGE/IMAGE/real_estate_80px.png" alt="" class="experiencee"></div>
            <div class="titre2"> <strong><?php echo $experience->get_titre2()  ?></strong> <br> <?php echo $experience->get_soustitre2() ?> </div>
            <div class="im2"><img src="IMAGE/IMAGE/menu_2_24px.png" alt="" class="experiencee"></div>
        </div>
        </div>
        <div class="expertise">
            <div class="expert">
                <div class="profession"><label><?php echo $experience->get_profession1()  ?> <strong><?php echo $experience->get_entreprise1 () ?></strong><br>
                    <div class="periode"><label> <?php echo $experience->get_periode1() ?> <label></div>
                     <label> <?php echo $experience->get_exercice1() ?><label> <hr></div>
    
                  
                  
                    <div class="profession"> <label ><?php echo $experience->get_profession2()  ?>  <strong><?php echo $experience->get_entreprise2 () ?> </strong><br> 
                      <div class =periode> <?php echo $experience->get_periode2() ?> </div>
                      <?php  echo $experience->get_exercice2() ?> </label> </div><hr>
    
    
                      <div class="profession"> <?php echo $experience->get_profession3() ?> <strong><?php echo $experience->get_entreprise3() ?></strong><br>
                        <div class="periode"> <?php echo $experience->get_periode3() ?> </div> 
                        <?php echo $experience->get_exercice3() ?> </label><hr>
                  
                  
                        <div class="profession"><label> <?php echo $experience->get_profession4()  ?>  <strong><?php echo $experience->get_entreprise4() ?></strong><br>
                    <div class="periode"> <?php echo $experience->get_periode4() ?></div>
                    <?php echo $exercice4?> </label></div><hr>
                  
                  
                        <div class="profession"><label><?php echo $experience->get_profession5()  ?>  <strong><?php  echo $experience->get_entreprise5() ?> </strong><br>
                      <div class="periode"><?php echo $experience->get_periode5 () ?> </div>
                      <?php echo $experience->get_exercice5() ?></label></div>
                                </div>
            </div>