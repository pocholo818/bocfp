<?php include 'template/header.php' ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <script src="js/search.js"></script>

    <?php include 'template/navbar.php'; ?>

    <div class="container">	
	  <h3></h3>
      <br>
      <div class="card">
        <div class="card-header">Child List 
            <button type="button" style="width:5vw; float: right;" class="btn btn-success addbtn"><span class="material-symbols-outlined">Add</span></button></div>
        <div class="card-body" id="searchSection">
          <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Type your search keyword here" />
          </div>
          <div class="table-responsive" id="searchResult"></div>
        </div>
      </div>
    </div>

    <!-- INSERT FORM -->
    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Enter Child Info </h5>
                        <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                            X
                        </button>
                    </div>

                    <form id="form" method="POST">

                        <div class="modal-body">

                            <div class="form-group">
                                <label> First Name</label>
                                <input type="text"  name="fname" id="fname" class="form-control" required
                                    placeholder="Enter Last Name">
                            </div>

                            <div class="form-group">
                                <label> Last Name </label>
                                <input type="text" name="lname" id="lname" class="form-control" required
                                    placeholder="Enter Last Name">
                            </div>

                            <div class="form-group">
                                <label> Birth Date </label>
                                <input type="date" name="bdate" id="bdate" required>
                            </div>

                            <div class="form-group">
                                <label> Sex </label>
                                <select name="sex" id="sex" required>
                                    <option value="">---SELECT---</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Guardian </label>
                                <input type="text" name="guardian" id="guardian" class="form-control" required
                                    placeholder="Enter Guardian Name">
                            </div>

                            <div class="form-group">
                                <label> Contact Number </label>
                                <input type="tel" maxlength="11" name="contact" id="contact" class="form-control" required
                                    placeholder="Enter Contact Number">
                            </div>

                            <div class="form-group">
                                <label> Purok </label>
                                <input type="text" maxlength="2" id='purok' name="purok" class="form-control" required
                                    placeholder="Enter Purok Number">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="save" class="btn btn-success">Add Child</button>
                        </div>
                    </form>

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
                    </button>test
                </div>

                <form id="form" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="id" id="child_id" required>

                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required
                                placeholder="Enter First Name">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required
                                placeholder="Enter LastCode">
                        </div>

                        <div class="form-group">
                            <label> Birth Date </label>
                            <input type="text" name="birthday" step="any" id="birthday" class="form-control" disabled
                                placeholder="Enter Birth Date">
                        </div>

                        <div class="form-group">
                            <label> Sex </label>
                            <input type="text" maxlength="1"  name="sexx" id="sexx" class="form-control" style="text-transform:uppercase" oninput="this.value = this.value.toUpperCase()" required
                                placeholder="Enter Sex">
                        </div>

                        <div class="form-group">
                            <label> Guardian </label>
                            <input type="text" name="guardiann" id="guardiann" class="form-control" required
                                placeholder="Enter Guardian Name">
                        </div>

                        <div class="form-group">
                            <label> Contact Number </label>
                            <input type="tel" maxlength="11" name="contact_number" id="contact_number" class="form-control" required
                                placeholder="Enter Contact Number">
                        </div>

                        <div class="form-group">
                            <label> Purok </label>
                            <input type="tel" maxlength="2" name="purokk" id="purokk" class="form-control" required
                                placeholder="Enter Purok Number">
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

                            <input type="hidden" name="child_delete" id="child_delete" required>

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
        // add
        $(document).ready(function() {
            $('#save').on('click', function(){
                var fname = $('#fname').val();
                var lname = $('#lname').val();
                var bdate = $('#bdate').val();
                var sex = $('#sex').val();
                var guardian = $('#guardian').val();
                var contact = $('#contact').val();
                var purok = $('#purok').val();

                if(fname != "" && lname != "" && bdate != "" && sex != "" 
                    && guardian != "" && contact != "" && purok != ""){
                        $.ajax({
                            url: "sql/child_add.php",
                            type: "POST",
                            data: {
                                fname: fname,
                                lname: lname,
                                bdate: bdate,
                                sex: sex,
                                guardian: guardian,
                                contact: contact,
                                purok: purok				
                            },
                            cache: false,
                            success: function(dataResult){
                                var dataResult = JSON.parse(dataResult);
                                if(dataResult.statusCode == 200){
                                    alert('Child added!');
                                    $('#form')[0].reset();				
                                }
                                else if(dataResult.statusCode==201){
                                    alert("Error occured !");
                                }
                                
                            }
                        });
                    }
                    else{
                        alert('Please fill all the field!');
                    }
                });
            });
    </script>

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
            bday: $('#birthday').val(),
            sex: $('#sexx').val(),
            guardian: $('#guardiann').val(),
            contact_number: $('#contact_number').val(),
            purok: $('#purokk').val()
          },
          success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode == 200){
                alert('Child Updated!');		
                }
            }

        });
      }); 
    </script>

    <script>
    // delete
      $(document).on("click", "#delete", function() { 
        $.ajax({
          url: "sql/child_delete.php",
          type: "POST",
          cache: false,
          data:{
            id: $('#child_delete').val()
          },
          success: function(dataResult2){
            alert("Child Deleted!");
          }
          
        });
      });
    </script>

<?php include 'template/footer.php' ?>