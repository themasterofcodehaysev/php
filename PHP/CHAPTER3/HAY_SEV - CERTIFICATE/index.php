<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>club register</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <form action="Page/result.php" method="post">
        <h1 class="topic">PNC CLUB REGISTER</h1>
        <div class="name">
            <label for="">Your Name</label>
            <input type="text" name="name" id="name" placeholder ="Inter your name">
        </div>

        <div class="club">
            <label for="">Club you want to apply</label>
            <select name="club" id="select">
                <option name="Dancing" value="Dancing">Dancing club</option>
                <option name="Robotic" value="Robotic">Robotic club</option>
                <option name="Design" value="Design">Design club</option>
                <option name="Music" value="Music">Music club</option>
            </select>
        </div>

        <div class="times">
            <label for="">Be on time</label>
            <div class="day">
                <label for="">
                    <input type="radio" name="day" value="Saterday Morning">Saterday Morning
                </label>

                
                <label for="">
                    <input type="radio" name="day" value="Saterday Afternoon">Saterday Afternoon
                </label><br>
                
                <label for="">
                    <input type="radio" name="day" value="Sunday Morning">Sunday Morning
                </label>

                <label for="">
                    <input type="radio" name="day" value="Sunday Afternoon">Sunday Afternoon
                </label>

            </div>
        </div>

        <div class="skills">
            <label for="">Your skills</label>
            <div class="checkbox">
                
                <label for="">
                    <input type="checkbox" name="check[]" value="The best coder">The best coder
                </label>
                
                <label for="">
                    <input type="checkbox" name="check[]" value="Good in arts">Good in arts
                </label>

                <label for="">
                    <input type="checkbox" name="check[]" value="a super star">A super star
                </label>
                
                <label for="">
                    <input type="checkbox" name="check[]" value="a crazy dancer">A crazy dancer
                </label>
                
                <label for="">
                    <input type="checkbox" name="check[]" value="Singer">Singer
                </label>
                
                <label for="">
                    <input type="checkbox" name="check[]" value="good in design">Good in design
                </label>
                
                <label for="">
                    <input type="checkbox" name="check[]" value="the best eater">The best eater
                </label>
                
                <label for="">
                    <input type="checkbox" name="check[]" value="good in speaches">Good in speaches
                </label>
            </div>
        </div>

        <button type="submit" class="submit">Send</button>

    </form>
</body>
</html>