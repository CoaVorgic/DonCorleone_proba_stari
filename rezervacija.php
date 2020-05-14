<?php

session_start();
include "db_config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rezervacija</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
<style>

    html {
        background: rgb(251,104,63);
        background: radial-gradient(circle, rgba(251,104,63,1) 0%, rgba(247,222,53,1) 100%);
    }
    body {
        margin: 0;
        padding: 50px;
        background: rgb(251,104,63);
        background: radial-gradient(circle, rgba(251,104,63,1) 0%, rgba(247,222,53,1) 100%);

       /* background: rgb(63,94,251);
        background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(229,53,247,1) 100%); */
    }

    form {
        width: 400px;
        margin: 0 auto;
    }


</style>
</head>
<body>

<form action="rezervacijadb.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
    <div style="width: 400px;">
    </div>
    <div style="padding-bottom: 18px;font-size : 24px;" >Table Reservation</div>
    <div style="padding-bottom: 18px;font-size : 18px;">We would be glad to reserve a table for you at our restaurant!</div>
    <div style="padding-bottom: 18px;">Name<span style="color: lime;"> *</span><br/>
        <input type="text" id="data_3" name="name" style="width : 400px;" class="form-control"/>
    </div>
    <div style="padding-bottom: 18px;">Phone<span style="color: lime;"> *</span><br/>
        <input type="text" id="data_4" name="phone" style="width : 400px;" class="form-control"/>
    </div>
    <div style="padding-bottom: 18px;">Email<br/>
        <input type="text" id="data_5" name="email" style="width : 400px;" class="form-control"/>
    </div>
    <div style="padding-bottom: 18px;">Date<span style="color: lime;"> *</span><br/>
        <input type="text" id="data_6" name="date" style="width : 250px;" class="form-control"/>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">new Pikaday({ field: document.getElementById('data_6') });</script>
    <div style="padding-bottom: 18px;">Time<span style="color: lime;"> *</span><br/>
        <input type="time" id="data_7" name="time" min="08:00" max="23:00" style="width : 250px;" class="form-control" required/>
    </div>
    <div style="padding-bottom: 18px;">Number of Attendees<span style="color: lime;"> *</span><br/>
        <select id="data_8" name="brojg" style="width : 250px;" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>10+ (Specify in Comments)</option>
        </select>
    </div>
    <div style="padding-bottom: 18px;">Comments / Additional Requests<br/>
        <textarea id="data_9" name="comment" style="width : 400px;" rows="6" class="form-control"></textarea>
    </div>
    <div style="padding-bottom: 18px;"><input name="submit" value="Submit" type="submit"/></div>
</form>


<script type="text/javascript">
    function validateForm() {
        if (isEmpty(document.getElementById('data_3').value.trim())) {
            alert('Name is required!');
            return false;
        }
        if (!validateEmail(document.getElementById('data_5').value.trim())) {
            alert('Email must be a valid email address!');
            return false;
        }
        if (isEmpty(document.getElementById('data_6').value.trim())) {
            alert('Date is required!');
            return false;
        }
        if (isEmpty(document.getElementById('data_7').value.trim())) {
            alert('Time is required!');
            return false;
        }
        if (isEmpty(document.getElementById('data_4').value.trim())) {
            alert('Phone is required!');
            return false;
        }
        return true;
    }
    function isEmpty(str) { return (str.length === 0 || !str.trim()); }
    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
        return isEmpty(email) || re.test(email);
    }
</script>
</body>
</html>