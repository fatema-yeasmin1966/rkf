<?php 
include 'connect.php';
// include 'session.php';
 

 $values = QB::query("SELECT * FROM t_donation")->get();
 
 ?>

<?php 
include "includes/header.php";
?>
<?php 
include "includes/header_nav.php";
?>


<body>
<?php 
include "includes/sidebar.php";
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-10 col-8 col-sm-10 text-info  offset-md-2 card">
 			
 			<table id="table_id" class="table" >
        <h3 class="mt-2 text-info text-center card p-2 shadow"style="font-weight: bold;">Donation</h3>
      					<thead>
                     <tr>
                        <th>Amount</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Donation Type</th>
                        <th>Payment Getway</th>
                        <th>Date</th>
                       <!--  <th>Action</th>
                    -->
                      </tr>     
                </thead>

      					 <?php 
                 foreach ($values as  $value) {
                 ?>


                  <tbody>
                     <tr>
                         <td><?php echo $value->amount;?></td>
                         <td><?php echo $value->email;?></td>
                         <td><?php echo $value->phone_number;?></td>
                         <td><?php echo $value->donation_type;?></td>
                         <td><?php echo $value->payment_gatway;?></td>
                         <td><?php echo $value->date;?></td>
                         <!-- <td><a href="update.php?id=<?php echo $value->id;?>">
                          <span class="badge bg-primary text-white">Edit</a>
                          <a href="delete.php?id=<?php echo $value->id;?>">
                          <span class="badge bg-primary bg-danger">Delete</span></a>
                          <a href="details.php?id=<?php echo $value->id;?>" >
                          <span class="badge bg-info text-white ">Details</span></a>
                        </td>  -->
                     </tr>
                 </tbody>
                 <?php } ?>
               </table>
      			</div>
      		</div>
      	</div>
      </div>

       <script>
        $(document).ready(function () {
          $('#table_id').DataTable({
              search: {
                  return: true
              },
          });
      });
      </script>
      <script type="text/javascript" src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>



</body>
</html>