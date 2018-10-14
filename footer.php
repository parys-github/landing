<?php $data = get_fields(get_options_page_id('site-options')); ?>

<div class='footer interstitialSection'>
    <div class='align'>
        <div class='footer-links'>
            <?= $data['footer_links']; ?>
        </div>

        <!-- Social links section -->

        <div class='footer-soc'>
            <a href='<?= $data['github']; ?>' target='_blank'><img src='<?= SITE()->resource('../build/img/hs-gh.svg'); ?>'></a>
            <a href='<?= $data['npm']; ?>' target='_blank'><img src='<?= SITE()->resource('../build/img/hs-np.svg'); ?>'></a>
            <!--<a href='<? /*= $data['linked_in']; */ ?>' target='_blank'><img src='<? /*= SITE()->resource('../build/img/hs-li.svg'); */ ?>'></a>-->
            <!--<a href='<? /*= $data['twitter']; */ ?>' target='_blank'><img src='<? /*= SITE()->resource('../build/img/hs-tw.svg'); */ ?>'></a>-->
            <!--<a href='<? /*= $data['instagram']; */ ?>' target='_blank'><img src='<? /*= SITE()->resource('../build/img/hs-in.svg'); */ ?>'></a>-->
        </div>

         <!-- Modal Login/Signup popup -->

            <div id="modal-custom" data-iziModal-group="grup1">
                <button data-iziModal-close class="icon-close">x</button>
                <header>
                    <a href="" id="signin">Sign in</a>
                    <a href="" class="active">New Account</a>
                </header>
                <section class="hide">
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <footer>
                        <button data-iziModal-close>Cancel</button>
                        <button class="submit">Log in</button>
                    </footer>
                </section>
                <section>
                    <input type="text" placeholder="Username">
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <label for="check"><input type="checkbox" name="checkbox"
                                              id="check" value="1"> I agree to
                        the <u>Terms</u>.</label>
                    <footer>
                        <button data-iziModal-close>Cancel</button>
                        <button class="submit">Create Account</button>
                    </footer>
                </section>
            </div>

        <div class='footer-text'>
            <?= $data['footer_text']; ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>