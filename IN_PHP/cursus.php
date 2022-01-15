<?php

$titre="Cursus academique";
$diplome="diplome et formation certifiante";
$DIPET="DIPET 2 electrotechnique";
$ENST="@ENST de Douala";
$DATE="Ao�t 2016 -gestion d'�clairage d'une maison(Android+Arduino)";
$CERTIFICATION="Oracle certifified Association ";
$entreprise="@Kentnix Sarl";
$annee=" Mars 2009 - Oracle Database 11g Administration";
$CERTIFICATION2="Oracle SQL Certified ";
$annee2="D�cembre 2008 -SQL2,sql3,XML";
$licence="Licence Professionnelle -";
$DIT="@Douala Institut of tech.";
$annee3="Octobre 2008 - Tecommunication & reseaux ";
$diplome2="DEC/BTS - ";
$CCNB="@CCNB Dieppe canada";
$annee4="Septembre 2007 - programmation appliqu� pour internet";
$bac="Baccalaur�at -";
$etablissement=" @Lyc�e tchniquede douala bassa";
$annee5="Juin 2005 - electrotechnique,mention BIEN(major de centre)";


?>
<?php
    class cursus{
      public  $titre;
      public $diplome;
      public $DIPET;
      public $ENST;
      public $DATE;
      public $CERTIFICATION;
      public $entreprise;
      public $annee;
      public $CERTIFICATION2;
      public $annee2;
      public $licence;
      public $DIT;
      public $annee3;
      public $diplome2;
      public $CCNB;
      public $annee4;
      public $bac;
      public $etablissement;
      public $annee5;


        
    function __construct($titre,$diplome,$DIPET,$ENST,$DATE,$CERTIFICATION,
    $entreprise,$annee,$CERTIFICATION2,$annee2,$licence,$DIT,
    $annee3,$diplome2,$CCNB,$annee4,$bac,$etablissement,$annee5)
    {
        $this->titre=$titre;
        $this->diplome=$diplome;
        $this->DIPET=$DIPET;
        $this->ENST=$ENST;
        $this->DATE=$DATE;
        $this->CERTIFICATION=$CERTIFICATION;
        $this->entreprise=$entreprise;
        $this->annee=$annee;
        $this->CERTIFICATION2=$CERTIFICATION2;
        $this->annee2=$annee2;
        $this->licence=$licence;
        $this->DIT=$DIT; 
        $this->annee3=$annee3;
        $this->diplome2=$diplome2;
        $this->CCNB=$CCNB;
        $this->annee4=$annee4;
        $this->bac=$bac;
        $this->etablissement=$etablissement;
        $this->annee5=$annee5;
        
    }
    function get_titre(){
        return $this->titre;
    }
    function get_diplome(){
        return $this->diplome;
    }
    function get_DIPET(){
        return $this->DIPET;
    }
    function get_ENST(){
        return $this->ENST;
    }
    function get_DATE(){
        return $this->DATE;
    }
    function get_CERTIFICATION(){
        return $this->CERTIFICATION;
    }
    function get_annee(){
        return $this->annee;
    }
    function get_entreprise(){
        return $this->entreprise;
    }
    function get_CERTIFICATION2(){
        return $this->CERTIFICATION2;
    }
    function get_annee2(){
        return $this->annee2;
    }
    function get_licence(){
        return $this->licence;
    }
    function get_DIT(){
        return $this->DIT;
    }
    function get_annee3(){
        return $this->annee3;
    }
     function get_diplome2(){
        return $this->diplome2;
    }
     function get_CCNB(){
        return $this->CCNB;
    }
    function get_annee4(){
        return $this->annee4;
    }
     function get_bac(){
        return $this->bac;
    }
     function get_etablissement(){
        return $this->etablissement;
    }
     function get_annee5(){
        return $this->annee5;
    }
     function get_diplome4(){
        return $this->diplome4;
    }
   
}
$cursus = new cursus(
"Cursus academique",
"diplome et formation certifiante",
"DIPET 2 electrotechnique",
"@ENST de Douala",
"Aoùt 2016 -gestion d'éclairage d'une maison(Android+Arduino)",
"Oracle certifified Association ",
"@Kentnix Sarl",
" Mars 2009 - Oracle Database 11g Administration",
"Oracle SQL Certified ",
"Décembre 2008 -SQL2,sql3,XML",
"Licence Professionnelle -",
"@Douala Institut of tech.",
"Octobre 2008 - Tecommunication & reseaux ",
"DEC/BTS - ",
"@CCNB Dieppe canada",
"Septembre 2007 - programmation appliquée pour internet",
"Baccalauréat -",
" @Lycée tchniquede douala bassa",
"Juin 2005 - electrotechnique,mention BIEN(major de centre)"
);    
   
   
?>

<div class="double">
         <div class="ent">
            <div class="titre3"> <img src="IMAGE/IMAGE/motarboard_30px.png" alt="" class="curs"> 
            <div><strong><?php echo $cursus->get_titre(); ?></strong>
                <br><?php echo $cursus->get_diplome(); ?></div>
                <img src="IMAGE/IMAGE/menu_2_24px.png" alt="" class="curs">
            </div>
        </div>
        <div class="mon_cursus">
            <div class="eeh">
                <label><?php echo $cursus->get_DIPET() ?> - <strong> <?php echo $cursus->get_ENST() ?> </strong>
                    <br> <?php echo $cursus->get_DATE()  ?> </label><hr>
            </div>
            
            <div>
                <label> <?php echo $cursus->get_CERTIFICATION()?> <strong> <?php echo $cursus->get_entreprise() ?> </strong> 
                    <br><?php echo $annee ?> </label><hr>
            </div>
            
            <div>
                <label><?php echo $cursus->get_CERTIFICATION2() ?> <STrong><?php echo $cursus->get_entreprise() ?> </STrong>
                    <br><?php echo $cursus->get_annee2() ?> </label><hr>
            </div>
            
            <div>
                <label> <?php echo $cursus->get_licence() ?> - <strong><?php echo $cursus->get_DIT() ?></strong>
                     <br> <?php echo $cursus->get_annee3() ?> </label><hr>
            </div>
            
            <div>
                <label> <?php echo $cursus->get_diplome2() ?> <strong> <?php echo $cursus->get_CCNB() ?></strong> 
                    <br> <?php echo $cursus->get_annee4() ?> </label><hr>
            </div>
            
            <div>
                <label> <?php echo $cursus->get_bac() ?><?php echo $cursus->get_bac() ?> <strong><?php echo $cursus->get_etablissement() ?></strong>
                    <br> <?php echo $cursus->get_annee5() ?></label>
            </div>
            
         </div>
</div>