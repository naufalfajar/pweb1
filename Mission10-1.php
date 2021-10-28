<!DOCTYPE html>
<html>
<head>
    <title>Resposive Table</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>

<table id="tabel-data">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Name</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $db_host = 'localhost'; // Nama Server
    $db_user = 'root'; // User Server
    $db_pass = ''; // Password Server
    $db_name = 'pweb1'; // Nama Database
    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }
    $sql = 'SELECT *
    FROM users';
    
    $query = mysqli_query($conn, $sql);

    if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
    }
        while($row = mysqli_fetch_array($query))
        {
            echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['username']."</td>
            <td>".$row['email']."</td>
            <td>".$row['password']."</td>
            <td>".$row['name']."</td>
            <td>".$row['photo']."</td>
        </tr>";
        }
    ?>
    </tbody>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

</table>
</body>
</html>