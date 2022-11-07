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

                        <input type="hidden" name="child" id="child_delete" required>

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
            alert($('#child_delete').val());
            alert(dataResult2);
          }
          
        });
      });
    </script>