
<?php
echo $count;
header('location: index.php?request=getAllPatients&id=');
?>

<div class="alert alert-danger" role="alert">
Are you sure you want to permanently delete <a href="./index.php?request=deletePatient&id=[<?php echo $patient->id_pat; ?>]" class="alert-link">YES, DELETE IT</a>
</div>
