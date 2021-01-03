<html>
    <head></head>
    <body>
        <div>
            <h1>Admitted Patient CRUD</h1>
            <form action="" method="post">
			<form class="" action="">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit">Search</button>
  </form>
                
                <table>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" value="<?php //echo $name; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Email :</td>
                        <td><input type="text" name="email" value="<?php //echo $email; ?>"></td>
                    </tr>
                    <tr>
                        <td>Phone :</td>
                        <td><input type="text" name="phone" value="<?php //echo $phone; ?>"></td>
                    </tr>
                    
					<tr>
						<td>Booking Date:</td>
						<td>
							<select name="day" >
								<?php
									
									for ($i = 0; $i < 32; $i++) {
										if($i == 0)
										{

											echo "<option value='' disabled selected>Day</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							</select>
							<select name="month" >
								<?php
									$months = array("Month","jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
									for ($i = 0; $i < 13; $i++) {
										if($i == 0)
										{

											echo "<option value='$months[$i]' disabled selected>$months[$i]</option>";
										}
										else
										{
											echo "<option value='$months[$i]'>$months[$i]</option>";
										}
									}
								?>						
							</select>
							<select name="year" >
								<?php
									
									for ($i = 1900; $i < 2050; $i++) {
										if($i == 1900)
										{

											echo "<option value='$i' disabled selected>Year</option>";
										}
										else
										{
											echo "<option value='$i'>$i</option>";
										}
									}
								?>						
							
						</td>
					</tr>
                    <tr>
                        <td>Gender :</td>
                        <td>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                        </td>
                    </tr>
					 <tr>
                        <td>Cabin Number :</td>
                        <td><input type="text" name="Cabin Number" value="<?php //echo $phone; ?>"></td>
                    </tr>
                    
					    
              <tr>
						<td align=>Booking Type:</td>
						<td>
							<input type="radio" name="booking type" value="Male"> Room
							<input type="radio" name="booking type" value="Female"> Cabin   
						</td>
					</tr>
                        <td>Password :</td>
                        <td><input type="password" name="password" value="<?php //echo $password; ?>"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password :</td>
                        <td><input type="password" name="confirmPassword" value="<?php //echo $confirmPassword; ?>"></td>
                    </tr>
					 <tr>
                        <td>ID :</td>
						</tr>
                    <tr>
                        <td></td>
                        <td><br><input type="submit" name="register" value="Register"></td>
						<td><br><input type="submit" name="update" value="Update"></td>
						<td><br><input type="submit" name="delate" value="Delate"></td>
                        
                    </tr>
					<tr>
					<td><br><input type="submit" name="logout" value="Logout"></td>
					</tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>