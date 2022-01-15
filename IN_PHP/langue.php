<?php
    

    class language{
        public $langue;
        public $milieu;
        public $fr;
        public $ang;
        
    function __construct($langue,$milieu,$fr,$ang)
    {
        $this->langue=$langue;
        $this->milieu=$milieu;
        $this->fr=$fr;
        $this->ang=$ang;  
    }
    function get_langue(){
        return $this->langue;
    }
    function get_milieu(){
        return $this->milieu;
    }
    function get_fr(){
        return $this->fr;
    }
    
    function get_ang(){
        return $this->ang;
    }
    }
    $language = new language("Langues","Pratiquées en entreprise","Français","Anglais");
?>


                <div class="lang"><h2><?php echo $language->get_langue() ?></h2> <div class="aa"> <?php echo $language->get_milieu()?> </div></div>
                <div>
                    <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="img5"> 
                    <label><?php echo $language->get_fr() ?></label>
                </div>
                <div>
                    <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="img5"> 
                    <label><?php echo $language->get_ang ()?></label>
                </div>

           