<?php include("./shared/layout/head.sub.php") ?>
<?php include("./shared/layout/head.php") ?>
<section class="sec title">
    <h2>Edit Card</h2>
</section>
<form action="" method="POST" name="FrmMyCard" id="FrmMyCard">
    <section class="sec">
        <fieldset class="form_fieldset">
            <legend class="form_legend">Self Introduce</legend>
            <div class="form_wrap with_textarea">
                <label for="Introduce" class="screen_out">Introduce</label>
                <textarea name="Introduce" id="Introduce" cols="30" rows="10" class="form_control" required></textarea>
            </div>
        </fieldset>
        <fieldset class="form_fieldset">
            <legend class="form_legend">Links</legend>
            <div class="form_wrap">
                <label for="Instagram"><img src="/public/asset/images/sns/instagram_32.png" alt="" />Instagram</label>
                <input type="url" name="Instagram" id="Instagram" value="" placeholder="Jot Down Please" class="form_control" />
            </div>
            <div class="form_wrap">
                <label for="Twitter"><img src="/public/asset/images/sns/twitter_32.png" alt="" />Twitter</label>
                <input type="url" name="Twitter" id="Twitter" value="" placeholder="Jot Down Please" class="form_control" />
            </div>
            <div class="form_wrap">
                <label for="Facebook"><img src="/public/asset/images/sns/facebook_32.png" alt="" />Facebook</label>
                <input type="url" name="Facebook" id="Facebook" value="" placeholder="Jot Down Please" class="form_control" />
            </div>
            <div class="form_wrap">
                <label for="Youtube"><img src="/public/asset/images/sns/youtube_32.png" alt="" />Youtube</label>
                <input type="url" name="Youtube" id="Youtube" value="" placeholder="Jot Down Please" class="form_control" />
            </div>
            <div class="form_wrap">
                <label for="Twitch"><img src="/public/asset/images/sns/twitch_32.png" alt="" />Twitch</label>
                <input type="url" name="Twitch" id="Twitch" value="" placeholder="Jot Down Please" class="form_control" />
            </div>
            <div class="form_wrap">
                <label for="Blog"><img src="/public/asset/images/sns/blog_32.png" alt="" />Blog</label>
                <input type="url" name="Blog" id="Blog" value="" placeholder="Jot Down Please" class="form_control" />
            </div>
            <div class="form_wrap">
                <label for="Website"><img src="/public/asset/images/sns/website_32.png" alt="" />Website</label>
                <input type="url" name="Website" id="Website" value="" placeholder="Jot Down Please" class="form_control" />
            </div>
        </fieldset>
        <div class="action">
            <em class="screen_out">Action Area</em>
            <button type="button" onclick="fnBack();" class="button"><i class="ri-close-line"></i>cancel</button>
            <button type="submit" class="button"><i class="ri-save-line"></i>save</button>
        </div>
    </section>
</form>
<?php include("./shared/layout/tail.php") ?>
<?php include("./shared/layout/tail.sub.php") ?>