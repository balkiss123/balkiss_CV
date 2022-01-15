<?php
        

    class interet{
        public $point;
        public $pass_temps;
        
    function __construct($point,$pass_temps)
    {
        $this->point=$point;
        $this->pass_temps=$pass_temps;  
    }
    function get_point(){
        return $this->point;
    }
    function get_pass_temps(){
        return $this->pass_temps;
    }
    }
    $interet = new interet("Points d'intérets","Simple passe-temps pour se faire un peu plaisir");
?>




                <div class="point"> <h2><?php echo $interet->get_point() ?></h2>
                 <div class="aa">  <?php echo $interet->get_pass_temps() ?> </div></div>
               <div class="aaa"> <img src="IMAGE/IMAGE/image.png" alt="" class="img4"></div>
        
                    