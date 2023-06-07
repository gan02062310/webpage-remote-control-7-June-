<?php

global $m1S,$m2S,$m3S,$m4S,$m1,$m2,$m3,$m4;

 $m1 = 8; //motor 1 Dir
 $m1S = 11; //motor 1 PWM
 $m2 = 14; //motor 2 Dir
 $m2S = 15; //motor 2 PWM  
 $m3 = 23; //motor 3 Dir
 $m3S = 24; //motor 3 PWM
 $m4 = 5; //motor 4 Dir
 $m4S = 6; //motor 4 PWM 



function gpio_initialise(){
	global $m1S,$m2S,$m3S,$m4S,$m1,$m2,$m3,$m4;

    	set_gpio($m1,'output');
	set_gpio($m2,'output');
	set_gpio($m3,'output');
	set_gpio($m4,'output');
	set_gpio($m1S,'output');
	set_gpio($m2S,'output');
	set_gpio($m3S,'output');
	set_gpio($m4S,'output');
	
	set_gpio($m1S,'0');
	set_gpio($m2S,'0');
    	set_gpio($m3S,'0');
	set_gpio($m4S,'0');

    
}

//function go($loc){
//	switch ($loc){
//		case '1': room1G();	break;
//		case '2': room1R();	break;
//		case '3': room2G();	break;
//		case '4': room2R();	break;
//		case '5': room3G();	break;
//		case '6': room3R();	break;
//	}
//}

function move($dir){
	switch ($dir) {	
		case 'f': forward();	break;
		case 'b': back();	break;
		case 'r': right();	break;
		case 'l': left();	break;
		case 's': stop();	break;	

		case '1': room1G();	break;
		case '2': room1R();	break;
		case '3': room2G();	break;
		case '4': room2R();	break;
		case '5': room3G();	break;
		case '6': room3R();	break;
	}
}

function room1G(){
	forward();
	sleep(5);
	right();
	sleep(5);
	stop();
	sleep(5);	
	right();
	sleep(5);
	forward();
	sleep(1);
	stop();
}

function room1R(){
	back();
	left();
	back();
	right();
	back();

}

function room2G(){
	back();
	left();
	forward();
	left();
	forward();
}

function room2R(){
	back();
	right();
	back();
	right();
	forward();
}

function room3G(){
	forward();
	right();
	forward();
	left();
	forward();
}

function room3R(){
	back();
	right();
	back();
	left();
	back();
}

function right(){
	global $m1S,$m2S,$m3S,$m4S,$m1,$m2,$m3,$m4;
	set_gpio($m1,'1');
	set_gpio($m2,'0');
	set_gpio($m3,'1');
	set_gpio($m4,'0');
	set_gpio($m1S,'1');
	set_gpio($m2S,'1');
   	set_gpio($m3S,'1');
	set_gpio($m4S,'1');

}

function left(){
	global $m1S,$m2S,$m3S,$m4S,$m1,$m2,$m3,$m4;
	set_gpio($m1,'0');
	set_gpio($m2,'1');
	set_gpio($m3,'0');
	set_gpio($m4,'1');
	set_gpio($m1S,'1');
	set_gpio($m2S,'1');
    	set_gpio($m3S,'1');
	set_gpio($m4S,'1');

}

function forward(){
	global $m1S,$m2S,$m3S,$m4S,$m1,$m2,$m3,$m4;
	set_gpio($m1,'0');
	set_gpio($m2,'0');
	set_gpio($m3,'0');
	set_gpio($m4,'0');
	set_gpio($m1S,'1');
	set_gpio($m2S,'1');
    	set_gpio($m3S,'1');
	set_gpio($m4S,'1');

}

function back(){
	global $m1S,$m2S,$m3S,$m4S,$m1,$m2,$m3,$m4;
	set_gpio($m1,'1');
	set_gpio($m2,'1');
	set_gpio($m3,'1');
	set_gpio($m4,'1');
	set_gpio($m1S,'1');
	set_gpio($m2S,'1');
    	set_gpio($m3S,'1');
	set_gpio($m4S,'1');

}

function stop(){
	global $m1S,$m2S,$m3S,$m4S,$m1,$m2,$m3,$m4;
	set_gpio($m1S,'0');
	set_gpio($m2S,'0');
    	set_gpio($m3S,'0');
	set_gpio($m4S,'0');

}

function set_gpio($pin,$x){
	switch($x){
		case '1': $z='dh';break;
		case '0': $z='dl';break;
		case 'output': $z='op';break;
	}
	$cmd="sudo raspi-gpio set $pin $z";
	system($cmd);
}

?>