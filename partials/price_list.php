<tr>
    <td><?= $price['name'] ?></td>
    <td><?= formatPrice($price['price']) ?></td>
</tr>
<?php
if ( !empty($price["note"]) ) {
    ?>
    <tr>
        <td colspan="2" style="text-align: left">
            <small><?= $price["note"] ?></small>
        </td>
    </tr>
    <?php
}
?>