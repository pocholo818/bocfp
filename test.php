<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<!-- Insert child modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
    <span class="material-symbols-outlined">
    person_add
    </span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Add new Child
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </h4>
      </div>

        <!-- CONTENTS -->
        <div class="modal-body">
            <form>
                    <div class="form-group">
                        <label>First Name</label><br>
                        <input type="text" class="form-control" name="fname" id="fname" required>
                    </div>

                    <div class="form-group">
                        <label>Last Name</label><br>
                        <input type="text" class="form-control" name="lname" id="lname" required>
                    </div>

                    <div class="form-group">
                        <label>Birthdate</label><br>
                        <input type="date" class="form-control" name="bdate" id="bdate">
                    </div>

                    <div class="form-group">
                        <label>Sex</label><br>
                        <select class="form-control" name="sex" id="sex" required>
                            <option value="">---SELECT---</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Guardian</label><br>
                        <input type="text" class="form-control" name="guardian" id="guardian" required>
                    </div>

                    <div class="form-group">
                        <label>Contact Number</label><br>
                        <input type="tel" class="form-control" maxlength="11" name="contact" id="contact" required>
                    </div>

                    <div class="form-group">
                        <label>Purok</label><br>
                        <input type="text" class="form-control" maxlength="2" id='purok' required>
                    </div>
            
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="subit" class="btn btn-success" value="Add Child">
      </div>
    </form>

    </div>
  </div>
</div>
