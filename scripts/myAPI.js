myBody ='{"Lon":"27.59","Lat":"47.15","Pressure":"1014","Humidity":"64", "Temp_min":"20.00","Temp_max":"25.01"}';

function UserAction(body) {
    var xhttp = new XMLHttpRequest();
    var rasp = '';
    xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
            //  alert(this.responseText);
         }
         console.log(this.responseText);
         $("#temperrr").html(this.responseText);
         rasp = this.responseText;
         
    };
    xhttp.open("POST", "https://localhost:44349/api/Predict", true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send(body);
    return rasp;
}
var x = UserAction(myBody);
console.log("returnare"+ x);

