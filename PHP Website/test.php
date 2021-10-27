<a href="query.php">Pick another query</a>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">



    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Country Name</th>
                    <th>Childhood Mortality</th>
                </tr>
            </thead>
            <tbody>
            <?php 
              $sql = "select name, mortalityunder5 from countrydata_final;";
       
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $mortalityunder5 = $row["mortalityunder5"];
               
            ?> 
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $mortalityunder5; ?></td>
            </tr>
            <?php   }  //End of while loop
                ?> 
            </tbody>
    </table>



    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );


    </script>


