<?php
session_start();

include("adheader.php");
include("dbconnection.php");
if(isset($_POST['submit']))
{
    $sql ="INSERT INTO expensetype(etypename) values('$_POST[etypename]')";
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

   
    <form method="post" action="" name="frmmedicine" onSubmit="return validateform()">
    <table class="table table-hover">
      <tbody>
        <tr>
          <td width="34%">Expense type</td>
          <td width="66%"><input placeholder="Enter Here" class="form-control" type="text" name="etypename" id="etypename" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input class="btn btn-default" type="submit" name="submit" id="submit" value="Submit" /></td>
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

 
 <div class="clear"></div>
  </div>
</div>
<?php
include("adfooter.php");
?>
<script type="application/javascript">

</script>