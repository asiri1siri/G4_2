<h1 align="center">Users View</h1>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<table class="table table-hover">
    <thead>
        <tr>
            <th>ENABLED</th>
            <th>ID</th>
            <th>Name</th>
            <th>USERNAME</th>
            <th>USERTYPE</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($records)) 
        {
            foreach ($records as $row) 
            {
                echo'<td>' . $row->ENABLED . '</td>' .
                    '<td>' . $row->ID . '</td>' .
                    '<td>' . $row->NAME .'</td>' .
                    '<td>' . $row->USERNAME . '</td>'.
                    '<td>' . $row->USERTYPE . '</td>'.
                    '<td>' . $row->EMAIL . '</td>' .
                    '</tr>';
            }
        }
        ?>
    </thead>
</table>