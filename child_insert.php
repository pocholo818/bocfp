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
    <h2>Add Child</h2>
    <br>

    <div>
        <label>First Name</label><br>
        <input type="text">
        <br><br>

        <label>Last Name</label><br>
        <input type="text">
        <br><br>

        <label>Birthdate</label><br>
        <input type="date">
        <br><br>

        <label>Sex</label><br>
        <select>
            <option value="">---SELECT---</option>
            <option value="">Male</option>
            <option value="">Female</option>
        </select>
        <br><br>

        <label>Guardian</label><br>
        <input type="text">
        <br><br>

        <label>Contact Number</label><br>
        <input type="tel" maxlength="11">
        <br><br>

        <!-- <label>Height</label>
        <input type="text" maxlength="6">
        <br><br>

        <label>Weight</label>
        <input type="text" maxlength="6">
        <br><br>

        <label>BMI</label>
        <input type="text" maxlength="6">
        <br><br> -->

        <label>Purok</label><br>
        <input type="text" maxlength="2">
        <br><br>

        <input type="submit" class="btn btn-success" value="Add Child">
    </div>
</div>

<?php include 'template/footer.php'; ?>