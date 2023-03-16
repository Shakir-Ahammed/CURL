<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-light bg-primary">
            <!-- <div class="text-left">
            <h5>cURL</h5>
        </div>
        <div class="container text-right mt-1">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Load</button>

        </div> -->

            <div class="row px-2">
                <div class="col-md-8 ">
                    <p>cURL</p>
                </div>
                <div class="col-md-2 text-right ">
                    <button class="btn btn-success my-2 my-sm-0" type="submit" id="button">Load</button>

                </div>
                <div class="col-md-3 text-right ">
                    <!-- <button class="btn btn-success my-2 my-sm-0" type="submit">Load</button> -->

                </div>
            </div>

        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>User Id</th>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Body</th>
                            </tr>
                        </thead>
                        <tbody id="tid">

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="app.js"></script>

</html>