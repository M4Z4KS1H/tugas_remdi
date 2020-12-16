<html>
    <head>
        <title>mys_site</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!-- Link Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <style>
            body{
                background: #48cae4;
                font-family: 'Fredoka One', cursive;
            }
            .container{
                display: flex;
                justify-content: center;
                flex-direction: row;
            }

            .card{
                text-align: center;
                background: #fcc1cf;
                border: none;
            }
            
            .container .card form .form-group .form-input{
                border :none;
                height : auto;
                text-decoration : none;
            }

            .container .card form .form-group .form-input:focus, select:focus, textarea:focus {
                outline: none;
            }

            .container .card form .form-group .butt{
                margin: 2px;
                background : #84c7dd;
                border : none;
                color : #fff;
                width : 50px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="col-lg-4">
                <h2 style="text-align:center;">CALCULATOR</h2>
                <div class="card shadow mt-4">
                    <form class="pt-2" action="">
                        <div class="form-group">
                            <input type="button" class="btn btn-light shadow butt" placeholder="C" value="C">
                            <input type="text" class="form-input shadow" >
                            <br><br>
                            <input type="button" class="btn btn-light shadow butt" placeholder="7" value="7">
                            <input type="button" class="btn btn-light shadow butt" placeholder="8" value="8">
                            <input type="button" class="btn btn-light shadow butt" placeholder="9" value="9">
                            <input type="button" class="btn btn-light shadow butt" placeholder="X" value="X">
                            <br><br>
                            <input type="button" class="btn btn-light shadow butt" placeholder="4" value="4">
                            <input type="button" class="btn btn-light shadow butt" placeholder="5" value="5">
                            <input type="button" class="btn btn-light shadow butt" placeholder="6" value="6">
                            <input type="button" class="btn btn-light shadow butt" placeholder="-" value="-">
                            <br><br>
                            <input type="button" class="btn btn-light shadow butt" placeholder="1" value="1">
                            <input type="button" class="btn btn-light shadow butt" placeholder="2" value="2">
                            <input type="button" class="btn btn-light shadow butt" placeholder="3" value="3">
                            <input type="button" class="btn btn-light shadow butt" placeholder="+" value="+">
                            <br><br>
                            <input type="button" class="btn btn-light shadow butt" placeholder="0" value="0">
                            <input type="button" class="btn btn-light shadow butt" placeholder="=" value="=">

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>