<?php
    include 'time_elapsed.inc.php';
    $sql = "SELECT db_ID, db_title, db_category, db_date FROM Metadata ORDER BY db_date DESC LIMIT 4";

    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($query)) {
        
        $row_ID = $row['db_ID'];
        $row_Title = $row['db_title'];
        $row_Category = $row['db_category'];
        $row_Date = $row['db_date'];

        echo "
        <div class='column card is-two-fifths has-text-centered'>
           <div class='card-content'>

                <figure class='image is-1by1'>
                    <a href='includes/previewprocess.inc.php?id=$row_ID'><img src='https://via.placeholder.com/100x150.png'></a>
                </figure> <br>

                <a class='title is-6' href='includes/previewprocess.inc.php?id=$row_ID'>
                    $row_Title
                </a>
           </div>

           <footer class='card-footer'>
                <p class='card-footer-item'>
                    Category: <a href='#'>$row_Category</a>
                </p>
                <p class='card-footer-item'>"
                    
                   . time_elapsed_string($row_Date) .
                    
                "</p>
           </footer>
        </div>
        
        ";
        //echo $row_Title;
        //echo $row_Author;
        //echo $row_Category;
        //echo $row_Date;
    }
?>