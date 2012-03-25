<!--<?php echo $this->template->block('header', 'home/header.php'); ?>
<div data-role="content" role="main">
        <form id="JqPostForm" data-ajax="false" method="post">
                <fieldset>
                        <p><label for="mobtel">Enter mobile no.:</label><br />
                                <input id="mobtel" type="text" name="mobtel" placeholder="mobile number..."/>
                                </p>
                        <p><input type="submit" value="Submit" onclick="set_name(this.form)"/></p>
                </fieldset>
        </form>
        
        <form id="inputVerification" data-ajax="false" method="post" style="display: none;">
                <fieldset>
                        <p><label for="verification">Enter verification  no.:</label><br />
                                <input id="verification_no" type="text" name="verification_no" placeholder="verification number..."/></p>
                        <p><input type="submit" value="Submit"/></p>
                </fieldset>
        </form>
        <div id="message_post"></div>

        <div style="clear: both;">&nbsp;</div>
        <div style="text-align: center">A verification code will be sent to your phone to enable my account information and mobile services</div>
        <div style="clear: both;">&nbsp;</div>
        <div style="text-align: center">I have a verification code already.</div>
        <!--<img src="/assets/images/lock.png" alt="lock" class="ui-li-icon"/>-->
</div>
<?php echo $this->template->block('footer', 'home/footer.php'); ?>