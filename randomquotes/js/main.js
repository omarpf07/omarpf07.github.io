/* Code By Omar Perozo */
//Animations.
function Spectrum(){
    var color = ['#2D3939','#12AFAF','#94E090','#899CC9','#94506B','#A489CB','#D288C2','#5C2827','#806F61','#97AEA5','#463C5D','#27144F','#0C509C', '#1B2A3B', '#0A5CB8', '#85A4C6', '#FFA6A4', '#83CCAD', '#048F53', '#0E42BB']
    var num = Math.floor(Math.random() * (20 - 0)) + 0;
    $("#body").animate({
        backgroundColor: color[num],
        color: color[num]
      }, {
        easing: "linear",
        duration: 1000,
        complete: function() {
        }
      });
    $("button").animate({
        backgroundColor: color[num],
      }, {
        easing: "linear",
        duration: 1000,
        complete: function() {
        }
      });
    };

    function Animate(){
         var animationsQ = ['bounceInDown','bounceInLeft','bounceInRight','bounceInUp','fadeIn','fadeInDown','fadeInUp','fadeInUpBig' ,'slideInUp','slideInDown','zoomInDown','zoomInLeft','rollIn'];
         var animationsA = ['rubberBand','swing','tada','jello','fadeInLeft','fadeInRight','rotateInDownLeft','rotateInDownRight','slideInLeft','slideInRight','zoomIn','jackInTheBox', 'zoomInRight'];
         var num = Math.floor(Math.random() * (13 - 0)) + 0;
        $("#quote-box").addClass('animated ' + animationsQ[num]); 
        $("#author-box").addClass('animated ' + animationsA[num]);
        setTimeout(function(){
            $("#quote-box").removeClass('animated ' + animationsQ[num]); 
            $("#author-box").removeClass('animated ' + animationsA[num]);
        }, 1000);   


        };      
    
    $(document).ready(function() {
        Spectrum();
        Animate();
        getNewQuote();
    });
// End of Animations.
var quote;
var author;
function getNewQuote(){

    $.ajax({
        url: 'https://api.forismatic.com/api/1.0/',
        jsonp : 'jsonp',
        dataType : 'jsonp',
        data: {
            method: 'getQuote',
            lang: 'en',
            format: 'jsonp'
        },//data
        success: function(response){
            quote = response.quoteText;
            author = response.quoteAuthor;
            $("#Quote").text(quote);
            if(author) {
                $("#Author").text(author);
            }
            else
            {
                $("#Author").text("Unknown");
            }
        }
    });//ajax
};//getNewQuote();

function shareQuote(){
    window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(quote + ' – ' + author));
};