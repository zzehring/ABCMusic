<!DOCTYPE html>
<html>
    <head>
        <title>ABC Music</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="jumbotron">
                    <h1>Welcome to ABC Music Database Management System</h1>
                    <p>Here, you can browse our musicians, songs, and albums!</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h2>Our Musicians</h2>
                        <a class="btn btn-default" href="musicians" role="button">View Musicians</a>
                    </div>
                    <div class="col-md-3">
                        <h2>Our Songs</h2>
                        <a class="btn btn-default" href="songs" role="button">View Songs</a>
                    </div>
                    <div class="col-md-3">
                        <h2>Our Albums</h2>
                        <a class="btn btn-default" href="albums" role="button">View Albums</a>
                    </div>
                    <div class="col-md-3">
                        <h2>Our Instruments</h2>
                        <a class="btn btn-default" href="instruments" role="button">View Instruments</a>
                    </div>

                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
