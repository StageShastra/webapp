
     
        
        <script>window.jQuery || document.write('<script src="<?= JS ?>/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="<?= JS ?>/vendor/bootstrap.min.js"></script>
        <script src='<?= JS ?>/tagsinput.js'></script>
		<script src="<?= JS ?>/vendor/js.cookies.js"></script>
		<script src="<?= JS ?>/vendor/jquery-ui.js"></script>
		<script src="<?= JS ?>/constants.js"></script>
		<script src="<?= JS ?>/cropper.js"></script>
        <script src="<?= JS ?>/act.js"></script>
        <script src="<?= JS ?>/lightbox.js"></script>
        <script src="<?= JS ?>/intro.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.2.1/jssocials.min.js"></script>
		
		<script>
			$("#socialShare").jsSocials({
				showLabel: false,
				showCount: "inside",
				shareIn: "popup",
				text: "<?= $actorProfile['StashActor_name'] ?> | Actor | Castiko",
				url: "<?= base_url() . $user["StashUsers_username"] ?>",
				shares: ["facebook", "twitter", "whatsapp", "email"]
			});
		</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      
        <footer class="footer">
          <foodiv class="container center">
            <p class="dark-gray info-small center " style="text-align:center;">&copy; <?= date("Y") ?> Castiko | connect@castiko.com</p>
        </footer>
    </body>
</html>
