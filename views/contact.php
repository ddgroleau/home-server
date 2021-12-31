<?php include("./partials/header.php"); ?>

        <div class="content-box">
            <form method="POST" action="/message" class="contact-form">
                <div class="form-item">
                    <input name="contact_name" type="text" value="<?php $_SESSION['contact_name']?>" class="btn form-input" placeholder="Name" required pattern="[a-zA-Z'-]+|[a-zA-Z'-]+ [a-zA-Z'-]+"/>
                </div>
                <div class="form-item">
                    <input name="contact_email" type="email" value="<?php $email?>" class="btn form-input" placeholder="Email (Optional)" />
                </div>
                <div class="form-item">
                    <input name="contact_phone" type="phone" value="<?php $_POST['contact_phone']?>" class="btn form-input" placeholder="Phone (Optional)" />
                </div>
                <div class="form-item">
                    <textarea name="contact_message" type="text" value="<?php $_POST['contact_message']?>" class="btn form-input  form-textarea" placeholder="Your message"></textarea>
                </div>
                <div class="form-item">
                    <button class="btn form-submit" type="submit">Submit</button>
                </div>
            </form>
            <?php 
            echo "<p>The session message is {$_SESSION['error_message']}</p>";
             ?>
            <a class="link return-home" href="/">Return to Home</a>
        </div>

<?php include("./partials/footer.php"); ?>


<script type="text/javascript">
    document.getElementById("contact").style="display:none";
</script>

<?php

