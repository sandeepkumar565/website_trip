<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
            background-image: url('img/travel.jpg');
            filter: blur(3px);
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
        
        .modal {
            text-align: center;
            background: lightcyan;
        }
    </style>
</head>

<body>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image"></div>

    <div class="bg-text">
        <h2>Hope you are enjoying your holidays !</h2>
        <h2 style="font-size:50px">Check here for the Travel facility.</h2>
        <form>
            Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: &nbsp;&nbsp;<input type="text" name="city" /><br /><br /> No. of days &nbsp;&nbsp; : &nbsp;&nbsp; <input type="text" name="days"><br /><br /> No. of people &nbsp;: &nbsp;&nbsp;<input type="text"
                name="people"><br /><br />
            <input type="submit" name="sub">
        </form>
    </div>

    <script type="text/javascript">
        document.querySelector('[name="sub"]').addEventListener('click', function(event) {
            event.preventDefault();
            var city = document.querySelector('[name="city"]').value;
            var days = document.querySelector('[name="days"]').value;
            var people = document.querySelector('[name="people"]').value;
            var total = 4000 * days * people;
            var alrt =
                `<h3>Welcome to ${city}</h3>
		<h5>No. of days : ${days}</h5>
		<h5>No. of people : ${people}</h5>
		<h5>Cost/person/day : 4000</h5>
		<h4>Total cost : ${total}</h4>`;

            document.querySelector('.modal .row').insertAdjacentHTML('beforeend', alrt);
            $('.modal').removeClass('fade').addClass('show');
            // document.querySelector('div.hidden').classList.add('pop-up');
            // document.querySelector('div.pop-up').remove('hidden');
            // $('div.bg-text').css({'visibility':'hidden'});
        });

        $('.modal').click(function() {
            $(this).removeClass('show').addClass('fade');
        });
    </script>
</body>

</html>