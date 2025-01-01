
<table>

    <thead>
 <style>


        table, th, td {
            border:.5px solid coral;
            color: black;

            margin-top: 50px;
margin-left: 520px;
        }
.h2{
margin-left: 600px;

}

    </style>

    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Location</th>
        <th>price</th>

    </tr>
    </thead>
    <tbody>
 <h2 class="h2">All Packages</h2>
    <?php

    $conn = mysqli_connect( "localhost","root","","travel");
    
    $query="SELECT * FROM pakages";
    $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['price']; ?></td>

        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
