<?php
session_start();

include("adheader.php");
include("dbconnection.php");
if(isset($_POST['submit']))
{
    $sql = "INSERT INTO hospitalq (type, name, area, ticket, isforeign, exp, recommend, star)
    VALUES  ('$_POST[type]', '$_POST[hospitalname]', '$_POST[area]', '$_POST[ticket]', '$_POST[foreign]', '$_POST[exp]', '$_POST[recommend]', '$_POST[star]')";		
    
    if($qsql = mysqli_query($con,$sql))
		{
			echo "<div class='alert alert-success'>
			 Record has been inserted successfully.
		</div>";
		}
		else
		{
			echo mysqli_error($con);
		}
	
}

?>


<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1>Medical service review </h1>
</div>
   
    <form method="post" action="" name="frmmedicine" onSubmit="return validateform()">
    <table class="table table-hover">
      <tbody>
        <tr>
          <td width="34%">Type of hospital</td>
          <td width="66%">
            <select class="form-control" type="text" name="type" >
                <option value="Kids hospital">Kids hospital</option>
                <option value="Kids hospital">Adults hospital</option>

</select>
        </td>
        </tr>



        <tr>
          <td width="34%">Name of the hospital?</td>
          <td width="66%">
            <input class="form-control" placeholder = "name of the hospital" name = "hospitalname" type="text">
        </td>
        </tr>

        <tr>
          <td width="34%">What area is it in?</td>
          <td width="66%">
            <input class="form-control" placeholder = "what area is it in?" name = "area" type="text">
        </td>
        </tr>

        <tr>
          <td width="34%">How much was the ticket?</td>
          <td width="66%">
            <input class="form-control" placeholder = "How much was the ticket?" name = "ticket" type="text">
        </td>
        </tr>

        <tr>
          <td width="34%">Were the Doctors foreigners?</td>
          <td width="66%">

                    <select class="form-control" type="text" name="foreign" >
                                    <option value="Yes">Yes</option>
                                    <option value="NO">No</option>

                    </select>        
            </td>
        </tr>


        <tr>
          <td width="34%">Would you recommend it to family and friends?</td>
          <td width="66%">
                         <select class="form-control" type="text" name="recommend" >
                                    <option value="Yes">Yes</option>
                                    <option value="Maybe">Maybe</option>
                                    <option value="No">No</option>

                    </select>   
        </td>
        </tr>

       
       
       
        <tr>
          <td width="34%">How many stars would you give it out of 5? </td>
          <td width="66%">
          
                 <select class="form-control" type="text" name="star" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                    </select>   
        </td>
        </tr>
       
       
       
       
       
       
        <tr>
          <td width="34%">How was your experience?</td>
          <td width="66%">
            <textarea class="form-control" placeholder = "How was your experience?" name = "exp" type="text"> </textarea>
        </td>
        </tr>


 
        
        <tr>
          <td colspan="2" align="center"><input class="btn btn-success" type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
	</div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

 <!-- Logout Modal-->
 <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
 <div class="clear"></div>
  </div>
</div>
<?php
include("adfooter.php");
?>
<script type="application/javascript">

</script>