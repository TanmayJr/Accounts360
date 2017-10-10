<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/infopage.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <!--custom fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cookie|Zilla+Slab+Highlight" rel="stylesheet">





</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="Stock/logo.jpg" height="40px" width="55px"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Details</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Register</button>
                <button class="btn btn-outline-info my-2 my-sm-0" style="margin-left: 10px" type="submit">Login</button>
            </form>
        </div>
    </nav>
</div>



<!--nav ends-->
<div class="container">
    <div class="row" style="margin: 60px">

        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myview" style="margin-right: 20px">
            View details
        </button>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Add details
        </button>

        <!--modal form-->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        Enter details
                    </div>
                    <div class="modal-body">
                        <div>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Company details</label>
                                        <input type="text" class="form-control" placeholder="Company name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">&nbsp;</label>
                                        <input type="text" class="form-control"  placeholder="Location">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Employee details</label>
                                        <input type="text" class="form-control" placeholder="Number of Employees">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">&nbsp;</label>
                                        <input type="text" class="form-control"  placeholder="Salary of Employees">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity" class="col-form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState" class="col-form-label">State</label>
                                        <select id="inputState" class="form-control">Choose</select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip" class="col-form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                                    <div class="btn-group"><button type="button" class="btn btn-primary">Save changes</button></div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--modal form ends-->

    </div>
</div>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

</body>
</html>