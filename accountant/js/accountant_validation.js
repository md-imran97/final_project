var numArr=[0,1,2,3,4,5,6,7,8,9];
function getElement(id){
	return document.getElementById(id);
}
function validate()
{
	var allSet=true;
	var firstName=getElement("firstName");
	var lastName=getElement("lastName");
	var email=getElement("email");
	var phone=getElement("phone");
	var street=getElement("street");
	var city=getElement("city");
	var state=getElement("state");
	var postal=getElement("postal");
	var bDate=getElement("bDate");
	var bMonth=getElement("bMonth");
	var bYear=getElement("bYear");
	var gender=getElement("gender");
	var userType=getElement("userType");
	
	var err_firstName=getElement("err_firstName");
	var err_lastName=getElement("err_lastName");
	var err_email=getElement("err_email");
	var err_phone=getElement("err_phone");
	var err_street=getElement("err_street");
	var err_city=getElement("err_city");
	var err_state=getElement("err_state");
	var err_postal=getElement("err_postal");
	var err_dob=getElement("err_dob");
	var err_gender=getElement("err_gender");
	var err_userType=getElement("err_userType");
	

	//firstname valdiation
	if(firstName.value == ""){
		allSet=false;
		err_firstName.innerHTML = " *name Required";
		err_firstName.style.color="red";
		err_firstName.style.fontWeight = "900";
	}
	else if(1)
	{
		var count=0;
		for(var i=0;i<firstName.value.length;i++)
		{
			
			for(var j=0;j<numArr.length;j++)
			{
				debugger;
				if(firstName.value[i]==numArr[j])
				{
					if(j==0)
					{
						if(firstName.value[i]==" ")
							continue;
					}
					else{count++;}
				}
			}
			
		}
		if(count>0)
		{
			allSet=false;
			err_firstName.innerHTML = " *Numbers are not allowed";
			err_firstName.style.color="red";
			err_firstName.style.fontWeight = "900";
		}
		else
		{
			err_firstName.innerHTML = " ✓";
			err_firstName.style.color="green";
			err_firstName.style.fontWeight = "900";
		}
	}
	//lastName validation
	if(lastName.value == ""){
		allSet=false;
		err_lastName.innerHTML = " *name Required";
		err_lastName.style.color="red";
		err_lastName.style.fontWeight = "900";
	}
	else if(1)
	{
		var count=0;
		for(var i=0;i<lastName.value.length;i++)
		{
			
			for(var j=0;j<numArr.length;j++)
			{
				debugger;
				if(lastName.value[i]==numArr[j])
				{
					if(j==0)
					{
						if(lastName.value[i]==" ")
							continue;
					}
					else{count++;}
				}
			}
			
		}
		if(count>0)
		{
			allSet=false;
			err_lastName.innerHTML = " *Numbers are not allowed";
			err_lastName.style.color="red";
			err_lastName.style.fontWeight = "900";
		}
		else
		{
			err_lastName.innerHTML = " ✓";
			err_lastName.style.color="green";
			err_lastName.style.fontWeight = "900";
		}
	}
	//email validation
	if(email.value !="0")
	{
		err_email.innerHTML = " ✓";
		err_email.style.color="green";
		err_email.style.fontWeight = "900";
	}
	else
	{
		err_email.innerHTML = " * email required";
		err_email.style.color="red";
		err_email.style.fontWeight = "900";
		allSet=false;
	}
	//phone validation
	var cr=parseInt(phone.value);
	if(cr<0){cr=cr*(-1);}
	if(Number.isInteger(cr))
	{
		err_phone.innerHTML = " ✓";
		phone.value=cr;
		err_phone.style.color="green";
		err_phone.style.fontWeight = "900";
	}
	else
	{
		err_phone.innerHTML = " *please enter a valid phone number!";
		err_phone.style.color="red";
		err_phone.style.fontWeight = "900";
		allSet=false;
	}
	//street validation	
	if(street.value !="0")
	{
		err_street.innerHTML = " ✓";
		err_street.style.color="green";
		err_street.style.fontWeight = "900";
	}
	else
	{
		err_street.innerHTML = " * street required";
		err_street.style.color="red";
		err_street.style.fontWeight = "900";
		allSet=false;
	}
	//city validation
	if(city.value !="0")
	{
		err_city.innerHTML = " ✓";
		err_city.style.color="green";
		err_city.style.fontWeight = "900";
	}
	else
	{
		err_city.innerHTML = " * city required";
		err_city.style.color="red";
		err_city.style.fontWeight = "900";
		allSet=false;
	}
	//state validation
	if(state.value !="0")
	{
		err_state.innerHTML = " ✓";
		err_state.style.color="green";
		err_state.style.fontWeight = "900";
	}
	else
	{
		err_state.innerHTML = " * state required";
		err_state.style.color="red";
		err_state.style.fontWeight = "900";
		allSet=false;
	}
	//postal validation
	var pst=parseInt(postal.value);
	if(pst<0){pst=pst*(-1);}
	if(Number.isInteger(pst))
	{
		err_postal.innerHTML = " ✓";
		postal.value=pst;
		err_postal.style.color="green";
		err_postal.style.fontWeight = "900";
	}
	else
	{
		err_postal.innerHTML = " *please enter a valid postal code!";
		err_postal.style.color="red";
		err_postal.style.fontWeight = "900";
		allSet=false;
	}
	//date of birth validation
	if(bMonth.value !="0")
	{
		if(bDate.value !="0")
		{
			if(bYear.value !="0")
			{
				err_dob.innerHTML = " ✓";
				err_dob.style.color="green";
				err_dob.style.fontWeight = "900";
			}
			else
			{
				err_dob.innerHTML = " *Date, month, year required";
				err_dob.style.color="red";
				err_dob.style.fontWeight = "900";
				allSet=false;
			}
		}
		else
		{
			err_dob.innerHTML = " *Date, month, year required";
			err_dob.style.color="red";
			err_dob.style.fontWeight = "900";
			allSet=false;
		}
	}
	else
	{
		err_dob.innerHTML = " *Date, month, year required";
		err_dob.style.color="red";
		err_dob.style.fontWeight = "900";
		allSet=false;
	}
	//gender validation
	if(gender.value !="0")
	{
		err_gender.innerHTML =" ✓";
		err_gender.style.color="green";
		err_gender.style.fontWeight="900";
	}
	else{
		err_gender.innerHTML =" gender required";
		err_gender.style.color="red";
		err_gender.style.fontWeight="900";
	}
	//userType validation
		if(userType.value !="0")
	{
		err_userType.innerHTML =" ✓";
		err_userType.style.color="green";
		err_userType.style.fontWeight="900";
	}
	else{
		err_userType.innerHTML =" user type required";
		err_userType.style.color="red";
		err_userType.style.fontWeight="900";
	}
	if(allSet)
	{
		return true;
	}
	else
	{
		return false;
	}


}