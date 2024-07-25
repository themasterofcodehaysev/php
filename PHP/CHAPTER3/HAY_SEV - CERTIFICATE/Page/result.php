<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="../CSS/result.css">
</head>
<body>

    <div class="container">
 
            
        <h1>CERTIFICATE OF CLUB MEMBER</h1>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["name"])) {
                }
                echo "<h2>Thank you " . $_POST["name"]  . "</h2>";
                echo "<span>____________________________________________________</span>" ;
                if (isset($_POST["club"])){
                    echo "<p>We recieve your application for the ".$_POST["club"]." club" ."." ."</p>";
                }
                if (isset($_POST["day"])) {
                    echo "<p> You will be available on ".$_POST["day"] ."." . "</p>";
                }
                if(isset($_POST["check"])){
                    $selectedValues = $_POST["check"];
                    $skills = "";
                    for($i = 0; $i< count($selectedValues); $i++){
                        if($i == 0){
                            $skills = $skills . $selectedValues[$i] ;
                        }
                        elseif($i == count($selectedValues)-1){
                            $skills = $skills .", and " . $selectedValues[$i].".";
                        }else{
                            $skills = $skills .", " . $selectedValues[$i];
                        }
                        
                    }
                    echo "<p>You are " . $skills . "</p>";
                }
                echo "<span>____________________________________________________</span>" ;
            }
        ?>
        <div class="footer">
            <div class="date">
                <?php echo "<p>" .date('Y-m-d'). "</p>" ?>
                <p class="line">_______________________</p>
                <p>Date</p>
            </div>
            <img src="../IMAGE/certificat_logo.png" id="logo" alt="certificate_logo ">
            <div class="sign">
                <p class="signer"> Hay SEV</p>
                <p class="line">_______________________</p>
                <p>Signer</p>
            </div>
        </div>
    </div>


</body>
</html>

