
<div class="col-md-4">
    <div class="card mb-4  shadow-sm">
        <img class="m-3" src="img/ico.png" alt="">
        <div class="card-body">
            <a href="view.php?id=<?= $product[0] ?>"><p class="card-text" > <?= $product[1] ?></p></a>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" onclick="location.href = '/edit.php?id=<?= $product[0] ?>'" class="btn btn-sm btn-outline-secondary" >Edit</button>
                    <button type="button" onclick="location.href = 'vendor/delete.php?id=<?= $product[0] ?>'" class="btn btn-sm btn-outline-secondary">Delete</button>
                </div>
                <small class="text-muted"><?= $product[2] ?> </small>
            </div>
        </div>
    </div>
</div>
