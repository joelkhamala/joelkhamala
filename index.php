<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php include 'includes/header.php'; ?>
<body class="stretched">
    <div id="wrapper" class="clearfix">
        <section id="page-title">
            <div class="container clearfix hed">
                <center>
                </center>
            </div>
        </section>
        <div class="col-md-12 hed">
            <center>
                <h1>Insert Data</h1>
            </center>
        </div>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-12" id="hide">
                            <br>
                            <form  class="row" action="includes/insert.php" method="post">
                                <?php include 'includes/form.php'; ?>
                                <div class="col-12 form-group">
                                    <input type="submit" class="btn btn-dark" name="submit" value="Insert">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 p-0">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Residence</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Created on</th>
                                        <th scope="col">Update on</th>
                                        <th scope="col" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include 'assets/classes/database.php';
                                        $b = new database();
                                        $b->select("users","*");
                                        $result = $b->sql;
                                    ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['residence']; ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td><?php echo $row['created']; ?></td>
                                            <td><?php echo $row['updated']; ?></td>
                                            <td>
                                                <a href="includes/view.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-success btn-sm">View</a>
                                            </td>
                                            <td>
                                                <a href="includes/edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <a href="" type="button"  data-toggle="modal" data-id="<?php echo $row['id']; ?>" data-target="#myModal" id="del" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click',"#del",function(e) {
                e.preventDefault();
                var del = $(this).data('id');

                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Record!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url : "includes/delete_data.php",
                            type : "POST",
                            data : {id:del},
                            success : function() {
                                swal({
                                    title: "Deleted!",
                                    text: "Record deleted successfully!",
                                    imageUrl: 'thumbs-up.jpg'
                                });

                            }
                        });
                        swal("Record has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your Record is safe!");
                    }
                });
            });

            $(document).ajaxStop(function() {
                setInterval(function() {
                    location.reload();
                }, 3000);
            });
        });
    </script>
</body>
</html>