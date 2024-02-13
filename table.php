<?php $d = date("D"); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="C:\Users\ivane\Desktop\appwill\home.css">
    <meta charset="UTF-8">
    <title>table</title>

    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        #color {
            background-color: antiquewhite;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th colspan="3"> График работы докторов, каб. 333 </th>
        </tr>
        <tr>
            <td id="color">П.н.</td>
            <td id="color">Фамилия, имя</td>
            <td id="color">График</td>
        </tr>
        <tr>
            <td>1.</td>
            <td>Аксенти Елена</td>
            <td><?php echo $d == "Mon" || $d == "Wed" || $d == "Fri" ? "8:00 - 12:00" : "Нерабочий день"; ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Петрова Мария</td>
            <td><?php
                if ($d == "Tue" || $d == "Thu" || $d == "Sat") {
                    echo "12:00-16:00";
                } else {
                    echo "Нерабочий день";
                }
                ?>

            </td>
        </tr>

    </table>



</body>

</html>