<?php 
$c = $_GET["CountryName"];
function connect($countryName){
  $servername = "localhost";
  $username = "developer";
  $password = "wLnyQlmaxD0Q8JVN";
  $dbname = "timezonedb";  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully.";
    $country_code = null;
    $sql = "SELECT country.country_code,country.country_name,zone.zone_name from country INNER JOIN zone ON country.country_code = zone.country_code WHERE country_name = '".($countryName)."';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $country_code = ($row["country_code"].", ".$row["country_name"].", ".$row["zone_name"]);
        echo "<p id='getField' class='alert alert-success'>".$country_code."</p>";
        }
        }
        else {
        echo "<p id='getField' class='alert alert-success'>0 results.</p>";
        }
    $conn->close();
    }
    connect($c);
?>
