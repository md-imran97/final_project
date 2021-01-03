var numArr=[0,1,2,3,4,5,6,7,8,9];
			function getElement(id){
				return document.getElementById(id);
			}

			function validate(){
				//refresh();
				var allSet=true;
				var firstName = getElement("firstName");
				var lastName = getElement("lastName");
				var email = getElement("email");
				var phone = getElement("phone");
				var addressStreet=getElement("addressStreet");
				var addressCity=getElement("addressCity");
				var addressState=getElement("addressState");
				var addressZip=getElement("addressZip");
				var birthDate= getElement("birthDate");
				var birthMonth= getElement("birthMonth");
				var birthYear= getElement("birthYear");
				var gender=getElement("gender");
				var userType=getElement("userType");
				var password = getElement("password");
				var confirmPassword = getElement("confirmPassword");
				
				
				var err_firstName = getElement("err_firstName");
				var err_lastName = getElement("err_lastName");
				var err_email = getElement("err_email");
				var err_phone = getElement("err_phone");
				var err_address=getElement("err_address");
				var err_birthDay= getElement("err_birthDay");
				var err_gender=getElement("err_gender");
				var err_userType=getElement("err_userType");
				var err_password = getElement("err_password");
				var err_confirmPassword = getElement("err_confirmPassword");
				
				//firstName
				if(firstName.value == ""){
					allSet=false;
					err_firstName.innerHTML = "name Required";
					//e_name.focus();
					//return !hasErr;
				}
				
				else if(1)
				{
					for(var i=0;i<firstName.value.length;i++)
					{
						var count=0;
						for(var j=0;j<numArr.length;j++)
						{
							if(firstName.value[i]==numArr[j])
							{
								count++;
							}
						}
						
					}
					if(count>0)
					{
						allSet=false;
						err_firstName.innerHTML = "Numbers are not allowed";
					}
					else
					{
						//err_firstName.innerHTML = "";
						err_firstName.innerHTML = " ✓";
						err_firstName.style.color="green";
						err_firstName.style.fontWeight = "900";
					}
				}
				
				//lastName
				if(lastName.value == ""){
					allSet=false;
					err_lastName.innerHTML = "name Required";
					//e_name.focus();
					//return !hasErr;
				}
				
				else if(1)
				{
					for(var i=0;i<lastName.value.length;i++)
					{
						var count=0;
						for(var j=0;j<numArr.length;j++)
						{
							if(lastName.value[i]==numArr[j])
							{
								count++;
							}
						}
						
					}
					if(count>0)
					{
						allSet=false;
						err_lastName.innerHTML = "Numbers are not allowed";
					}
					else
					{
						//err_firstName.innerHTML = "";
						err_lastName.innerHTML = " ✓";
						err_lastName.style.color="green";
						err_lastName.style.fontWeight = "900";
					}
				}
				
				//email
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
						err_email.innerHTML = " ✓";
						err_email.style.color="green";
						err_email.style.fontWeight = "900";
					}
					else
					{
						allSet=false;
						//check=true;
						err_email.innerHTML = "Email formate not matched";
					}
				}
				
				
				//password
				if(password.value == "")
				{
					allSet=false;
					err_password.innerHTML = "password required";
				}
				else if(password.value.length <8 )
				{
					allSet=false;
					err_password.innerHTML = "password required atleast 8 character";
				}
				else
				{
					//err_password.innerHTML = "";
					err_password.innerHTML = " ✓";
					err_password.style.color="green";
					err_password.style.fontWeight = "900";
				}
				
				//phone
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
					else
					{
						//err_phone.innerHTML = "";
						err_phone.innerHTML = " ✓";
						err_phone.style.color="green";
						err_phone.style.fontWeight = "900";
					}
				}
				
				//address
				if(addressStreet.value=="")
				{
					allSet=false;
					err_address.innerHTML = "street, city, state and zip required";
				}
				else if(addressCity.value=="")
				{
					allSet=false;
					err_address.innerHTML = "street, city, state and zip required";
				}
				else if(addressState.value=="")
				{
					allSet=false;
					err_address.innerHTML = "street, city, state and zip required";
				}
				else if(addressZip.value=="")
				{
					allSet=false;
					err_address.innerHTML = "street, city, state and zip required";
				}
				else
				{
					err_address.innerHTML = " ✓";
					err_address.style.color="green";
					err_address.style.fontWeight = "900";
				}
				
				
				if(birthDate.value=="")
				{
					allSet=false;
					err_birthDay.innerHTML = "date, month and year required";
				}
				else if(birthMonth.value=="")
				{
					allSet=false;
					err_birthDay.innerHTML = "date, month and year required";
				}
				else if(birthYear.value=="")
				{
					allSet=false;
					err_birthDay.innerHTML = "date, month and year required";
				}
				else
				{
					err_birthDay.innerHTML = " ✓";
					err_birthDay.style.color="green";
					err_birthDay.style.fontWeight = "900";
				}
				
				if(userType.value=="")
				{
					allSet=false;
					err_userType.innerHTML = "userType required";
				}
				else
				{
					err_userType.innerHTML = " ✓";
					err_userType.style.color="green";
					err_userType.style.fontWeight = "900";
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
	
		