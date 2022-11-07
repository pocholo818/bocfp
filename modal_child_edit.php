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
                            <input type="text" name="sexx" id="sexx" class="form-control" required
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
                            <input type="text" maxlength="2" name="purokk" id="purokk" class="form-control" required
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