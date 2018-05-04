<html>
    <head>
        <title>Test Page</title>
    </head>
    <body>
    <?php
        // print_r($reviews);
        foreach( $reviews as $review ) {
            echo "Book:          " . $review['book']['title'] . "<br>\n";
            echo "Link:          " . $review['book']['link'] . "<br>\n";
            echo "Rating (avg):  " . $review['book']['average_rating'] . "<br>\n";
            echo "Rating (mine): " . $review['rating'] . "<br>\n";
            echo "<br>\n";
        }
    ?>
    </body>
</html>