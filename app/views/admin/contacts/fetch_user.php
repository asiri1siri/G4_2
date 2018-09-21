<?php
if(isset($_POST["query"]))
{
 $connect = mysqli_connect('localhost', 'root', 'Blake200.', 'mini');
 $request = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM contacts 
  WHERE Name LIKE '%".$request."%' 
  OR USERNAME LIKE '%".$request."%' 
  OR EMAIL LIKE '%".$request."%'
 ";
 $result = mysqli_query($connect, $query);
 $data =array();
 $html = '';
 $html .= '
  <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>UserName</th>
    <th>Email</th>
    <th></th>
    <th></th>
   </tr>
  ';
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $data[] = $row["NAME"];
   $data[] = $row["USERNAME"];
   $data[] = $row["EMAIL"];
   $data[] = $row["ID"];
   $html .= '
   <tr>
    <td>'.$row["NAME"].'</td>
    <td>'.$row["USERNAME"].'</td>
    <td>'.$row["EMAIL"].'</td>
    <td><a href="edit.php?"id='.$row["ID"].'> Edit </a></td>
    <td><a href="records.php?"id='.$row["ID"].'> Delete </a></td>
   </tr>
   ';
  }
 }
 else
 {
  $data = 'No Data Found';
  $html .= '
   <tr>
    <td colspan="3">No Data Found</td>
   </tr>
   ';
 }
 $html .= '</table>';
 if(isset($_POST['typehead_search']))
 {
  echo $html;
 }
 else
 {
  $data = array_unique($data);
  echo json_encode($data);
 }
}

?>
