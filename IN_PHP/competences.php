<?php
    class competence{
        public $nom;
        public $profil_job;
        public $formation1;
        public $dev1;
        public $formation2;
        public $dev2;
        public $formation3;
        public $dev3;
        public $formation4;
        public $dev4;
        public $formation5;
        public $dev5;
        
    function __construct($nom,$profil_job,$formation1,$dev1,$formation2,$dev2,$formation3,$dev3,$formation4,$dev4,$formation5,$dev5)
    {
        $this->nom=$nom;
        $this->profil_job=$profil_job;
        $this->formation1=$formation1;
        $this->dev1=$dev1;
        $this->formation2=$formation2;
        $this->dev2=$dev2;
        $this->formation3=$formation3;
        $this->dev3=$dev3;
        $this->formation4=$formation4;
        $this->dev4=$dev4;
        $this->formation5=$formation5;
        $this->dev5=$dev5; 
    }
    function get_nom(){
        return $this->nom;
    }
    function get_profil_job(){
        return $this->profil_job ;
    }
    function get_formation1(){
        return $this->formation1;
    }
    function get_dev1(){
        return $this->dev1;
    }
    function get_formation2(){
        return $this->formation2;
    }
    function get_dev2(){
        return $this->dev2;
    }
    function get_formation3(){
        return $this->formation3;
    }
    function get_dev3(){
        return $this->dev3;
    }
    function get_formation4(){
        return $this->formation4;
    }
    function get_dev4(){
        return $this->dev4;
    }
    function get_formation5(){
        return $this->formation5;
    }
    function get_dev5(){
        return $this->dev5;
    }
    }
    $competences = new competence("Developpement front-end","HTML5,SASS,VueJS,Angular,JavaFX,...","Developpement back-end","NodeJS,Drupal 8,Laravel,Kotlin,Java EE 7","Developpement mobile","Android Kotlin,IOS Swift, Cordova, Flutter","UI/UX Design","Photoshop CC,Adobe XD, Material Design","Base de données & Big Data","Oracle 11g, PostgreSQL, Hadoop, Talend DI","Outils/Environnements","Visual Paradigm, Git, Docker, K8s, Linux");
?>

            <div class="comp"> 
                <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="checked">
                <div class="evo"> <strong> <?php echo $competences->get_nom(); ?> </strong><br><?php echo $competences->get_profil_job(); ?> </div>
                <div>
                  <img src="IMAGE/IMAGE/star_24px.png" alt="" srcset="" class="star">
                </div>
            </div>

            <div>
                <p class="num3"><input style="width: 50%" type="range" max=100 value="90"></p></label>
            </div>
            <div class="comp"> 
                <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="checked">
               <div class="evo"> <strong><?php echo $competences->get_formation1(); ?></strong><br> <?php echo $competences->get_dev1 (); ?></div>
                <div>
                  <img src="IMAGE/IMAGE/star_24px.png" alt="" srcset="" class="star">
                </div>
            </div>
  
              <div>
                  <p class="num3"><input style="width: 50%" type="range" max=100 value="60"></p></label>
              </div>
              <div class="comp"> 
                  <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="checked">
                  <div class="evo"> <strong> <?php $competences->get_formation2() ; ?> </strong><br><?php echo $competences->get_dev2(); ?> </div>
                  <div>
                    <img src="IMAGE/IMAGE/star_24px.png" alt="" srcset="" class="star">
                  </div>
              </div>
  
              <div>
                  <p class="num3"><input style="width: 50%" type="range" max=100 value="80"></p></label>
              </div>
              <div class="comp"> 
                <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="checked">
               <div class="evo"> <strong><?php echo $competences->get_formation3(); ?></strong><br><?php echo $competences->get_dev3(); ?> </div>
                <div>
                  <img src="IMAGE/IMAGE/star_24px.png" alt="" srcset="" class="star">
                </div>
              </div>
  
              <div>
                  <p class="num3"><input style="width: 50%" type="range" max=100 value="60"></p></label>
              </div>
              <div class="comp"> 
                <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="checked">
               <div class="evo"> <strong><?php echo $competences->get_formation4(); ?> </strong><br><?php echo $competences->get_dev4(); ?></div>
                <div>
                  <img src="IMAGE/IMAGE/star_24px.png" alt="" srcset="" class="star">
                </div>
              </div>
  
              <div>
                  <p class="num3"><input style="width: 50%" type="range" max=100 value="60"></p></label>
              </div>
              <div class="comp"> 
                  <img src="IMAGE/IMAGE/checked_checkbox_24px.png" alt="" class="checked">
                  <div class="evo"> <strong><?php echo $competences->get_formation5(); ?> </strong><br><?php echo $competences->get_dev4(); ?> </div>
                  <div>
                    <img src="IMAGE/IMAGE/star_24px.png" alt="" srcset="" class="star">
                  </div>
              </div>
  
              <div>
                  <p class="num3"><input style="width: 60%" type="range" max=100 value="95"></p></label>
              </div>
              
        
 