<?php include("./shared/layout/head.sub.php") ?>
<?php include("./shared/layout/head.php") ?>
<section class="sec title">
    <h2>My Card</h2>
</section>
<form action="" method="POST" name="FrmMyCard" id="FrmMyCard">
    <section class="sec">
        <div class="mycard">
            <div class="mycard_front">
                <fieldset class="form_fieldset">
                    <legend class="form_legend">Links</legend>
                    <div class="form_wrap">
                        <label for="Instagram">Instagram</label>
                        <input type="url" name="Instagram" id="Instagram" value="" placeholder="Jot Down Please" class="form_control" />
                    </div>
                    <div class="form_wrap">
                        <label for="Twitter">Twitter</label>
                        <input type="url" name="Twitter" id="Twitter" value="" placeholder="Jot Down Please" class="form_control" />
                    </div>
                    <div class="form_wrap">
                        <label for="Facebook">Facebook</label>
                        <input type="url" name="Facebook" id="Facebook" value="" placeholder="Jot Down Please" class="form_control" />
                    </div>
                    <div class="form_wrap">
                        <label for="Blog">Blog</label>
                        <input type="url" name="Blog" id="Blog" value="" placeholder="Jot Down Please" class="form_control" />
                    </div>
                    <div class="form_wrap">
                        <label for="Website">Website</label>
                        <input type="url" name="Website" id="Website" value="" placeholder="Jot Down Please" class="form_control" />
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="action">
            <em class="screen_out">Action Area</em>
            <button type="button" onclick="fnBack();" class="button"><i class="ri-close-line"></i>cancel</button>
            <button type="submit" class="button"><i class="ri-save-line"></i>save</button>
        </div>
    </section>
</form>
<?php include("./shared/layout/tail.php") ?>
<?php include("./shared/layout/tail.sub.php") ?>