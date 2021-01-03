var numArr=[0,1,2,3,4,5,6,7,8,9];
function getElement(id){
	return document.getElementById(id);
}

function validate(){
	//refresh();
	var allSet=true;
	var name = getElement("name");
	var email = getElement("email");
	var phone = getElement("phone");
	var cabinNumber = getElement("cabinNumber");
	var cabinType = getElement("cabinType");
	var address = getElement("address");
	var bookingDate = getElement("bookingDate");
	var gender = Elderement("gender");
	var aboutDisease = getElement("aboutDisease");
	
	
	
	// name validation
	if(name.value == ""){
		allSet=false;
		err_name.innerHTML = " *name Required";
		err_name.style.color="blue";
		err_name.style.fontWeight = "850";
		//e_name.focus();
		//return !hasErr;
	}
	else if(1)
	{
		var count=0;
		for(var i=0;i<name.value.length;i++)
		{
			
			for(var j=0;j<numArr.length;j++)
			{
				debugger;
				if(name.value[i]==numArr[j])
				{
					if(j==0)
					{
						if(name.value[i]==" ")
							continue;
					}
					else{count++;}
				}
			}
			
		}
		if(count>0)
		{
			allSet=false;
			err_name.innerHTML = " *Numbers are not allowed";
			err_name.style.color="blue";
			err_name.style.fontWeight = "850";
		}
		else
		{
			err_name.innerHTML = " ✓";
			err_name.style.color="green";
			err_name.style.fontWeight = "850";
		}
	}
	
	//email validation
	
	if(email.value == ""){
		allSet=false;
		err_email.innerHTML = "Email Required";
		//e_email.focus();
		//return !hasErr;
	}
	else if(1)
	{
		/* var posAt = email.value.search("@");
		var check=false;
		
		if(posAt && posAt<email.value.length-1)
		{
			var posDot = email.value.indexOf(".",posAt+1);
			if(!posDot)
			{
				allSet=false;
				check=true;
				err_email.innerHTML = "Email formate not matched";
			}
				
		}
		else 
		{
			allSet=false;
			check=true;
			err_email.innerHTML = "Email formate not matched";
		}
		if(!check)
		{err_email.innerHTML = "";} */
	
		var posAt = -1;
		var posDot = -1;
		for(var i=0;i<email.value.length;i++)
		{
			if(email.value[i]=="@")
			{
				posAt = i;
			}
			if(email.value[i]==".")
			{
				posDot = i;
			}
		}
		if(posAt !=-1 && posDot>posAt)
		{
			err_email.innerHTML = "";
		}
		else
		{
			allSet=false;
			//check=true;
			err_email.innerHTML = "Email formate not matched";
		}
	}
	//phone validation
	
	if(phone.value=="")
	{
		allSet=false;
		err_phone.innerHTML = "phone number required";
	}
	else if(1)
	{
		var num=0;
		for(var i=0;i<phone.value.length;i++)
		{
			for(var j=0;j<numArr.length;j++)
			{
				if(phone.value[i]==numArr[j])
				{
					num++;
				}
			}
		}
		if(num != phone.value.length)
		{
			//document.write(num);
			//document.write(phone.value.length);
			allSet=false;
			err_phone.innerHTML = "phone number required only numeric length atleast 11";
		}
		else if(phone.value.length<11)
		{
			allSet=false;
			err_phone.innerHTML = "phone number required only numeric length atleast 11";
		}
		else{err_phone.innerHTML = "";}
	}
	
	if(cabin number.value=="")
	{
		allSet=false;
		err_cabin_number.innerHTML = "cabin number required";
	}
	else if(1)
	{
		var num=0;
		for(var i=0;i<cabin number.value.length;i++)
		{
			for(var j=0;j<numArr.length;j++)
			{
				if(cabin number.value[i]==numArr[j])
				{
					num++;
				}
			}
		}
		if(num != cabin number.value.length)
		{
			//document.write(num);
			//document.write(cabin number.value.length);
			allSet=false;
			err_cabin_number.innerHTML = "cabin number required only numeric length atleast 11";
		}
		else if(cabin number.value.length<11)
		{
			allSet=false;
			err_cabin_number.innerHTML = "cabin number required only numeric length atleast 11";
		}
		else{err_cabin_nimber.innerHTML = "";}
	}
	
	if(userName.value == ""){
		allSet=false;
		err_userName.innerHTML = "Username Required";
		//e_username.focus();
		//return !hasErr;
	}
	else if(1)
	{
		/* if(! userName.value.indexOf(" "))
		{
			if(userName.value.length <6)
			{
				allSet=false;
				err_userName.innerHTML = "length must be atleast 6";
			}
		}
		else
		{
			allSet=false;
			err_userName.innerHTML = "space are not allowed";
		} */
		
		var count=0;
		for(var i=0;i<userName.value.length;i++)
		{
			if(userName.value[i]==" ")
				count++;
		}
		if(userName.value.length >=6 && count ==0)
		{
			err_userName.innerHTML = "";
		}
		else
		{
			allSet=false;
			err_userName.innerHTML = "space are not allowed and length atleast 6";
		}
	}
	
	
	
	if(booking date.value=="")
	{
		allSet=false;
		err_booking_date.innerHTML = "booking date required";
	}
	else if(1)
	{
		var num=0;
		for(var i=0;i<boooking date.value.length;i++)
		{
			for(var j=0;j<numArr.length;j++)
			{
				if(phone.value[i]==numArr[j])
				{
					num++;
				}
			}
		}
		if(gender.value == ""){
		allSet=false;
		err_gender.innerHTML = "Gender Required";
		//e_gender.focus();
		//return !hasErr;
	}
	
	else if(1)
	{
		for(var i=0;i<gender.value.length;i++)
		{
			var count=0;
			for(var j=0;j<numArr.length;j++)
			{
				if(gender.value[i]==numArr[j])
				{
					count++;
				}
			}
			
		}
		if(count>0)
		{
			allSet=false;
			err_gender.innerHTML = "Numbers are not allowed";
		}
		else{err_gender.innerHTML = "";}
	}
}