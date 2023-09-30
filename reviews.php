<?php
session_start();
include("adheader.php");
include("dbconnection.php");
?>

<div class="container">
  <form autocomplete="off" method = "post">
    <div class="flex-row d-flex justify-content-center">
      <div class="col-lg-6 col-11 px-1">
        <div class="input-group input-daterange">
          <Select class="form-control text-left ml-2" id="query"  name="query">
          <option>All</option>
            <option>Schools</option>
            <option >Hospitals</option>
            <option >Fast foods</option>
            <option >Madrasa</option>

          </Select>
          <input type="submit" class="btn btn-sm btn-success" name="submit" id="submit" value="Submit" />
        </div>
      </div>
    </div> 
  </form>
</div>


<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
	</div>

	<div class="table-responsive">

		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

			<thead>
				<tr>
        <td>User name</td>
        <td>comment</td>
        <td>Rating</td>
 				</tr>
			</thead>
			<tbody>
        <tr>
           <td>&nbsp;Ahmed yasin</td>
            <td>&nbsp;Way fiicantahay</td>
            <td>&nbsp;<img style = 'height:70px; ' src="./images/5-star.png" alt=""> </td>
        </tr>

        <tr>
           <td>&nbsp;Sarah yasin</td>
            <td>&nbsp;aad u maan jeclaan</td>
            <td>&nbsp;<img style = 'height:70px; ' src="./images/1-star.png" alt=""> </td>
        </tr>
           
			
				
			</tbody>
		</table>
			</div>
			</div>
			</div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

 
    <?php
include("adfooter.php");

?>