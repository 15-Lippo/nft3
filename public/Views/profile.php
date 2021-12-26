<?php include 'components/box-message.php'; ?>

<div class="divisor"></div>

<section class="container-form h75vh items-flex align-center just-center">
    <div class="wrap w80">
        <form method="POST" action="/profile" enctype="multipart/form-data" class="form-profile items-flex flex-wrap just-space-between">
            <div class="w50">    
                <input type="text" name="name" value="<?= $params['user']['name'] ?>" class="w100 mr-bottom-small" placeholder="Name of your NFT" autocomplete="off" />
                <input type="text" name="email" value="<?= $params['user']['email'] ?>" class="w100 mr-bottom-small" placeholder="Description of your NFT" />
                <input type="file" name="image" value="<?= $params['user']['image'] ?>" class="w100 mr-bottom-small" />
            </div>
            <div class="w40">
                <label class="send-file mr-bottom-small">
                    <img src="<?= BASE_STORAGE_USERS . '/' . $params['user']['image'] ?>" />
                </label>
                <button type="submit" name="update-profile-client" class="w100">Update Profile <i class="ri-quill-pen-fill mr-left-small"></i></button>
            </div>
        </form>
        <form method="POST" action="/update-blockchain" class="form-blockchain form-profile mr-top-small">
            <p>Blockchain</p>
            <div class="items-flex align-center mr-top-small">
                <input type="password" name="blockchain-client" value="<?= $params['blockchain'] ?>" class="w80 mr-right-small" value="<?= $params['blockchain'] ?>" placeholder="Your blockchain" />
                <button type="submit" name="register-blockchain-client" class="w15 button-black">Update <i class="ri-quill-pen-fill mr-left-small"></i></button>
            </div>
        </form>
    </div>
</section>

