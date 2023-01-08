<?php
if (!isset($_GET['shoot'])) {
    ?>
    <form action="index.php" method="get">
        <div class="form-group">
            <label for="weaponSelector">Select weapon</label>
            <select class="form-control">
                <option value="wood-wp">Wooden weapon</option>
                <option value="st-wp">Stone weapon</option>
                <option value="ir-wp">Iron weapon</option>
            </select>
        </div>

        <div class="form-group">
            <label for="multiplierSelector">Select multiplier</label>
            <input class="form-control" type="text" name="multiplierSelector" value="1.0" placeholder="1.0">
        </div>

        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-3">Create a weapon</button>
        </div>
    </form>
    <?php
} else {
    ?>


    <?php
}
?>
