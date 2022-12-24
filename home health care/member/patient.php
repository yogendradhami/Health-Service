<?php
// session_start();
if (!isset($_SESSION['email'])) {
   header("Location:../home.php");
}
?>
 <h1 style="text-align:center;">List of Patients</h1>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <!-- <th scope="col">Blood Group</th> -->
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php

  include_once "../requires/db.php";
  
  $sql="select * from blood_signup";
  $res=mysqli_query($conn,$sql);

  
  ?>
 
    <?php 
  while($obj=mysqli_fetch_assoc($res)){
    
    ?>
      <th scope="row">  <?php echo $obj['id'];?>  </th>
      <td><?php echo $obj['firstname'];?> <?php echo $obj['lastname'];?></td>
      <td><?php echo $obj['city'];?></td>
      <td><?php echo $obj['contactno'];?></td>
      <td><?php echo $obj['bloodgroup'];?></td>
       <td><img width="150px" src="../userimage/<?php echo $obj['image'];?>"></td>
    </tr>
    <?php }; ?>
  </tbody>
</table>

