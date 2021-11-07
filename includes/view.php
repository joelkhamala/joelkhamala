<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php include 'header.php'; ?>

<body class="stretched">
    <div class="col-md-12 hed">
        <center>
        <h1>View Data</h1>
        </center>
    </div>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <table class="table table-dark">
                            <?php 
                                include '../assets/classes/database.php';

                                $id = $_GET['id'];
                                $b = new database();
                                $b->select("users","*","id='$id'");
                                $result = $b->sql;

                                $row = mysqli_fetch_assoc($result);
                             ?>
                          <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td><?php echo $row['id']; ?></td>
                                </tr>  
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>  
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>  
                                    <td><?php echo $row['phone']; ?></td>
                                </tr> 
                                <tr>
                                    <th>Subject</th>
                                    <td><?php echo $row['username']; ?></td>
                                </tr> 
                                <tr> 
                                    <th>Message</th>
                                    <td><?php echo $row['residence']; ?></td>
                                </tr>
                                <tr>
                                    <th>Created Time & Date</th>  
                                    <td><?php echo $row['created']; ?></td>
                                </tr>
                                <tr>  
                                    <th>Updated Time & Date</th>
                                    <td><?php echo $row['updated']; ?></td>
                                </tr>
                                <tr>  
                                    <th>Back To Home</th>
                                    <td><a href="../index.php" type="button" class="btn btn-primary">Back</a></td>
                                </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>