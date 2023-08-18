
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Data</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media-queries.css">
</head>

<body class="container">
<div class="app-box">
    <div class="app-heading-box">
        <?php
        echo '<p class="p1">';
        echo "PEOPLE DATA";
        echo '</p>';
        ?>
        <?php
        echo '<button type="button" class="button">';
        echo "NEXT PERSON";
        echo '</button>';
        ?>
    </div>
    <div class="app-data-table">
        <table class="customers">
            <tr>
                <th rowspan="2" style="width:7%">
                    <?php
                    echo '1';
                    ?>
                </th>
                <td>
                    <?php
                    echo 'Name: John Smith';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo 'Location: New York, NY';
                    ?>
                </td>
            </tr>
        </table>
        <table class="customers">
            <tr>
                <th rowspan="2" style="width:7%">
                    <?php
                    echo '2';
                    ?>
                </th>
                <td>
                    <?php
                    echo 'Name: Jane Doe';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo 'Location: Los Angeles, CA';
                    ?>
                </td>
            </tr>
        </table>
        <table class="customers">
            <tr>
                <th rowspan="2" style="width:7%">
                    <?php
                    echo '3';
                    ?>
                </th>
                <td>
                    <?php
                    echo 'Name: Bob Johnson';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo 'Location: Chicago, IL';
                    ?>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>

</html>