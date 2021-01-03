function liveSearch(searchField)
			{
				if(searchField.value.length>0)
				{
					var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("suggestion").innerHTML =this.responseText;
						
						//document.write("yo");
				   }
				};
				xhttp.open("GET", "php_script_admin/doctorController.php?name="+searchField.value, true);
				xhttp.send(); 
				}
				else
				{
					document.getElementById("suggestion").innerHTML ="";
					//document.write("yo");
				}
				
				
				/* if(searchField.value.length==2)
				{
					document.getElementById("suggestion").innerHTML =null;
				} */
				//document.getElementById("suggestion").innerHTML ="yo";
			}