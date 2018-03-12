<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pranama Hotel - Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Style.css" />
    <script src="Frontend.js"></script>
</head>
<body>
    <header>
        <img src="logo2.png">
    </header>
    <table align="center" class="nav">
        <tr>
            <th>
                <a href="Home.html">HOME</a>
            </th>
            <th>
                <a href="Facility.html">FACILITY</a>
            </th>
            <th>
                <a href="Booking.html">BOOKING ROOM</a>
            </th>
        </tr>
    </table>
    <hr>
    <form action="Confirm.html" method='post' name="BookForm" onsubmit="return FormCondition()">
        <table align="center" border="1" class="Form" cellpadding="10"> 
            <tr>
                <th colspan="2" align="center">BOOK ROOM</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="Name" value="">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="Email" value="">
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="tel" name="Phone" value="">
                </td>
            </tr>
            <tr>
                <td>Stay in date</td>
                <td>
                    <input type="date" name="Date" value="">
                </td>
            </tr>
            <tr>
                <td>Length of stay (days)</td>
                <td>
                    <input type="number" name="Days" value="">
                </td>
            </tr>
            <tr>
                <td>Room type</td>
                <td>
                        <select>
                            <option name="RoomType" value="Deluxe Room - $274">Deluxe Room - $274</option>
                            <option name="RoomType" value="Deluxe Pool Villa - $438">Deluxe Pool Villa - $438</option>
                            <option name="RoomType" value="1 Bedroom Pool Villa - $525">1 Bedroom Pool Villa - $525</option>
                            <option name="RoomType" value="2 Bedroom Pool Villa - $635">2 Bedroom Pool Villa - $635</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Additional charge</td>
                <td>
                        <input type="checkbox" name="Misc" value="Extra Bed - $80">Extra Bed - $80
                        <br>
                        <input type="checkbox" name="Misc" value="Airport Shuttle - $40">Airport Shuttle - $40
                        <br>
                        <input type="checkbox" name="Misc" value="Ubud Tour 1D - $100">Ubud Tour 1D - $100
                        <br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    $Name = htmlspecialchars($_POST['Name']);
    $Email = htmlspecialchars($_POST['Email']);
    $Phone = htmlspecialchars($_POST['Phone']);
    $Date = htmlspecialchars($_POST['Date']);
    $Days = htmlspecialchars($_POST['Days']);
    $RoomType = htmlspecialchars($_POST['RoomType']);
    $ChargeOne = htmlspecialchars($_POST['Misc']);
    $ChargeTwo = htmlspecialchars($_POST['Misc']);
    $ChargeThree = htmlspecialchars($_POST['Misc']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pranama_hotel";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO booking (`Name`, `Email`, `Phone Number`, `Date`, `Days`, `Room Type`, `ChargeOne`, `ChargeTwo`, `ChargeThree`)
        VALUES ($Name, $Email, $Phone, $Date, $Days, $RoomType, $ChargeOne, $ChargeTwo, $ChargeThree)";
        $conn.exec($sql);
        echo "New record created successfully";
        }
    catch(PDOException $e)
        {
        echo $sql + $e.getMessage();
        }
    $conn = null;
    ?>
    <footer>
        <h3>© 2017 Pramana Experience - All Rights Reserved.</h3>
    </footer>
</body>
</html>