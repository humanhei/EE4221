

<div style="text-align:center;"><H1>Mobile Phone DataTable</H1></div>
<a href="query.php" style="padding:15px;"><button type="button" class="btn btn-primary">Pick another query</button></a>
<hr>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<link rel="stylesheet" href="./css/styles.css">


<body style="padding:20px;">
    <table id="example" class="display" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>Country Name</th>
                    <th>Number of mobile phone providers</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "select name, mobilephones from countrydata_final;";
       
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $number = $row["mobilephones"];
            ?> 
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $number; ?></td>
            </tr>
            <?php   }  //End of while loop
                ?> 
            </tbody>
    </table>
</body>


    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );


    </script>


