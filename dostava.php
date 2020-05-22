<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dostava</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
    <style>

        html {
            background: rgb(0,245,255);
            background: radial-gradient(circle, rgba(0,245,255,1) 0%, rgba(255,0,249,1) 100%);
        }
        body {
            margin: 0;
            padding: 50px;
            background: rgb(0,245,255);
            background: radial-gradient(circle, rgba(0,245,255,1) 0%, rgba(255,0,249,1) 100%);

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

<form action="dostavadb.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
    <div style="width: 400px;">
    </div>
    <div style="padding-bottom: 18px;font-size : 24px;" >Dostava</div>
    <div style="padding-bottom: 18px;font-size : 18px;">Ovde mozete online poruciti iz naseg restorana! Sve dostave preko 500 dinara su besplatne!</div>
    <div style="padding-bottom: 18px;">Jelo<span style="color: #EE0000;"> *</span><br/>
        <input type="checkbox" name="jelo" id="cezar">
        <label for="hrana">Cezar salata - 450 din</label><br>
        <input type="checkbox" name="jelo" id="biftek">
        <label for="hrana">Biftek - 700 din</label><br>
        <input type="checkbox" name="jelo" id="lignje">
        <label for="hrana">Lignje na raznju - 1200 din</label><br>
        <span>Kolicina<span style="color: #EE0000;"> *</span></span>
        <select id="option_1" name="kolicina" style="width : 250px;" class="form-control">
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
        </select>
    </div>
    <div style="padding-bottom: 18px;">Pice<span style="color: #EE0000;"> *</span><br/>
        <input type="checkbox" id="kola" name="pice">
        <label for="pice">Koka kola 2l - 110 din</label><br>
        <input type="checkbox" id="vino" name="pice">
        <label for="pice">Vino Zdrepceva krv - 250 din</label><br>
        <input type="checkbox" id="knjaz" name="pice">
        <label for="pice">Knjaz Milos 1,5l - 70 din</label><br>
        <span>Kolicina<span style="color: #EE0000;"> *</span></span>
        <select id="option_2" name="kolicina1" style="width : 250px;" class="form-control">
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
        </select>
    </div>
    <div style="padding-bottom: 18px;">Phone<span style="color: #EE0000"> *</span><br/>
        <input type="text" id="data_6" name="telefon" style="width : 250px;" class="form-control"/>
    </div>
    <div style="padding-bottom: 18px;">Adresa<span style="color: #EE0000"> *</span><br/>
        <input type="text" id="data_8" name="adresa" style="width : 250px;" class="form-control"/>
    </div>
    <div style="padding-bottom: 18px;">Nacin placanja:<span style="color: #EE0000"> *</span><br/>
        <select id="data_10" name="nacinp" style="width : 250px;" class="form-control">
            <option>Gotovina</option>
            <option>Kartica</option>
        </select>
    </div>
    <div style="padding-bottom: 18px;">Komentar / Dodatni zahtev<br/>
        <textarea id="data_9" name="comment" style="width : 400px;" rows="4" class="form-control"></textarea>
    </div>
    <div style="padding-bottom: 18px;"><input name="submit" value="Posalji" type="submit"/></div>
</form>


<script type="text/javascript">
    function validateForm() {
        if (isEmpty(document.getElementById('cezar').value.trim())) {
            alert('One checkbox is required!');
            return false;
        }
        if (isEmpty(document.getElementById('kola').value.trim())) {
            alert('One checkbox is required!');
            return false;
        }
        /* if (!validateEmail(document.getElementById('data_5').value.trim())) {
            alert('Email must be a valid email address!');
            return false;
        } */
        if (isEmpty(document.getElementById('data_8').value.trim())) {
            alert('Adress is required!');
            return false;
        }
        if (isEmpty(document.getElementById('data_10').value.trim())) {
            alert('Method of payment is required!');
            return false;
        }
        if (isEmpty(document.getElementById('data_6').value.trim())) {
            alert('Phone is required!');
            return false;
        }
        if (isEmpty(document.getElementById('option_1').value.trim())) {
            alert('Option is required!');
            return false;
        }
        if (isEmpty(document.getElementById('option_2').value.trim())) {
            alert('Option is required!');
            return false;
        }
        return true;
    }
    function isEmpty(str) { return (str.length === 0 || !str.trim()); }
    /* function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
        return isEmpty(email) || re.test(email);
    } */
</script>
</body>
</html>