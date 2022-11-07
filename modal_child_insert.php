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
