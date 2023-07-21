<div class="container">
    <? if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
    <? endif; ?>

    <? if (validation_list_errors()) : ?>
        <div class="alert alert-warning" role="alert">
            <?= validation_list_errors() ?>
        </div>
    <? endif; ?>

    <form action="/books/create" method="post">
        <?= csrf_field() ?>
        <label for="titleBook" class="form-label">Title</label>
        <input type="text" name="titleBook" id="titleBook" class="form-control" placeholder="Enter title..." value="<?= set_value('titleBook') ?>">

        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" id="price" class="form-control" placeholder="Enter price..." value="<?= set_value('price') ?>">

        <label for="authorId" class="form-label">Choose author</label>
        <select class="form-select" aria-label="Choose author" name="authorId">
            <option value="0" selected>Choose author</option>
            <? foreach ($authors as $author) : ?>
                <option value="<?= $author['id'] ?>"><?= $author['firstname'] . ' ' . $author['surname'] ?></option>
            <? endforeach; ?>
        </select>

        <label for="yearofpublish" class="form-label">Year of publish</label>
        <input type="number" name="yearOfPublish" id="yearofpublish" class="form-control" placeholder="Enter year of publish..." value="<?= set_value('yearOfPublish') ?>">

        <input type="submit" value="Create book" class="btn btn-success">
    </form>
</div>