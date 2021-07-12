<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/destination.css" rel="stylesheet">
    </head>
<body>
    @yield('content')
    <script src="assets/js/jquery-1.12.1.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui.min.js" type="text/javascript" ></script>
     <script src="assets/js/bootstrap.min.js"></script>
    @yield('js')

    <script>
//--------CountDown----------------------
 /*       var countDownDate = new Date("Apr 30, 2021 18:55:00").getTime();
        var x = setInterval(function() {
          var now = new Date().getTime();
          var distance = countDownDate - now;
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          document.getElementById("countdown").innerHTML = hours + "H :"
          + minutes + "M :" + seconds + "S";
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
          }
        }, 1000); */
 //--------------OneWay/RoundTrip---------------------     
      function oneWay(){
            $('#returnDateDiv').hide();
      	    $('#departureDateDiv').addClass( "col-md-11 col-12 pr-md pr-3" );
      		$('#departureDateDiv').css("margin-left","7px");
      		$('#end-date').attr("required", false);
            $('#end-date').val("");
            $('.actives1').css({'background': 'white','color': 'black'})
            $('.actives2').css({'background': '#003d70','color': 'white'})
        }
        function roundTrip(){
      		$('#departureDateDiv').removeClass( "col-md-11 col-12 pr-md pr-3" ).addClass( "col-md-6 col-6 pr-md-0 pr-0" );
            $('#returnDateDiv').show();
      		$('#departureDateDiv').css("margin-left","0px");
            $('.actives1').css({'background': '#003d70','color': 'white'})
            $('.actives2').css({'background': 'white','color': 'black'})
        }
//-------------calendarDatePicker-----------------     
        $(function(){
            $("#start-date").datepicker({
                    numberOfMonths : 2,
                    dateFormat: 'yy-mm-dd',
                    minDate:0,
                    showOtherMonths:true,
                    onSelect:function(selectdate){
                        var dt = new Date(selectdate);
                        dt.setDate(dt.getDate()+1)
                        $('#end-date').datepicker('option','minDate',dt);
                    },
            });
            $("#end-date").datepicker({
                    numberOfMonths : 2,
                    dateFormat: 'yy-mm-dd',
                    showOtherMonths:true,
                    onSelect:function(selectdate){
                        var dt = new Date(selectdate);
                        dt.setDate(dt.getDate()-1)
                        $('#start-date').datepicker('option','maxDate',dt);
                    },
            });
        });   
//------------------------------------------------------------------------------
        $('childrenValue').html($('children').val());
        $('infantsValue').html($('infants').val());
  //------------------PassengerIncreaseButton------------------      
       function increaseAdultsValue() {
        var value = parseInt(document.getElementById('noofadults').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('noofadults').value = value;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function increaseChildrenValue() {
        var value1 = parseInt(document.getElementById('children').value, 10);
        value1 = isNaN(value1) ? 0 : value1;
        value1++;
        document.getElementById('children').value = value1;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function increaseInfantsValue() {
        var value2 = parseInt(document.getElementById('infants').value, 10);
        value2 = isNaN(value2) ? 0 : value2;
        value2++;
        document.getElementById('infants').value = value2;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
      }
//-----------------PassengerDecreaseButton------------------------
      function decreaseAdultsValue() {
        var value = parseInt(document.getElementById('noofadults').value, 10);
        value = isNaN(value) ? 0 : value;
        value--;
        document.getElementById('noofadults').value = value;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function decreaseChildrenValue() {
        var value1 = parseInt(document.getElementById('children').value, 10);
        value1 = isNaN(value1) ? 0 : value1;
        value1--;
        document.getElementById('children').value = value1;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
       }
       function decreaseInfantsValue() {
        var value2 = parseInt(document.getElementById('infants').value, 10);
        value2 = isNaN(value2) ? 0 : value2;
        value2--;
        document.getElementById('infants').value = value2;
        value=document.getElementById('noofadults').value;
        value1=document.getElementById('children').value;
        value2=document.getElementById('infants').value;
        document.getElementById('passenger').value = parseInt(value)+parseInt(value1)+parseInt(value2);
      }

        $(document).ready(function (){
            //-------------flight more details---------------------- 
              var incID1 = 1;var incID2 = 1;var incID3 = 1;
              $(".uniqueID").each(function () {
                  $(this).attr('data-target', '#collapseExample'+ incID1);
                  $(this).attr('aria-controls', 'collapseExample'+ incID1);
                  incID1++;
              });
              $(".uniqueID2").each(function () {
                  $(this).attr('id', 'collapseExample'+ incID2);
                  incID2++;
              });
              $(".uniqueID3").each(function () {
                  $(this).attr('data-target', '#collapseExample'+ incID3);
                  $(this).attr('aria-controls', 'collapseExample'+ incID3);
                  incID3++;
              });
            //-------ModalPopUp-----------------------------   
            $('.closeModel').hide();
            setTimeout(() => {
                $("#exampleModal").modal()
                $('.closeModel').show();
            },5000);
            $('#close').on('click', function () {
                    $('.closeModel').hide();
                }); 
        //------PagePreLoader------------------    
	        $( window ).load(function() {
                setTimeout(() => {
                    $('.loading').slideUp(500)
                },1000);
            });
        //---------One/Round Way Button-----------------    
            $('.actives1').css({'background': '#003d70','color': 'white'})
            $('.actives2').css({'background': 'white','color': 'black'})
        //----------PassengerBoxHide\Show---------------    
      		$('#passengerBox').hide();
      		$('#passenger').click(function(){
      		  $('#passengerBox').toggle();
      		});
      		$('#done').click(function(){
      		  $('#passengerBox').hide();
      		});
        //---------Address Autocomplete input field------------------  
            $("#origin").keyup(function(){
                $.ajax({
                    url: '/get-locations?category=1&term='+$("#origin").val(),
                    type: "GET",
                    success: function(e) {
                        $("#success").html(e)
                    },
                    complete: function() {
                        $(".search_result1").show();
                    }
                })
            }); 
            $("#destination").keyup(function(){
                $.ajax({
                    url: '/get-locations?category=2&term='+$("#destination").val(),
                    type: "GET",
                    success: function(e) {
                        $("#success1").html(e)
                    },
                    complete: function() {
                        $(".search_result2").show();
                    }
                });
            });
            $(document).on('click', '.search_item1', function(){
                $("#origin").val($(this).find($(".location_name1")).text());
                $(".search_result1").hide()
            });
            $(document).on('click', '.search_item2', function(){
                $("#destination").val($(this).find($(".location_name2")).text());
                $(".search_result2").hide()
            });

            $("body").click(function() {
                $(".search_result1").hide()
                $(".search_result2").hide()
            });    
            $(".exchange").click(function() {
                var text1 = $("#origin").val();
                var text2 = $("#destination").val();
                $("#origin").val(text2);
                $("#destination").val(text1);
            }); 
            //--------------------filterFriceRange---------------
            $('#price_range').slider({
              range : true,
              min : 0,
              max : 5000,
              values : [0, 5000],
              step : 1,
              stop : function(event, ui){
                $('#price_show').html('$' + ui.values[0] + ' - ' + '$' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
              }
            });  	
        });
    </script>
</body>
</html>