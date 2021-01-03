function validateform(){  
  var mname=document.frmmedicine.medicinename.value;  
  var mcost=document.frmmedicine.medicinecost.value;
  var quantity=document.frmmedicine.quantity.value;
  var Id=document.frmmedicine.Id.value;
  var status=false;  
    
  if(mname.length<1){  
  document.getElementById("medicinename").innerHTML= "* Please enter Medicine name";
  status=false;  
  }else{  
  document.getElementById("medicinename").innerHTML=`✓`;  
  status=true;  
  }

  if(mcost.length<1)
    {
        document.getElementById("medicinecost").innerHTML= "* Please enter Medicine cost(Numeric value only)";
        status=false;
    }
    
    else{  
    document.getElementById("medicinecost").innerHTML=`✓`; 
    status=true;  
    }
	 if(Id.length<1)
    {
        document.getElementById("Id").innerHTML= "* Please enter Id(Numeric value only)";
        status=false;
    }
    
    else{  
    document.getElementById("Id").innerHTML=`✓`; 
    status=true;  
    }
  if(quantity.length<1){  
    document.getElementById("quantity").innerHTML= "* Please enter quantity(Numeric value only)";
    status=false;  
    }else{  
    document.getElementById("quantity").innerHTML=`✓`;  
    status=true;  
    }  
  return status;  
  }  