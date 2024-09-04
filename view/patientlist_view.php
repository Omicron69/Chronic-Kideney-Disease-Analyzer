<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style/table.css">
    <title>Patient List</title>
    </head>
    <body>
    <form method="post" action="../controller/patientList.php">
        Search by patientId:
        <input name="search"/>
        <input type="submit" value="Search"/>
    </form>
        <table>
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>first Name</th>
                    <th>last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
                    <tbody>
                        <?php foreach ($patients as $patient): ?>
                            <tr>
                                <td><?=$patient->patientId ?></td>
                                <td><?=$patient->firstName ?></td>
                                <td><?=$patient->lastName ?></td>
                                <td><?=$patient->email ?></td>
                            </tr>
                        <?php endforeach ?>
            </table>
    </body>
</html>