<!-- Assignment-11 – COSC 2328 – Professor McCurry -->
<!-- Implemented by - Fayzan Bhatti -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
<h1 style="text-align: center; color: green;"><u><strong>Food Truck Fanatic</strong></u></h1>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "cosc2328-McCurry";
$dbname = "foodtruck";


$conn = mysqli_connect($servername, $username, $password, $dbname);


/*   
CREATE TABLE customer (phone_number varchar(11), name varchar(25), address varchar(50), order_num varchar(5), PRIMARY KEY (phone_number) );
$sql = "CREATE TABLE customer (
phonenumber INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
address VARCHAR(50),
order_number INT(5)
)"; 
*/

$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$phonenumber = $_REQUEST['phonenumber'];

$sql = "CREATE TABLE customer (
    phonenumber INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(50),
    order_number INT(5)
    )";
    
$sql = "INSERT INTO customer VALUES ('$name', '$address','$phonenumber')";
?>


<span id="name">
Welcome <?php echo $_POST["name"]; 
?>!!!
<?php echo "<br>"; ?>
</span>

<span id="address">
Address: <?php echo $_POST["address"];
?>
<?php echo "<br>"; ?>
</span>

<span id="phonenumber">
Phone Number: <?php echo $_POST["phonenumber"];
?>
<?php echo "<br> <br>"; ?>
</span>


<style>
    html{
        text-align: center;
    }
    body {
        background-color: rgb(236, 204, 144);
        font-size: larger;
    }

    #name  {
        color: green;
        font-size:200%;
        text-align: center;
    }

    #address {
        color: green;
        font-size:200%;
        text-align: center;
    }

    #phonenumber {
        color: green;
        font-size:200%;
        text-align: center;
    }

    #button {
        font-size: 150%;
    }
</style>

<div id="button">
<input class="myRadio" style="color: rgb(236,204,144); font-size: large; background-color: green;" type="radio" name="menu" value="menu.php"> Select to go to the Menu<br><br>
<input onclick="viewStory()" style="color: rgb(236,204,144); font-size: large; background-color: green;" type="submit" name="submit" value="Menu">
</div>
    <script>
    function viewStory(){
        var radios = document.getElementsByClassName('myRadio');

        for (var i = 0; i < radios.length; i++){
            if (radios[i].checked){
                window.location.href = radios[i].value;
            }
        }
    }
    </script>








<!-- 
<?php 

$errors = [];
$data = [];

if (empty($_POST['name'])) { 
    $errors['name'] = 'Name is required';
}

if (empty($_POST['address'])) {
    $errors['address'] = 'address is required';
}

if (empty($_POST['phonenumber'])) {
    $errors['phonenumber'] = 'phone number is required';
}

if(!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);

?> 
-->