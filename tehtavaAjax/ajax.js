function rekisteroidy(lomake) {
    var data = new Object();
    data.tunnus = lomake.tunnus.value;
    data.salasana = lomake.salasana.value;
    var json = JSON.stringify(data);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Rekisteröinti onnistui!");
        }
    };


    xmlhttp.open("POST", "kirjaudu.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("henkilo=" + json);
}





function kirjautuminen(lomake) {
    var data = new Object();
    data.tunnus = lomake.tunnus.value;
    data.salasana = lomake.salasana.value;
    var json = JSON.stringify(data);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };


    xmlhttp.open("POST", "rekisteroidy.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("henkilo=" + json);
}