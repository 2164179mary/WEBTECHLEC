<?php
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

//fetching data in mysql
$query = 'select username, fname, lname, typeAccount, status  from account join customer on username = customerID where status=\'pending\' union
          select username, fname, lname, typeAccount, status  from account inner join sp on username = spID where status=\'pending\'; ';
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

echo <<< _END
<!DOCTYPE html>
    <body>
        <table class = "tableUser">
            <tr>
                <th> Username </th>    
                <th> Name  </th>
                <th> Account</th>
            </tr>      
        </table>        
    </body>
            
</html>

_END;


for ($j = 0; $j < $rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_BOTH);

    echo <<<_END
    <!Doctype html>
        <body>
            <table class = "tableUser">
                <tr>
                    <td> $row[0]</td>
                    <td> $row[1] $row[2]</td>
                    <td> $row[3] </td>
                    <td>               
                           <form action = "deny.php" method="post">
                               <input type="hidden" name="deny" value="yes">
                               <input type="hidden" name = "username" value="$row[0]">
                               <input type="hidden" name = "account" value="$row[3]">
                               <input type="submit" name = "policy" value="Deny">
                            </form>
                    </td>
                    <td>
                        <form action = "accept.php" method="post">
                            <input type="hidden" name="accept" value="yes">
                            <input type="hidden" name = "username" value="$row[0]">
                            <input type="hidden" name = "account" value="$row[3]">
                            <input type="submit" name = "policy" value="Accept">
                        </form>
                    </td>
                </tr>
            </table>
            
        </body>
    </html>

_END;
}





$result->close();
$conn->close();

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
