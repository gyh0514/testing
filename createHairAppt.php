<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/validator.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>

        <div class="container">
            <h1>Hairdressers Service</h1>
            <p></p>
            <form class="form-horizontal" action="" method="post" onsubmit="return calculate()" data-toggle="validator">
                <div class="form-group">
                    <label for="id_name" class="col-md-2 control-label">Full name:</label>
                    <div class="col-md-10">
                        <input type="text" id="id_name" name="name" class="form-control"
                               required
                               data-error="Full name is required."
                               <div class="help-block with-errors">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="id_email" class="col-md-2 control-label">Email:</label>
                        <div class="col-md-10">
                            <input type="text" id="id_email" size="10" name="email" class="form-control"
                                   required 
                                   pattern="^[\w]+@[\w]+.[a-z]+$" 
                                   data-required-error="Email is required" 
                                   data-pattern-error="Invalid email">
                            <div class="help-block with-errors">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="id_prefer" class="col-md-2 control-label">Shipping time:</label>
                            <div class="col-md-10">
                                <label class="radio-inline">
                                    <input type="radio" name="prefer" id="id_grad" value="Graduate"> Graduate
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="prefer" id="id_top" value="Top Stylist"> Top Stylist
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="prefer" id="id_senior" value="Senior Stylist"> Senior Stylist
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="id_service" class="col-md-2 control-label">Service required:</label>
                            <div class="col-md-10">
                                <select id="id_service" name="service" class="form-control"
                                        required 
                                        data-required-error="Please select one service">
                                    <div class="help-block with-errors">
                                        <option value="Hair Cut">Hair Cut</option>
                                        <option value="Colour">Colour</option>
                                        <option value="Perm">Perm</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input class="btn btn-success" type="submit" value="Calculate" />
                            </div>
                        </div>

                        </form>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Graduate</a></li>
                            <li><a href="#profile" data-toggle="tab">Top Stylist</a></li>
                            <li><a href="#messages" data-toggle="tab">Senior Stylist</a></li>
                        </ul>

        </div>

    </body>
</html>
