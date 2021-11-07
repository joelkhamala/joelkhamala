<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php include 'header.php'; ?>
<body class="stretched">
        <div class="col-md-12 hed">
            <center>
            <h1>Edit Data</h1>
            </center>
        </div>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row">
                        <?php 
                            include '../assets/classes/database.php';

                            $id = $_GET['id'];

                            $b = new database();
                            $b->select("users","*","id='$id'");
                            $result = $b->sql;

                            $row = mysqli_fetch_assoc($result);
                        ?>
                        <div class="col-md-12" id="hide"><br>
                            <form  class="row" action="update.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <?php include 'form.php'; ?>
                                <div class="col-12 form-group">
                                    <input type="submit" class="btn btn-dark" name="submit" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>