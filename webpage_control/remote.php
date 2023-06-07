<html>
<head>        
    <title>EMAT Remote Control</title>
    <!-- <link href="remote.css" rel="stylesheet" type="text/css">   -->
    <script src="js/jquery.min.js"></script>  
    <script src="js/remote.js"></script>
    <style>
        .location{
            display                 : grid;
            padding                 : 2% 2% 2% 2%;
            grid-template-columns   : 1fr 1fr 1fr;
            column-gap              : 10px;
            row-gap                 : 10px;   
        }
        
        .button{
            margin-top          : 20px;
            border-width        : 2px; 
            border-radius       : 10px;
            width               : 120px;
            height              : 50px;
            background-color    : #93fbff;
            font-size           : 20px;
        }

        .button:hover{
            background-color: #014dff;
        }

        .stop_button{
            margin-top          : 25px;
            margin-left         : 25px;
            margin-right        : 25px;
            border-width        : 2px; 
            border-radius       : 10px;
            width               : 120px;
            height              : 50px;
            background-color    : #93fbff;
            font-size           : 20px;
        }

        .stop_button:hover{
            background-color: #014dff;
        }

        .location_G_button{
            margin-top          : 5px;
            border-width        : 2px; 
            border-radius       : 10px;
            background-color    : #9cfeaa;
            font-size           : 20px;
        }

        .location_G_button:hover{
            background-color: #014dff;
        }

        .location_R_button{
            margin-top          : 5px;
            border-width        :2px; 
            border-radius       :10px;
            background-color    : #ff2c2c;
            font-size           : 20px;
        }

        .location_R_button:hover{
            background-color: #014dff;
        }
        /* .camera_button{
            margin-top: 25px;
            border-width:2px; 
            border-radius:8px;
            width:200px;
            height:40px;
            background-color:#ff3636;
            font-size: 20px;
        }  */

        .head{
            display              : flex;
            flex-direction       : row;
            justify-content      : center;
            justify-content      : space-between;
            align-items          : center;
            border-style         : solid;
        }

        .Dr_Lokman, .Gan{
            height  : 150px;
            width   : 150px; 
        }

        .title{
            font-weight : bolder;
            font-size   : 30px;
        }

        .Dname, .Gname{
            margin      : 15px;
            font-weight : bold;
            font-size   : 20px;
        }

        .Location_control, .Remote_control, .Camera_control{
            margin-top          : 15px;
            padding             : 5px 5px;
            border-style        : solid;
            font-weight         : bold;
            background-color    : bisque;
        }
    </style>
</head>     

<body>
<?php
include_once 'vars.php';

gpio_initialise(); // initialising the GPIO pins

?>
<div class="head">
        <img class="Dr_Lokman" src="Dr.lokman.jpg">
        <div class="title-word">
            <div class="title" align="center" >Performance Analysis of Enhanced Mobile Automated Transporter</div>
            <div class="Dname" align="center" >SV: Assiociate Professor Dr. Lokaman bin Abdullah</div>
            <div class="Gname" align="center" >Student: Gan Guan Fu</div>
        </div>
        <img class="Gan" src="Gan.jpg">
    </div>

    <div class="Location_control">Location Control</div>
    <div class="location">
        <input class="location_G_button" type="submit" onclick="button_direction('1')" value="Room 1G" id="R1"/>
        <input class="location_G_button" type="submit" onclick="button_direction('2')" value="Room 2G" />
        <input class="location_G_button" type="submit" onclick="button_direction('3')" value="Room 3G" />
        <input class="location_R_button" type="submit" onclick="button_direction('4')" value="Room 1R" />
        <input class="location_R_button" type="submit" onclick="button_direction('5')" value="Room 2R" />
        <input class="location_R_button" type="submit" onclick="button_direction('6')" value="Room 3R" />
    </div>

    <div class="Remote_control">Remote Control</div>
    <div class="foward-direction" align="center">
        <input class="button" type="submit" onclick="button_direction('f')" value="Foward"/>
    </div>

    <div class="LSR-direction" align="center">
        <input class="button" type="submit" onclick="button_direction('l')" value="Left"/>
        <input class="stop_button" type="submit" onclick="button_direction('s')" value="Stop"/>
        <input class="button" type="submit" onclick="button_direction('r')" value="Right"/>
    </div>

    <div class="backward-direction" align="center">
        <input class="button" type="submit" onclick="button_direction('b')" value="Backward"/>
    </div>

</body>
</html>
