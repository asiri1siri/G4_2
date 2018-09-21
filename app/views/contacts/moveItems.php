<!DOCTYPE html>
<html>
<head>
<title>Move Items</title>
</head>
<body>
    <h2>Move Items</h2>
    <form action='/moveItems/execute' method='post'>
    Select Items To Move<br>
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
    Select Where to Store Items<br>
    <table border='1' cellpadding='2'>
        <?php
        foreach ($records as $row)
        {
            echo "<tr><td><input type='radio' name='select' value='$row->id' /></td>";
            echo "<td>" . $row->id . "</td>";
            echo "<td>" . $row->name . "</td>";
            echo "<td>" . $row->description . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <button type='submit' name='submit'>Submit</button>
    </form>
</body>
</html>