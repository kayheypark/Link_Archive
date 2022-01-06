<?php include("../shared/layout/head.sub.php") ?>
<?php include("../shared/layout/head.php") ?>
<section class="sec title">
    <h2>Sign Up</h2>
</section>
<section class="sec">

    <form action="/Api/login.php" method="POST" name="" id="" >
        <fieldset class="form_fieldset">
            <legend class="form_legend">Sign up and make your own card.</legend>
            <div class="form_wrap">
                <label for="MemberID">Id</label>
                <input type="text" name="MemberID" id="MemberID" value="" placeholder="Your ID" class="form_control" required />
            </div>
            <div class="form_wrap">
                <label for="MemberPassword">Password</label>
                <input type="text" name="MemberPassword" id="MemberPassword" value="" placeholder="Your Password" class="form_control" required />
            </div>
            <div class="form_wrap">
                <label for="MemberPassword">Confirm Password</label>
                <input type="text" name="MemberPasswordConfirm" id="MemberPasswordConfirm" value="" placeholder="Confirm Password" class="form_control" required />
            </div>
        </fieldset>
        
        <div class="action">
            <em class="screen_out">Action Area</em>
            <button type="button" onclick="fnBack();" class="button"><i class="ri-arrow-left-line"></i>Prev</button>
            <button type="submit" class="button"><i class="ri-arrow-right-line"></i>sign up</button>
        </div>
    </form>
 
</section>
<?php include("../shared/layout/tail.php") ?>
<?php include("../shared/layout/tail.sub.php") ?>