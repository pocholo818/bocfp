<html>
  <head>
    <title>Testing</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  </head>

  <body>
  <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Child Data </h5>
                    <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>

                <form id="fom" method="POST">

                    <div class="modal-body">

                        <input type="text" name="child_delete" id="child_delete" required>

                        <h4> Do you want to Delete this Child?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <button type="submit" id="delete" class="btn btn-success">YES</button>
                    </div>
                </form>
  <?php 
    $id = $_POST['child_delete'];

    echo $id;
  ?>
    
  </body>
</html>