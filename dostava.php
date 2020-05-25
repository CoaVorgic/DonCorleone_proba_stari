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
            background: rgb(255,196,0);
            background: linear-gradient(180deg, rgba(255,196,0,1) 69%, rgba(221,38,38,1) 100%);
        }
        body {
            margin: 0;
            padding: 50px;
            background: rgb(255,196,0);
            background: linear-gradient(180deg, rgba(255,196,0,1) 69%, rgba(221,38,38,1) 100%);

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

<form action="dostavadb.php" method="post" enctype="multipart/form-data">
    <div style="width: 400px;">
    </div>
    <div style="padding-bottom: 18px;font-size : 24px;" >Dostava</div>
    <div style="padding-bottom: 18px;font-size : 18px;">Ovde mozete online poruciti iz naseg restorana! Sve dostave preko 500 dinara su besplatne!</div>
    <div style="padding-bottom: 18px;">Jelo<span style="color: #EE0000;"> *</span><br/>
        <input type="checkbox" name="jelo" class="jelo">
        <label for="hrana">Cezar salata - 450 din</label><br>
        <input type="checkbox" name="jelo" class="jelo">
        <label for="hrana">Biftek - 700 din</label><br>
        <input type="checkbox" name="jelo" class="jelo">
        <label for="hrana">Lignje na raznju - 1200 din</label><br>
        <span>Kolicina<span style="color: #EE0000;"> *</span></span>
        <select id="option_1" name="kolicina" style="width : 250px;" class="form-control">
            <option></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    <div style="padding-bottom: 18px;">Pice<span style="color: #EE0000;"> *</span><br/>
        <input type="checkbox" class="pice" name="pice">
        <label for="pice">Koka kola 2l - 110 din</label><br>
        <input type="checkbox" class="pice" name="pice">
        <label for="pice">Vino Zdrepceva krv - 250 din</label><br>
        <input type="checkbox" class="pice" name="pice">
        <label for="pice">Knjaz Milos 1,5l - 70 din</label><br>
        <span>Kolicina<span style="color: #EE0000;"> *</span></span>
        <select id="option_2" name="kolicina1" style="width : 250px;" class="form-control">
            <option></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    <div style="padding-bottom: 18px;">Phone<span style="color: #EE0000"> *</span><br/>
        <input type="text" id="phone" name="telefon" style="width : 250px;" class="form-control"/>
    </div>
    <div style="padding-bottom: 18px;">Adresa<span style="color: #EE0000"> *</span><br/>
        <input type="text" id="adress" name="adresa" style="width : 250px;" class="form-control"/>
    </div>
    <div style="padding-bottom: 18px;">Nacin placanja:<span style="color: #EE0000"> *</span><br/>
        <select id="method" name="nacinp" style="width : 250px;" class="form-control">
            <option></option>
            <option value="gotovina">Gotovina</option>
            <option value="kartica">Kartica</option>
        </select>
    </div>
    <div style="padding-bottom: 18px;">Komentar / Dodatni zahtev<br/>
        <textarea id="data_9" name="comment" style="width : 400px;" rows="4" class="form-control"></textarea>
    </div>
    <div style="padding-bottom: 18px;"><input name="submit" value="Posalji" type="submit"/></div>
</form>


<script type="text/javascript">
    function validateForm() {
        if (!document.getElementsByClassName('jelo').checked) {
            alert('Izabrati jedno jelo!');
            return false;
        }
        if (!document.getElementsByClassName('pice').checked) {
            alert('Izabrati jedno pice!');
            return false;
        }
        /* if (!validateEmail(document.getElementById('data_5').value.trim())) {
            alert('Email must be a valid email address!');
            return false;
        } */
        if (isEmpty(document.getElementById('adress').value.trim())) {
            alert('Adress is required!');
            return false;
        }
        if (isEmpty(document.getElementById('method').value.trim())) {
            alert('Method of payment is required!');
            return false;
        }
        if (isEmpty(document.getElementById('phone').value.trim())) {
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