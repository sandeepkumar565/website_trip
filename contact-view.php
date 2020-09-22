<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/contact-view.css">
</head>

<body>
    <div class="bg-image"></div>

    <div class="bg-text">

        <fieldset style="margin-left: 80px; margin-right:150px;">
            <legend>Contact Us</legend>

            <form action="contact-view1.php" method="post">
                Name &nbsp;&nbsp;&nbsp;
                <input type="text" id="in1" name="name" placeholder="Your Name" /><br><br>
                Email &nbsp;&nbsp;&nbsp;
                <input type="text" id="in2" name="email" placeholder="Email" /><br /><br />

                Suggestions</br>
                <textarea id="in3" rows=10 cols=40 name="feedback"
                    placeholder="Your Suggestions"></textarea><br /><br />
                <input type="reset" id="in4" name="Cancel">
                <input type="submit" id="in5" name="sub" value="Submit">
            </form>
        </fieldset>
    </div>
</body>

</html>