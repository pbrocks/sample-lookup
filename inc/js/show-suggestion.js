function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("suggestions").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("suggestions").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "predictive-array.php?q=" + str, true);
        xmlhttp.send();
    }
}