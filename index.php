<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css"/>
</head>
<body>
    <div class="container">
         <div class="left-container">
           <div class="contexte">
                <div class="profil">
                    <div class="entete">
                        <div class="seach-bar">
                            <img src="IMAGE/IMAGE/menu_filled_50px.png" alt="image" class="icon1">
                            <input type="text" placeholder="Besoin d'un chef de projet?">
                            <div class="actions">
                               <img src="IMAGE/IMAGE/search_50px.png" alt="image" class="icon">
                               <img src="IMAGE/IMAGE/thick_vertical_line_filled_50px.png" alt="image" class="icon">
                               <img src="IMAGE/IMAGE/delete_sign_32px.png" alt="image" class="icon">
                            </div>
                        </div>
                   </div>  

                 <div class="profile-informations">
                    <div > <img src="IMAGE/IMAGE/developpeur-web.jpg" alt="" class="profile-image"></div>
                
                    <div class="nom">
                        <div class="profile-name">
                            balkiss DYOUYA
                        </div>
                        <div class="profile-job-name">
                           Architecte logiciel / DevOps
                        </div>
                   </div>
           </div>
        
         <div class="plus">
            <img src="IMAGE/IMAGE/plusr.ico" alt="" class="plus1">
         </div>
         <script>
                        function action(){
                            if (document.getElementById('plus').className == 'croix'){
                                document.getElementById('plus').className = 'croix-active';
                                document.getElementById('boxx').className ='box-active';
                                document.getElementById('boxx1').className = 'box1-active';
                                document.getElementById('boxx2').className =    'box2-active';

                            }else {
                                document.getElementById('plus').className = 'croix';
                                document.getElementById('boxx').className ='box';
                                document.getElementById('boxx1').className = 'box1';
                                document.getElementById('boxx2').className =   'box2';
                            } 
                        }
                    </script>

                    <div class="box" id="boxx">
                        <a href="./editer/accueil.php" class="item edit"><img src="icon/edit_user_50px.png"></a>
                    </div>

                    <div class="box1" id="boxx1">
                        <a href="mail.php" class="item email"><img src="icon/email_40px.png"></a>
                    </div>

                    <div class="box2" id="boxx2">
                        <a href="pdf.php" class="item pdf"><img src="icon/pdf_2_30px.png"></a>
                    </div>
     </div>
     <div class="infos">  
        <div class="identification"> 
            <?php
                include 'IN_PHP/identification.php';
            ?> 
        </div> 

     </div>
       <div class="competence"> 
            <?php
                    include 'IN_PHP/competences.php';
            ?> 
        </div>
     </div>
 </div>
 <div class="right-container">
    <div class="experience">
        <?php
            include 'IN_PHP/experience.php';
        ?>
    </div>
    <div class="loisirs">
                    <div class="point_interet"> 
                        
                        <?php
                            include 'IN_PHP/interet.php';
                        ?>
                    </div>
                    <div class="langue">
                        
                        <?php
                            include 'IN_PHP/langue.php';
                        ?>
                    </div>
    </div>
    <div class="cursus">
        <?php
            include 'IN_PHP/cursus.php';
        ?>
    </div>
</div>
    </div>
</body>
</html>