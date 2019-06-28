
$.getJSON("http://ipinfo.io", function (data){
    console.log(data);
    

    var lat = (data.loc).split(',')[0];
    var long = (data.loc).split(',')[1];

    // console.log(lat);
    // console.log(long);

    var begin = "https://fcc-weather-api.glitch.me/api/current?lat=";
    var part = "&lon=";
    var link1 = begin.concat(lat);
    var link2 = link1.concat(part);
    var link = link2.concat(long);

    // console.log(link);

    $.getJSON(link, function(response) {
        console.log(response);

        var humid = response.main.humidity;
        var temper = response.main.temp;
        var state = response.weather[0].main;
        var wind = response.wind.speed;
        var icon = response.weather[0].icon;

        var press = response.main.pressure;
        var tmin = response.main.temp_min;
        var tmax = response.main.temp_max

        // console.log(humid);
        // console.log(state);
        // console.log(icon);
        // console.log(wind);

        $("#temp").html(temper +' \xB0C');
        $("#umid").html(humid + '%');
        $("#stare").html(state);
        $("#vant").html(wind + ' m/h');
        $(".icon").attr("src",icon);
        $("#temp2").html(temper +' \xB0C');

       

        var req ={"Lon":long,
        "Lat":lat,
        "Pressure":press,
        "Humidity":humid,
        "Temp_min":tmin,
        "Temp_max":tmax};
  
        var url = 'https://localhost:44349/api/Predict';
        var json = JSON.stringify(req);

        var xhr = new XMLHttpRequest();
        xhr.open("POST",url,true);
        xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
        xhr.onload = function(){
            var temper = JSON.parse(xhr.responseText);
         }
        //  xhr.send(json);
        console.log(temper);




    })
   



})
