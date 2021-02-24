
<div class="btn-toolbar mb-1 justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
    <div class="d-grid gap-2 d-md-flex">
    <div class="input-group">
        <div class="input-group-text" id="btnGroupAddon">Filter by result</div>
    </div>
    <div class="btn-group me-2" role="group" aria-label="First group">
        <a href="index.php?request=getAllResult&id=[]" class="btn btn-outline-primary">All</a>
        <a href='index.php?request=getAllResult&id=["positive"]' class="btn btn-outline-danger">Positive</a>
        <a href='index.php?request=getAllResult&id=["negative"]' class="btn btn-outline-success">Negative</a>
    </div>
    <div class="input-group">
        <div class="input-group-text" id="btnGroupAddon">Filter by test type</div>
    </div>
    <div class="btn-group me-2" role="group" aria-label="Second group">
        <a href='index.php?request=getAllType&id=["PCR"]' class="btn btn-outline-primary">PCR</a>
        <a href='index.php?request=getAllType&id=["Test%20Antígeno"]' class="btn btn-outline-primary">Test Antígeno</a>
        <a href='index.php?request=getAllType&id=["Test%20Anticuerpo"]' class="btn btn-outline-primary">Test Anticuerpo</a>
    </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <div class="input-group">
            <div class="input-group-text" id="btnGroupAddon">Total</div>
        </div>
        <div class="btn-group me-2" role="group" aria-label="Third group"> 
            <a class="btn btn-outline-primary"><?php echo (count($tests)) ?></a>
        </div>
    </div>
</div>