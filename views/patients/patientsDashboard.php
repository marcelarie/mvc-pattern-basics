<div id="patients-dashboard" class="patients-dashboard">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>City</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <form action="../../index.php" id="add-patient" method="POST">
            <tr>
                <td>
                    <input name="first_name" type="text" class="form-control" id="add-patient__name" form="add-patient" placeholder="" required>
                </td>
                <td>
                    <input name="last_name" type="text" class="form-control" id="add-patient__last-name" form="add-patient" placeholder="" required>
                </td>                                        
                <td>                                         
                    <input name="email" type="email" class="form-control"id="add-patient__email"  form="add-patient" placeholder="name@example.com" required>
                </td>                                        
                <td>                                         
                    <select name="gender" type="text" class="form-control" id="add-patient__gender" form="add-patient"  placeholder="" required>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </td>
                <td>
                    <input name="age" type="number" class="form-control" id="add-patient__age" form="add-patient"  placeholder="" required>
                </td>
                <td>
                    <input name="city" type="text" class="form-control" id="add-patient__city" form="add-patient"  placeholder="" required>
                </td>
                <td>
                  <input class="btn btn-success" form="add-patient" type="submit"></input>
                </td >
            </tr>
        </form>
<?php
foreach ($patients as $patient) {
    echo '<tr>';
    echo '<td>'.$patient->first_name.'</td>';
    echo '<td>'.$patient->last_name.'</td>';
    echo '<td>'.$patient->email.'</td>';
    echo '<td>'.$patient->gender.'</td>';
    echo '<td>'.$patient->age.'</td>';
    echo '<td>'.$patient->city.'</td>';
    echo '<td><a class="btn btn-primary" href="index.php?request=getPatient&id=['.$patient->id_pat.', 0]">FILE</a></td>';
    echo '</tr>';
}
?>
        </tbody>
    </table>
</div>
