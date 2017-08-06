
$(document).ready(function() {
    var C = false;
    var background 
    var apiData;
    var background = [  '#2F3F3F', //2xx
                        '#879B9B', //3xx
                        '#424A4A', //5xx
                        '#2C3A3A', //6xx
                        '#9DB5B5', //7xx
                        '#249AB6', //800
                        '#669F9F', //8XX
                        '#586AAD', //90X
                        '#0E1116'] //night
    var animations = ['bounceInDown','bounceInLeft','bounceInRight','bounceInUp','fadeIn','fadeInDown','fadeInUp','fadeInUpBig' ,'slideInUp','slideInDown','zoomInDown','zoomInLeft','rollIn'];
    var num = Math.floor(Math.random() * (13 - 0)) + 0;
    $("#navbar").addClass('animated ' + animations[num]);
    $("#Title").addClass('animated ' + animations[num]);
    $("#Loc").addClass('animated ' + animations[num]);
    $("#Ic").addClass('animated ' + animations[num]);
    $("#Weat").addClass('animated ' + animations[num]);
    $("#Temp").addClass('animated ' + animations[num]);
        setTimeout(function(){
            $("#navbar").addClass('animated ' + animations[num]);
            $("#Title").removeClass('animated ' + animations[num]);
            $("#Loc").addClass('animated ' + animations[num]);
            $("#Ic").addClass('animated ' + animations[num]);
            $("#Weat").addClass('animated ' + animations[num]);
            $("#Temp").addClass('animated ' + animations[num]);
    }, 1000);  
    
   function displayTemp(F,C)
    {
        if(C) return Math.round((F-32)*(5/9)) + '°C';
        return Math.round(F +'°F');
    };//displayTemp()

    function render(data, C){
        var currentWeather = apiData.weather[0].description;
        var currentTemp = displayTemp(data.main.temp, C);
        var currentIcon = apiData.weather[0].icon;
        $("#Weather").html(currentWeather);
        $("#Temperature").html(currentTemp);
        var apiIcon = 'img/'+currentIcon+'.svg';
        $("#Icon").html('<img src="'+apiIcon+'"></img>');

    };//render()

    $.getJSON('https://freegeoip.net/json/').done(function(location){
        $("#Location").html(location.city+ ', ' + location.country_code + '.');
        $.getJSON('https://api.openweathermap.org/data/2.5/weather?lat='+location.latitude+'&lon='+location.longitude+'&units=imperial&appid=21f2c5a13b50b2d2616d5ee5728ee971',function(data){
            apiData= data;
            render(apiData,C);
            $("#temp-button").click(function(){
                C = !C
                render(data,C);
            });//Temperature button
            
            var id = data.weather[0].id; 
            if(id >= 200 && id <= 299)
            {
                $("#body").animate({
                    backgroundColor: background[0],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 2XX
            if(id >= 300 && id <= 399)
            {
                $("#body").animate({
                    backgroundColor: background[1],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 3XX
            if(id >= 500 && id <= 599)
            {
                $("#body").animate({
                    backgroundColor: background[2],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 5XX
            if(id >= 600 && id <= 699)
            {
                $("#body").animate({
                    backgroundColor: background[3],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 6XX
            if(id >= 700 && id <= 799)
            {
                $("#body").animate({
                    backgroundColor: background[4],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 7XX
            if(id == 800)
            {
                $("#body").animate({
                    backgroundColor: background[5],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 800
            if(id >= 801 && id <= 804)
            {
                $("#body").animate({
                    backgroundColor: background[6],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 8XX
            if(id >= 801 && id <= 804)
            {
                $("#body").animate({
                    backgroundColor: background[6],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 8XX
            if(id >= 801 && id <= 804)
            {
                $("#body").animate({
                    backgroundColor: background[7],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
            };//if 8XX
            
            if(apiData.weather[0].icon.endsWith('n'))
                {
                    $("#body").animate({
                    backgroundColor: background[8],
                     }, {
                        easing: "linear",
                        duration: 1000,
                        complete: function() {}
                    });
                };
        });//getJSON Weather
    });//getJSON Location
});//DOCUMENT.READY


