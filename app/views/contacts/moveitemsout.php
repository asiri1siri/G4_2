<!DOCTYPE html>
<html>
<head>
<title>Move Items</title>
</head>
<body>
    <h2>Move Items</h2>
    <form action='moveitemsout/execute' method='post'>
    Select Items To Move Out<br>
    <table border='1' cellpadding='2'>
        <tr><th>Select</th><th>ID</th><th>Name</th><th>Description</th></tr>
        <?php            
            foreach ($records as $row)
            {
                echo "<tr><td><input type='checkbox' name='check_list[]' value='$row->id' /></td>";
                echo "<td>" . $row->id . "</td>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->description . "</td>";
                echo "</tr>";
            }
        ?>
    </table><br>
    <button type='submit' name='submit'>Submit</button>
    </form>
</body>
</html>