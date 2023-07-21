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

  <form action="/authors/edit/<?= $author['id'] ?>" method="post">
    <?= csrf_field() ?>
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter firstname..." value="<?= $author['firstname'] ?>">

    <label for="surname" class="form-label">Surname</label>
    <input type="text" name="surname" id="surname" class="form-control" placeholder="Enter surname..." value="<?= $author['surname'] ?>">

    <label for="yearofbirth" class="form-label">Year of birth</label>
    <input type="number" name="yearOfBirth" id="yearofbirth" class="form-control" placeholder="Enter year of birth..." value="<?= $author['yearOfBirth'] ?>">

    <input type="submit" value="Update" class="btn btn-success">
  </form>
</div>