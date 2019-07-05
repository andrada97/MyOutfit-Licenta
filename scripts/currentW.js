
$.getJSON("http://ipinfo.io", function (data){
    console.log(data);
    
    // Aflam locatia curenta prin longitudine si latitudine
    var lat = (data.loc).split(',')[0];
    var long = (data.loc).split(',')[1];
    $("#lati").html(lat);
    $("#longi").html(long);

    // Aplicam longitudinea si latitudinea curenta in api, pentru a afla detaliile despre vremea prezenta
    var begin = "https://fcc-weather-api.glitch.me/api/current?lat=";
    var part = "&lon=";
    var link1 = begin.concat(lat);
    var link2 = link1.concat(part);
    var link = link2.concat(long);


    $.getJSON(link, function(response) {
        console.log(response);

        var humid = response.main.humidity;
        var temper = response.main.temp;
        var state = response.weather[0].main;
        var wind = response.wind.speed;
        var icon = response.weather[0].icon;

        // Date necesare predictiei
        var press = response.main.pressure;
        var tmin = response.main.temp_min;
        var tmax = response.main.temp_max

        $("#umid").html(humid + '%');
        $("#stare").html(state);
        $("#vant").html(wind + ' m/h');
        $(".icon").attr("src",icon);

        //Apelarea API-ului creat pentru realizarea predictiei

        var myBody ='{"Lon":"' + long+
                     '","Lat":"' + lat+
                     '","Pressure":"'+ press+
                     '","Humidity":"' + humid +
                     '","Temp_min":"' + tmin +
                     '","Temp_max":"' + tmax + '"}';
        var corp = '{"Lon":"27.59","Lat":"47.15","Pressure":"1014","Humidity":"64", "Temp_min":"20.00","Temp_max":"25.01"}' ;
        // console.log("Body" + info);

        function UserAction(body) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) {
                    //  alert(this.responseText);
                 }
                 console.log(this.responseText);
                 $("#temp").html(Math.round(this.responseText * 100) / 100+' \xB0C');
                 $("#temp2").html(Math.round(this.responseText * 100) / 100+' \xB0C');
   
            };
            xhttp.open("POST", "https://localhost:44349/api/Predict", true);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send(body);
        }
        UserAction(myBody);
    })
})
