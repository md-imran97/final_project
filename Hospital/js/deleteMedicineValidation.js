function validateform(){  
  var mname=document.frmmedicine.medicinename.value;  
  var mcost=document.frmmedicine.medicinecost.value;  
  var description=document.frmmedicine.description.value;
  var quantity=document.frmmedicine.quantity.value;
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

  if(description.length<1){  
    document.getElementById("description").innerHTML= "* Please enter description";
    status=false;  
    }else{  
    document.getElementById("description").innerHTML=`✓`;  
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