<?php include("../shared/layout/head.sub.php") ?>
<?php include("../shared/layout/head.php") ?>
<section class="sec title">
    <h2>Login</h2>
</section>
<section class="sec">

    <form action="/Api/Login.php" method="POST" name="" id="" >
        <fieldset class="form_fieldset">
            <legend class="form_legend">Login for Enjoy !</legend>
            <div class="form_wrap">
                <label for="MemberID">Id</label>
                <input type="text" name="MemberID" id="MemberID" value="" placeholder="Your ID" class="form_control" required />
            </div>
            <div class="form_wrap">
                <label for="MemberPassword">Password</label>
                <input type="text" name="MemberPassword" id="MemberPassword" value="" placeholder="Your Password" class="form_control" required />
            </div>
        </fieldset>
        
        <div class="action">
            <em class="screen_out">Action Area</em>
            <button type="button" onclick="fnBack();" class="button"><i class="ri-arrow-left-line"></i>Prev</button>
            <a href="/view/member/FindAccount.php">Are you forgot your account?</a>
            <a href="/view/member/Regist.php">Don't have account yet?</a>
            <button type="submit" class="button"><i class="ri-login-circle-line"></i>Login</button>
        </div>
    </form>
 
</section>
<?php include("../shared/layout/tail.php") ?>
<?php include("../shared/layout/tail.sub.php") ?>