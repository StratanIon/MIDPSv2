<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="keywords" content="test,site,website"/>
    <meta name="description" content="Acest sait este de testare"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <title>TEST</title>
    <script>
        function displayCalendar(){


            var htmlContent ="";
            var FebNumberOfDays ="";
            var counter = 1;


            var dateNow = new Date();
            var month = dateNow.getMonth();

            var nextMonth = month+1; //+1; //Used to match up the current month with the correct start date.
            var prevMonth = month -1;
            var day = dateNow.getDate();
            var year = dateNow.getFullYear();


            //Determing if February (28,or 29)
            if (month == 1){
                if ( (year%100!=0) && (year%4==0) || (year%400==0)){
                    FebNumberOfDays = 29;
                }else{
                    FebNumberOfDays = 28;
                }
            }


            // names of months and week days.
            var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
            var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
            var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]


            // days in previous month and next one , and day of week.
            var nextDate = new Date(nextMonth +' 1 ,'+year);
            var weekdays= nextDate.getDay();
            var weekdays2 = weekdays
            var numOfDays = dayPerMonth[month];




            // this leave a white space for days of pervious month.
            while (weekdays>0){
                htmlContent += "<td class='monthPre'></td>";

                // used in next loop.
                weekdays--;
            }

            // loop to build the calander body.
            while (counter <= numOfDays){

                // When to start new line.
                if (weekdays2 > 6){
                    weekdays2 = 0;
                    htmlContent += "</tr><tr>";
                }



                // if counter is current day.
                // highlight current day using the CSS defined in header.
                if (counter == day){
                    htmlContent +="<td class='dayNow'  onMouseOver='this.style.background=\"#FF0000\"; this.style.color=\"#FFFFFF\"' "+
                            "onMouseOut='this.style.background=\"#FFFFFF\"; this.style.color=\"#00FF00\"'>"+counter+"</td>";
                }else{
                    htmlContent +="<td class='monthNow' onMouseOver='this.style.background=\"#FF0000\"'"+
                            " onMouseOut='this.style.background=\"#FFFFFF\"'>"+counter+"</td>";

                }

                weekdays2++;
                counter++;
            }



            // building the calendar html body.
            var calendarBody = "<table class='calendar'> <tr class='monthNow'><th colspan='7'>"
                    +monthNames[month]+" "+ year +"</th></tr>";
            calendarBody +="<tr class='dayNames'>  <td>Sun</td>  <td>Mon</td> <td>Tues</td>"+
                    "<td>Wed</td> <td>Thurs</td> <td>Fri</td> <td>Sat</td> </tr>";
            calendarBody += "<tr>";
            calendarBody += htmlContent;
            calendarBody += "</tr></table>";
            // set the content of div .
            document.getElementById("calendar").innerHTML=calendarBody;

        }
    </script>
<body onload="displayCalendar()">
<div id="page-wrap">
    <header>
        <a href="index.php" title="Principala" id="logo">Test-Site</a>
        <span class="contact"><a href="about.php" title="Informatie">Despre noi
        </a></span> <input type="text" class="field" placeholder="Cauta"/>
        <span class="right"><span class="contact"><a href="reg.php" title="Inregistrare">Inregistrare
        </a></span> <span class="contact"><a href="auth.php" title="Logare">Logare</a></span></span>

    </header>
    <div class="clear"><br /></div>
    <center>
        <div id="menu">Categorii<hr /></div>
        <div id="menuHrefs">
             <a href="about.php">Despre noi</a>
                <a href="feedback.php">Contacte</a>
                <a href="auth.php">Logare</a>
                <a href="reg.php">Inregistrare</a>
                <a href="calendar.php">Calendar</a>
        </div>
    </center>
<div id="calendar"></div>


</div>
<footer>
    <span class="left"> Toate drepturile de autor sunt rezervate &copy; 2016</span>
    <span class="right">Facebook<img src="img/face.jpg" alt="Facebook" title="Facebook"/> </span>
</footer>

</body>



</head>
<style>
    .monthPre{
        color: gray;
        text-align: center;
    }
    .monthNow{
        color: blue;
        text-align: center;
    }
    .dayNow{
        border: 2px solid black;
        color: #FF0000;
        text-align: center;
    }
    .calendar td{
        htmlContent: 2px;
        width: 40px;

    }
    .monthNow th{
        background-color: #000000;
        color: #FFFFFF;
        text-align: center;
    }
    .dayNames{
        background: #0FF000;
        color: #FFFFFF;
        text-align: center;
    }

</style>
</html>