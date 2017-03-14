<?php
session_start();
include_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title>Junior PHP test task</title>
    <script type="text/javascript">
        (function ($){
            $(function (){
                $('.btn-file').each(function (){
                    var self = this;
                    $('input[type=file]', this).change(function (){
                        // remove existing file info
                        $(self).next().remove();
                        // get value
                        var value = $(this).val();
                        // get file name
                        var fileName = value.substring(value.lastIndexOf('/')+1);
                        // get file extension
                        var fileExt = fileName.split('.').pop().toLowerCase();
                        // append file info
                        $('<span><i class="icon-file icon-' + fileExt + '"></i> ' + fileName + '</span>').insertAfter(self);
                    });
                });
            });
        })(jQuery);
    </script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <label class="control-label" style="padding-top: 15px"><?php echo (isset($_SESSION['sent'])) ? $_SESSION['sent']:'Please fill in the fields'; ?> </label>
    </div>
</nav>
<br>
<form ENCTYPE="multipart/form-data" class="form-horizontal container" role="form" method="post" action="">
    <div class="form-group">
        <label class="col-sm-2 control-label">User Name </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="User Name" name="Username" required
                   value="<?php echo isset($_POST['Username'])?$_POST['Username']:''?>">
        </div>
    </div>

    <div class="form-group">
        <label  class="col-sm-2 control-label">Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="Name" name="Name" required value="<?php echo isset($_POST['Name'])?$_POST['Name']:''?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-3">
            <input type="email" class="form-control" placeholder="Email" name="Email" value="<?php echo isset($_POST['Email'])?$_POST['Email']:''?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Text</label>
        <div class="col-sm-3">
            <textarea class="form-control" id="inputPassword3" name="text" placeholder="Input text" ><?php echo isset($_POST['text'])?$_POST['text']:''?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">File</label>
        <div class="col-sm-3 "">
            <label class="btn btn-default btn-file">
                Choose file <input type="file" name="filename" style="display: none;">
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input  type="submit" action="Submit" name="Submit" value="Send" class="btn btn-default">
            </div>
    </div>
    </div>
</form>

</body>
</html>
<?php
unset($_SESSION['sent']);
$USER_NAME = isset($_POST['Username']) ? $_POST['Username']:'';
$NAME = isset($_POST['Name']) ? $_POST['Name']:'';
$EMAIL = isset($_POST['Email']) ? $_POST['Email']:'';
$TEXT = isset($_POST['text']) ? $_POST['text']:'';

clean($USER_NAME);
clean($NAME);
clean($TEXT);
clean($EMAIL);

if(!empty($USER_NAME) && !empty($NAME) && !empty($EMAIL) && !empty($TEXT)) {
    $email_validate = filter_var($EMAIL, FILTER_VALIDATE_EMAIL).'<br>';

    if((check_length($USER_NAME, 3, 25) && check_length($NAME, 3, 50) && check_length($TEXT, 20, 1000) && $email_validate)  && !ctype_space($USER_NAME) && !ctype_space($NAME)) {
        $path='';
        if($_FILES["filename"]["size"] > 1024*3*1024)
        {
            echo ("The file is oversize, please choose the other file");
            exit;
        }
        if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
        {
            $orig_file = explode(".", $_FILES["filename"]["name"]);
            $orig_file = array_pop($orig_file );
            $file_name = date('d-m-y-h-i-s.').$orig_file;
            $path = "uploads/".$file_name;
            move_uploaded_file($_FILES["filename"]["tmp_name"], $path);
        }

        insert_data($USER_NAME, $NAME, $EMAIL, $TEXT,$path);
        unset ($_POST);
        $_SESSION['sent']='Data succesfully added. Thank you.';
        header('location:TEST_PART_1.php');
    } else { // добавили сообщение
        $_SESSION['sent']= "Please check entered date";
        header('location:TEST_PART_1.php');
    }
}
