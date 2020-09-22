<!DOCTYPE html>
<html>

<head>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        
        .bg-image {
            background-image: url('img/hotel.jpg');
            filter: blur(8px);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .bg-text {
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="bg-image"></div>

    <div class="bg-text">
        <h2>Hope you are enjoying your holidays !</h2>
        <h2 style="font-size:50px">Check here for the hotel facility.</h2>
        <form action="hotel.php" method="post">
            Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;<input type="text" name="city" /><br/><br/>
            <input type="submit" name="sub">
        </form>
    </div>

    <script type="text/javascript">
        document.querySelector('[name="sub"]').addEventListener('click', function(event) {
            event.preventDefault();
            localStorage.setItem("city", document.querySelector('[name="city"]').value);

            location.href = 'hotel.php';
        });
    </script>

</body>

</html>