<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Student Information Form</h2>
                </div>
                <?php
                if(isset($data['student_data'])){
                    foreach($data['student_data'] as $row){         
                ?>
                <form action="index.php?action=form_data" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" name="name" id="name" value="<?php echo $row['name'];?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <select name="class" id="class" class="form-control">
                                    <option <?php if ($row['class']== "WEP-2020A"){?> selected="selected" <?php } ?> value="WEP-2020A">WEP-2020A</option>
                                    <option <?php if ($row['class']== "WEP-2020B"){?> selected="selected" <?php } ?> value="WEP-2020B">WEP-2020B</option>
                                    <option <?php if ($row['class']== "WEP-2020"){?> selected="selected" <?php } ?> value="SNA-2020">SNA-2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mark">Mark:</label>
                                <input type="number" name="mark" id="mark" value="<?php echo $row['mark'];?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sex">Gender:</label><br>
                                <input type="radio" <?php echo ($row== 'Male') ?  "checked" : "" ;  ?> name="sex" value="Male">Male <br>
                                <input type="radio" <?php echo ($row== 'Female') ?  "checked" : "" ;  ?> name="sex" value="Female">Female
                            </div>
                            <!-- <div class="form-group">
                                <label for="file">Profile Picture:</label><br>
                                <input type="file" name="profile" id="file">
                            </div> -->
                    </div>
                    <div class="card-footer">
                        <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    </div>
                </form>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>