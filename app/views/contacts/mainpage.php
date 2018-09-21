<?php    
    use App\Helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<body>
    <h2>Users</h2>
    <?php
        echo "<table border='1' cellpadding='2'>";
        echo "<tr><th>ID</th><th>Name</th><th>Username</th><th>User Type</th><th>Email</th><th>Enabled</th><th>Commands</th></tr>";
            foreach ($recordsUsers as $row)
            {
                echo "<tr>";
                echo "<td>" . $row->id . "</td>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->username . "</td>";
                echo "<td>" . $row->usertype . "</td>";
                echo "<td>" . $row->email . "</td>";
                if ($row->enabled == 0)
                {
                    echo "<td>No</td>";
                    echo "<td><a href='/enable/index/". $row->id ."'>Enable</a></td>";
                }
                else
                {
                    echo "<td>Yes</td>";
                    echo "<td><a href='/disable/index/". $row->id ."'>Disable</a></td>";
                }
                echo "</tr>";
            }
        echo "</table><br>";
    ?>
    <h2>Items</h2>
    <?php
        echo "<table border='1' cellpadding='2'>";
        echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Parent Id</th><th>Removed</th><th>Commands</th></tr>";
            foreach ($recordsItems as $row)
            {
                echo "<tr>";
                echo "<td>" . $row->id . "</td>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->description . "</td>";
                if (is_null($row->parent_id))
                {
                    echo "<td>NULL</td>";
                }
                else
                {
                    echo "<td>" . $row->parent_id . "</td>";
                }
                if ($row->deleted == 0)
                {
                    echo "<td>No</td>";
                    echo "<td><a href='/hide'>Hide</a></td>";
                }
                else
                {
                    echo "<td>Yes</td>";
                    echo "<td><a href='/unhide'>Unhide</a></td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>