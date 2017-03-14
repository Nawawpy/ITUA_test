<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 14.03.2017
 * Time: 12:32
 */
include_once('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>jQuery UI</title>
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date1"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date2"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
</head>
<body>
<?php
$a=date_reverse($_POST['date1']);
$b=date_reverse($_POST['date2']);

?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <form method="post">
            <div class="form group col-md-2" style=" text-align: right">
                <label class="control-label" for="date"  style="padding-top: 15px">Date from</label>
            </div>
            <div class="form group col-md-2"  style="padding-top: 8px">
                <input class="form-control" id="date" name="date1" placeholder="DD/MM/YYY" type="text"/>
            </div>
            <div class="form group col-md-1">
                <label class="control-label" for="date"  style="padding-top: 15px">Date to </label>
            </div>
            <div class="form group col-md-2"  style="padding-top: 8px">
                <input class="form-control" id="date" name="date2" placeholder="MM/DD/YYY" type="text"/>
            </div>
            <div class="form group col-md-1"  style="padding-top: 8px">
                <button class="btn btn-primary " name="submit" type="submit" >Submit</button>
            </div>
            <div class="form group col-md-2" style=" text-align: right">
                <label class="control-label" for="date"  style="padding-top: 15px">New to old </label>
            </div>
            <div class="form group col-md-1" style="padding-top: 8px">
                <input type="checkbox" name ="checkbox" checked data-toggle="toggle">
            </div>
        </form>
    </div>
</nav>
<div class="panel panel-default">

    <div class="panel-heading">Panel heading</div>

    <table class="table">
        <thead>
        <tr>
            <th class="col-md-1">#</th>
            <th class="col-md-1">User Name</th>
            <th class="col-md-1">Name</th>
            <th class="col-md-1">IP</th>
            <th class="col-md-1">Date</th>
            <th class="col-md-6">Comment</th>
            <th class="col-md-1">File path</th>
        </tr>
        </thead>
        <tbody>
            <?php

                $res = get_data($a, $b);
                foreach ($res as $item){
                    echo '<tr><td>'.$item['id'].'</td>';
                    echo '<td>'.$item['user_name'].'</td>';
                    echo '<td>'.$item['name'].'</td>';
                    echo '<td>'.$item['IP'].'</td>';
                    echo '<td>'.$item['date'].'</td>';
                    echo '<td>'.$item['text'].'</td>';
                    echo '<td>'.$item['path'].'</td></tr>';
                }?>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>