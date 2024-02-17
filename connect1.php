

<?php



// Get form data
$username = $_POST['username'];

$faname = $_POST['faname'];
$maname = $_POST['maname'];


$birth = $_POST['birth'];
$gender = $_POST['gender'];
$permaddress = $_POST['permaddress'];
$preaddress = $_POST['preaddress'];
$phone = $_POST['phone'];


$email = $_POST['email'];


$dename = $_POST['dename'];
$Regno = $_POST['Regno'];
$batch = $_POST['batch'];


$Passyear = $_POST['Passyear'];

// Create connection
$conn = new mysqli('localhost','root','','test');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else{

// Prepare SQL statement to insert data into database

$stmt = $conn->prepare("INSERT INTO form(username,faname,maname,birth,gender, permaddress,premaddress,phone,email,dename,Regno,batch,Passyear ) VALUES (?, ?, ?,?,?,?,?,?,?,?,?,?,?)");

// Bind parameters to the statement
$stmt->bind_param("sssdsssissiii", $username,$faname,$maname,$birth,$gender, $permaddress,$premaddress,$phone,$email,$dename,$Regno,$batch,$Passyear);

// Execute the statement
$stmt  -> execute();
    echo "New record created successfully";

// Close statement and database connection
$stmt->close();
$conn->close();

}
?>