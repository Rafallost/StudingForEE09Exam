    function czerwony() 
	{
		var wielkosc = document.getElementById('input').value;
		var style = document.getElementById('styl').value;
	
		if (style==="kursywa") 
		{
			document.getElementById('tekst').style = "color:red; font-size:"+wielkosc+"%; font-style: italic;" ;
		}
		else
		{
			document.getElementById('tekst').style = "color:red; font-size:"+wielkosc+"%" ;		
		}
		
	}

        
	function zielony() 
	{
		var wielkosc = document.getElementById('input').value;
		var style = document.getElementById('styl').value;
			
		if (style==="kursywa") 
		{
			document.getElementById('tekst').style = "color:green; font-size:"+wielkosc+"%; font-style: italic;" ;
		}
		else
		{
			document.getElementById('tekst').style = "color:green; font-size:"+wielkosc+"%" ;	
		}
	}

    
	function niebieski() 
	{
		var size = document.getElementById('input').value;
		var style = document.getElementById('styl').value;
			
		if (style==="kursywa") 
		{
			document.getElementById('tekst').style = "color:blue; font-size:"+size+"%; font-style: italic;" ;
		}
		else
		{
			document.getElementById('tekst').style = "color:blue; font-size:"+size+"%" ;	
		}
	}