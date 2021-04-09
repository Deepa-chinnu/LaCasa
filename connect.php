<?php$
$Username = filter_input(INPUT_POST, 'Username');
$ContactNumber = filter_input(INPUT_POST, 'ContactNumber');
$Address = filter_input(INPUT_POST, 'Address');
$EmailAddress = filter_input(INPUT_POST, 'EmailAddress');
$Password = filter_input(INPUT_POST,'Password');
$ConfirmPassword = filter_input(INPUT_POST,'ConfirmPassword');

if (!empty($Username))
{
	if(!empty($ContactNumber))
	{
		if(!empty($Address))
		{
            if(!empty($EmailAddress))
            {
            	if(!empty($Password))
            	{
            		if(!empty($ConfirmPassword))
            		{
            			$host = "localhost";
            			$dbusername = "root";
            			$dbpassword = " ";
            			$dbname = "christ";
            			$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            			if(mysqli_connect_error())
            			{
            				die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

            			}
            			else
            			{
            				$sql= "INSERT INTO registration(Username, ContactNumber, Address, EmailAddress, Password, ConfirmPassword) values ('$Username', '$ContactNumber', $'Address', '$EmailAddress', '$Password' , '$ConfirmPassword')";
            				if($conn->query($sql))
            				{
            					echo "Registration successfully...";

            				}
            				else{
            					echo "Error:" . $sql . "<br>". $conn->error;

            				}
            				$conn->close();
            			}
            		}

            		else
            		{
            			echo "Password should not be empty";
            			die();
            		}
            	}
            	else
            	{
            		echo"Password should not be empty";
            		die();
            	}
            }
            else
            {
            	echo"Email should not be empty";
            	die();
            }
		}
		else
		{
			echo"Address should not be empty";
			die();

		}
	}
	else
	{
		echo"Contact should not be empty";
		die();
	}

}
else
{
	echo"Username cannot be empty";
	die();
}
?>



