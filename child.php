<?php include 'template/header.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/search.js"></script>

    <?php include 'template/navbar.php'; ?>

    <div class="container">	
	  <h3></h3>
      <br>
      <div class="card">
        <div class="card-header">Child List</div>
        <div class="card-body" id="searchSection">
          <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Type your search keyword here" />
          </div>
          <div class="table-responsive" id="searchResult"></div>
        </div>
      </div>
    </div>

    <!-- EDIT FORM -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Child Info </h5>
                    <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>

                <form id="form" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id" id="child_id" required>

                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required
                                placeholder="Enter New Product Name">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required
                                placeholder="Enter New Product Code">
                        </div>

                        <div class="form-group">
                            <label> Birth Date </label>
                            <input type="text" name="bday" step="any" id="bday" class="form-control" disabled
                                placeholder="Enter New Price">
                        </div>

                        <div class="form-group">
                            <label> Sex </label>
                            <input type="text" name="sex" id="sex" class="form-control" required
                                placeholder="Enter New Quantity">
                        </div>

                        <div class="form-group">
                            <label> Guardian </label>
                            <input type="text" name="guardian" id="guardian" class="form-control" required
                                placeholder="Enter New Quantity">
                        </div>

                        <div class="form-group">
                            <label> Contact Number </label>
                            <input type="text" name="contact_number" id="contact_number" class="form-control" required
                                placeholder="Enter New Quantity">
                        </div>

                        <div class="form-group">
                            <label> Purok </label>
                            <input type="text" name="purok" id="purok" class="form-control" required
                                placeholder="Enter New Quantity">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="update" class="btn btn-success">Update Child</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE FORM  -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Child Data </h5>
                    <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>

                <form id="fom" method="POST">

                    <div class="modal-body">

                        <input name="child_delete" id="child_delete">

                        <h4> Do you want to Delete this Child?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <button type="submit" id="delete" class="btn btn-success">YES</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
      // edit
      $(document).on("click", "#update", function() { 
        $.ajax({
          url: "sql/child_update.php",
          type: "POST",
          cache: false,
          data:{
            id: $('#child_id').val(),
            first_name: $('#first_name').val(),
            last_name: $('#last_name').val(),
            bday: $('#bday').val(),
            sex: $('#sex').val(),
            guardian: $('#guardian').val(),
            contact_number: $('#contact_number').val(),
            purok: $('#purok').val()
          },
          success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode == 200){
              $('#editmodal').modal().hide();
              alert('Child Updated Successfully!');
              // location.reload();		
            }
          }

        });
      }); 
    </script>

    <script>
    // delete
      $(document).on("click", "#delete", function() { 
        // console.log('output: '+$('#child_delete').val());
        // var $ele = $(this).parent().parent();
        $.ajax({
          url: "sql/child_delete.php",
          type: "POST",
          cache: false,
          data:{
            id: $('#child_delete').val()
          },
          success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode == 200){
              // $('#deletemodal').modal().hide();
              alert('Child Deleted Successfully!');
            }
          }
          
        });
      });
    </script>

<?php include 'template/footer.php' ?>