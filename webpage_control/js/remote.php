$(document).keydown(function(e){

    if (e.keyCode == 97)  
    	 button_direction('1');
    if (e.keyCode == 98) 
    	 button_direction('2');
    if (e.keyCode == 99) 
    	 button_direction('3');
    if (e.keyCode == 100)
    	 button_direction('4');
    if (e.keyCode == 101)
    	 button_direction('5');
    if (e.keyCode == 102)
      	 button_direction('6');

    if (e.keyCode == 37)  
    	 button_direction('l');
    if (e.keyCode == 38) 
        button_direction('f');
    if (e.keyCode == 39) 
    	  button_direction('r');
    if (e.keyCode == 40)
    	 button_direction('b');
    if (e.keyCode == 32)
    	 button_direction('s');
});

//function room_location(loc)
//{
//	$.post("ajax_direction.php",
//    {
 //     location: loc
//    }
//    );
//}

function button_direction(val)
{
	$.post("ajax_direction.php",
    {
      direction: val
    }
    );
}







