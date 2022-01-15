<?php
    class infos{
        public $datenaiss;
        public $origine;
        public $statut;
        public $quartier;
        public $lieu;
        public $map;
        public $tel;
        public $forum;
        public $email;
        public $compte;
        public $nb;
        
    function __construct($datenaiss,$origine,$statut,$quartier,$lieu,$map,$tel,$forum,$email,$compte,$nb)
    {
        $this->datenaiss=$datenaiss;
        $this->origine=$origine;
        $this->statut=$statut;
        $this->quartier=$quartier;
        $this->lieu=$lieu;
        $this->map=$map;
        $this->tel=$tel;
        $this->forum=$forum;
        $this->email=$email;
        $this->compte=$compte;
        $this->nb=$nb; 
    }
    function get_datenaiss(){
        return $this->datenaiss;
    }
    function get_origine(){
        return $this->origine;
    }
    function get_statut(){
        return $this->statut;
    }
    function get_quartier(){
        return $this->quartier;
    }
    function get_lieu(){
        return $this->lieu;
    }
    function get_map(){
        return $this->map;
    }
    function get_tel(){
        return $this->tel;
    }
    function get_forum(){
        return $this->forum;
    }
    function get_email(){
        return $this->email;
    }
    function get_compte(){
        return $this->compte;
    }
    function get_nb(){
        return $this->nb;
    }
    
    }
    $infos = new infos("Né le 20 octobre 1986","Originaire du Sud Cameroun","Marié, 02 enfants - Santé RAS","Résident a ndogbong","Douala - Cameroun","Map: 4.053276, 9.765047","(+237)674 053 983","Mobile,Telegram,Whatsapp","junioressono@gmail.com","Google+,Twitter,Linkedin,Github","+ 45 PROJETS  + 31 CONTRATS  12 ANS D'EXP");
?>

<div class="birthday">
                <div><img src="IMAGE/IMAGE/birthday_cake_24px.png" id="ima" class="imagepresentation"></div>
                <div><label><?php echo $infos->get_datenaiss()  ?><br><?php echo $infos->get_origine()  ?>
                    <br><?php echo $infos->get_statut()  ?></label></div>
                </div>
            <hr class="lig">


            <div class="birthday">
                <div><img src="IMAGE/IMAGE/location_filled_50px.png" id="localisation" class="imagepresentation"/></div>
                <div><label><?php echo $infos->get_quartier()  ?><br><?php echo $infos->get_lieu()  ?></label></div>
           </div>
          <hr class="lig">

          <div class="birthday">
            <div><img src="IMAGE/IMAGE/phone_24px.png" id="contact" class="imagepresentation"/></div>
            <div><label><?php echo $infos->get_tel()  ?><br><?php echo $infos->get_forum()  ?></label></div>
          </div>
         <hr class="lig">

          <div class="birthday">
            <div><img src="IMAGE/IMAGE/filled_message_24px.png" id="message" class="imagepresentation"/></div>
            <div><label><?php echo $infos->get_email()  ?><br><?php echo $infos->get_compte()  ?></label></div>
         </div>
           <br>
         <div>
							
            <label><?php echo $infos->get_nb()  ?></label>

         </div><br>