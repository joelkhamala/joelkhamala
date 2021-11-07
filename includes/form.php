<div class="alert alert-danger">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="register-form-name">Full Name:</label>
                        <input type="text" name="name" value="<?php if(isset($row)) { echo $row['name']; } ?>" class="form-control" tabindex="1" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="register-form-name">Email:</label>
                        <input type="email" name="email" value="<?php if(isset($row)) { echo $row['email']; } ?>" class="form-control" tabindex="1" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="register-form-name">Phone:</label>
                        <input type="text" name="phone" value="<?php if(isset($row)) { echo $row['phone']; } ?>" class="form-control" tabindex="2" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="register-form-name">UserName:</label>
                <input type="text" name="username" value="<?php if(isset($row)) { echo $row['username']; } ?>" class="form-control" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="register-form-name">Residence:</label>
                <input type="text" class="form-control" name="residence" value="<?php if(isset($row)) { echo $row['residence']; } ?>" tabindex="4" required>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control value="<?php if(isset($row)) { echo $row['password']; } ?>" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control " value="<?php if(isset($row)) { echo $row['password']; } ?>" tabindex="6">
                    </div>
                </div>
            </div>