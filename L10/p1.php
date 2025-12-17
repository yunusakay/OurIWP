<?php
include 'connect.php'; 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
echo "<table>";
        if (mysqli_num_rows($result)>0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["userID"] . "</td>";
                echo "<td>" . $row["userFullname"] . "</td>";
                echo "<td>" . $row["userPassword"] . "</td>";
                echo "<td>";    
                echo "<td>" . $row["comment"] . "</td>";
                echo "<td>";     
               "<td>" . $row["toWho"] . "</td>";
                echo "<td>";  
                echo "<a href='update.php?u_id=" . $row["userID"] . "' class='btn btn-upd'>Update</a> ";
                echo "<a href='delete.php?u_id=" . $row["userID"] . "' class='btn btn-del'>Delete</a>";
                
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "Users not found.";
        }
echo "</table>"
        ?>