<!DOCTYPE html>
<?php
    session_start();
    include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
        <script>
        $(document).ready(function() {
          $('#student').DataTable( {
            dom: 'Bfrtip',
             buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
            ]
          } );
        } );
        </script>


</head>

<body>
<div class="container bg-secondary col-11 py-3 px-3 mb-5">
          <div class="clearfix tablebox table-responsive">
            <table id="student" class="display nowrap" style="width:100%">
            <thead class='bbb'>
                <tr>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Email</th>
                 <th>Date of Birth</th>
                 <th>Address</th>
                 <th>Image Address</th>
                 <th>Action </th>
              </tr>
            </thead>
            <tbody class="text-black">
                <?php
                $sql="SELECT * FROM details WHERE status='Active'";
                $res=mysqli_query($connection,$sql);
                while($sql_arr=mysqli_fetch_array($res)){
                ?>
                 <tr>
                     <td><?php echo $sql_arr['fname'];?></td>
                     <td><?php echo $sql_arr['lname'];?></td>
                     <td><?php echo $sql_arr['email'];?></td>
                     <td><?php echo $sql_arr['dob'];?></td>
                     <td><?php echo $sql_arr['address'];?></td>
                     <td><?php echo $sql_arr['image_address'];?></td>
                     <td><?php echo '<a href=table.php?id='.$sql_arr['id'].'>Edit</a> /<a '?>onclick = "return confirm('Are you sure you want to delete this item ?');"
                     <?php echo 'href=delete.php?id='.$sql_arr['id'];?>>Delete</a></td>
                 </tr>
                <?php
                }
                ?>
              
            </tbody>
        </table>
    </div>
</div>
</body>
</html>