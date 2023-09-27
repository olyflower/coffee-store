<?php
require_once ACCOUNT_PARTS_DIR . '/header.php';
extract(formSessionData(SESSION_KEYS::UPDATE_USER));
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <main class="w-25 m-auto mt-5 pt-5">
                        <form action="/" method="POST">
                            <input type="hidden" name="type" value="update_user_info"/>
                            <h1 class="h3 mb-3 fw-normal">User profile</h1>
                            <div class="form-floating mt-2">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name.."
                                       value="<?= $fields['name'] ?? $user['name'] ?>"
                                       autofocus>
                                <label for="name">Name</label>
                            </div>
                            <?= formError($errors['name'] ?? null) ?>
                            <div class="form-floating mt-2">
                                <input type="text" class="form-control" id="surname" name="surname"
                                       value="<?= $fields['surname'] ?? $user['surname'] ?>"
                                       placeholder="Your surname..">
                                <label for="surname">Surname</label>
                            </div>
                            <?= formError($errors['surname'] ?? null) ?>
                            <div class="form-floating mt-2">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                       value="<?= $fields['email'] ?? $user['email'] ?>"
                                       placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <?= formError($errors['email'] ?? null) ?>
                            <div class="form-floating mt-2">
                                <input type="text" class="form-control" id="balance" name="balance"
                                       value="<?= $fields['balance'] ?? $user['balance'] ?>"
                                       placeholder="Your balance..">
                                <label for="balance">Your balance</label>
                            </div>
                            <?= formError($errors['balance'] ?? null) ?>
                            <button class="btn button-create w-50 mt-2 py-2" type="submit">Update info</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </section>
<?php
require_once ACCOUNT_PARTS_DIR . '/footer.php';
