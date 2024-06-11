<html>
    <head>
        <title>Choose Clg</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .container{
                padding:20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                animation: fadeIn 2s ease; /* Apply the animation to the table */
                }

            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            .container h1{
                color:#3498db;
            } 
            .btn{
                margin:20px;
            }
        </style>
    </head>
    <body>
        <?php
            include '../nav.php';
        ?>
        <div class="container">
            <center><h1>Choose Clg</h1></center>
            <form action="index1.php" method='POST'>
                <table>
                    <tr>
                        <th>College Name</th>
                        <th>Choose</th>
                    </tr>
                    <tr>
                        <td>Agra College:</td>
                        <td><input type="radio" name="file" value="agra" required></td>
                    </tr>
                    <tr>
                        <td>RBS College:</td>
                        <td><input type="radio" name="file" value="rbs" required></td>
                    </tr>
                </table>
                <center><input class='btn' type='submit' name='submit'></center>
            </form>
        </div>
    </body>
</html>
