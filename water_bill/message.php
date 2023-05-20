<?php if(isset($_SESSION['fail'])): ?>
    <div class="alert alert-danger" style="background-color: white; color: red;">
        <h3 style="color: red;" hidden><strong>Wrong: </strong><?php echo htmlentities($_SESSION['fail']) ?></h3>
    </div>
<?php endif; unset($_SESSION);?>

<?php if(isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
        <h3 hidden><strong>Success: </strong><?php echo htmlentities($_SESSION['success']) ?></h3>
    </div>
<?php endif; unset($_SESSION);?>
