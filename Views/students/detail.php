<link rel="stylesheet" href="Views/bootstrap-4.3.1/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <?php
            if(isset($data['student_data'])){
                foreach($data['student_data'] as $row){         
        ?>
        <table class="table table-border">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td><?php echo $row['id']?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $row['name']?></td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td><?php echo $row['class']?></td>
                </tr>
                <tr>
                    <th>Mark</th>
                    <td><?php echo $row['mark']?></td>
                </tr>
                <tr>
                    <th>Sex</th>
                    <td><?php echo $row['sex']?></td>
                </tr>
            </tbody>
        </table>
        <?php
               }
            }
        ?>
    </div>
</div>