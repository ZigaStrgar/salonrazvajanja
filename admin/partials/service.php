<div data-id="<?= $service['id'] ?>" class="col-md-8 col-sm-12 mb15 del">
    <button onclick="remove(<?= $service['id'] ?>)" class="del__x">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="#428bca"
                  d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
    </button>
    <a href="editService.php?id=<?= $service['id'] ?>">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="#000000"
                  d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z"/>
        </svg>
    </a>
    <h3><?= $service['name'] ?></h3>
    <div class="line line__min bg--yellow mb10"></div>
    <p><?= $service['text'] ?></p>
</div>