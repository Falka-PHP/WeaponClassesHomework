<?php
if (!isset($_POST['weaponSelector']) && !isset($_POST['multiplierSelector'])) {
    ?>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="weaponSelector">Select weapon</label>
            <select class="form-control" id="weaponSelector" name="weaponSelector">
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
    require_once('models\WoodenWeapon.php');
    require_once('models\StoneWeapon.php');
    require_once('models\IronWeapon.php');
    $wp = null;
    $weapon_name = htmlspecialchars($_POST['weaponSelector']);
    $mp = htmlspecialchars($_POST["multiplierSelector"]);
    if($weapon_name == "wood-wp"){
            $wp = new WoodenWeapon($mp);
    }else if($weapon_name == "st-wp"){
            $wp = new StoneWeapon($mp);
    }else{
            $wp = new IronWeapon($mp);
    }

    echo "<h3>You created a ".$wp->getWeaponType()."</h3><br>";
    $wp->shoot();
    ?>
        <br>
        <hr>
    <a href="index.php">Return</a>

    <?php
}
?>
