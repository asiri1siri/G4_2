<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>EMAIL</th>
    </tr>
<?php
if (isset($records)) 
{
    foreach ($records as $row) 
    {
        echo '<td>'. $row->ID. '</td>'.
             '<td>'. $row->NAME.'</td>'.
             '<td>'. $row->EMAIL. '</td>'.
             '</tr>';
    }
}
?>

</table>