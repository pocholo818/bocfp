<?php include 'template/header.php'; ?>

<style>
    input{
        width: 25%;
        font-size: 1vw;
    }
    label{
        font-size: 1vw;
    }
</style>

<?php include 'template/navbar.php'; ?>

<div class="container text-center form-group">
    <br>
    <h2>Add New Child</h2>
    <br>

    <div>
        <form id="form" method="POST">
            <label>First Name</label><br>
            <input type="text" name="fname" id="fname" required>
            <br><br>

            <label>Last Name</label><br>
            <input type="text" name="lname" id="lname" required>
            <br><br>

            <label>Birthdate</label><br>
            <input type="date" name="bdate" id="bdate">
            <br><br>

            <label>Sex</label><br>
            <select name="sex" id="sex" required>
                <option value="">---SELECT---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br>

            <label>Guardian</label><br>
            <input type="text" name="guardian" id="guardian" required>
            <br><br>

            <label>Contact Number</label><br>
            <input type="tel" maxlength="11" name="contact" id="contact" required>
            <br><br>

            <label>Purok</label><br>
            <input type="text" maxlength="2" id='purok' required>
            <br><br>

            <input type="submit" id="save" class="btn btn-success" value="Add Child">
        </form>
    </div>
</div>

<!-- <script src="js/child_insert.js"></script> -->

<script>
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
                                // $('#status').show();
                                // $('#status').html('Child added!');					
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

<?php include 'template/footer.php'; ?>