<!DOCTYPE html>
<html>
    <head>
    <style>
            .header{
                
                background-color: rgb(122, 169, 245);
            }
            .footer{
                background-color: rgb(142, 184, 250);
            }
        </style>
    </head>
    <body>
    <div class = "header">
            <?php
                include 'header.php';
            ?>
        </div>

<br><br><br>
<label>E-mail</label>
    <input type="text" name = "email" class="form-control" /><br />
<br><br><br>
<div class = "footer">
            <?php
                include 'footer.php';
            ?>
        </div>
    </body>
</html>
