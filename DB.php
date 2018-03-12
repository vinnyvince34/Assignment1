$Name = htmlspecialchars($_POST['Name']);
$Email = htmlspecialchars($_POST['Email']);
$Phone = htmlspecialchars($_POST['Phone']);
$Date = htmlspecialchars($_POST['Date']);
$Days = htmlspecialchars($_POST['Days']);
$RoomType = htmlspecialchars($_POST['RoomType'])
$ChargeOne = htmlspecialchars($_POST['Misc']);
$ChargeTwo = htmlspecialchars($_POST['Misc']);
$ChargeThree = htmlspecialchars($_POST['Misc']);

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try()
{
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


    $sql = "INSERT INTO MyGuests (Name, Email, Phone number, Date, Days, Room Type, ChargeOne, ChargeTwo, ChargeThree) VALUES ($Name, $Email, $Phone, $Date, $Days, $RoomType, $ChargeOne, $ChargeTwo, $ChargeThree)";
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
