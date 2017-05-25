<div class="container">
  <h1>Welcome to the Dashboard!</h1>
<?php
    echo "Username: ";
    echo $user->username."<br>";
    echo "Name: ";
    echo $user->first_name." "; 
    echo $user->last_name."<br>";
    echo "Address: ";
    echo $user->address."<br>";
    echo "Birthday: ";
    echo $user->birthday."<br><br>";
	
	if($query = $this->db->query("SELECT * FROM active_logins;")){
		while($row = $query->fetch_assoc()){
			echo $row['user_id']."<br>";
		}
	}	
	
	
  ?>
</div>
