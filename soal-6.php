<?php
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'tutorial'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT id, name 
        FROM product_categories';
        
       'SELECT name
        FROM product';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>product</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_assoc($query))
{
	echo '<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['name'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

?>