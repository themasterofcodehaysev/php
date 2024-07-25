<?php
//TODO: GET all values(Gender,Name,Batch,Bio,Skill) from inputs and display the result below
    function getFromPost($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }
    
    $name = getFromPost('name');
    $gender = getFromPost('gender');
    $batch = getFromPost('batch');
    $skills = getFromPost('skill');
    $bio = getFromPost('bio');

    
    
?>
<link rel="stylesheet" href="css/style.css">
<div class="user-info">
    <div class="user-info-header">
        <img id="userProfile" src="
            <?php 
                if($gender === "male"){
                    echo "/images/male.jpg";
                }if($gender === "female"){
                    echo "/images/female.jpg";
                }else{
                    echo "/images/other.jpg"; 
                }
            ?> "
         alt="">
        <h2 id="userName"><?php echo $name ?></h2>
        <span>Batch - <span id="userBatch"><?php echo $batch ?></span><span>
    </div>
    <div class="user-info-body">
        <p id="userBio"><?php echo $bio ?></p>
        <div id="userSkills">
            <?php  
                foreach($skills as $skill){
                    echo "<span class=\"bg-primary\">" . $skill ."</span>";
                }
            ?>
        </div>
    </div>
</div>