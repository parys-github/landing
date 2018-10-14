<?php
/**
 * Template Name: Modal Page
 */
?>

<div id="animatedModal">
	<div class='align' data-aos='fade-up' data-aos-duration='1200' data-aos-anchor-placement='bottom-bottom'>
		<div class='text-cell'>
			<?= $data['text']; ?>
		</div>
	</div>
</div>

<!--DEMO01-->
        <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal">
                CLOSE MODAL
            </div>

            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>

        <!--DEMO02-->
        <div id="policyModal">
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-policyModal">
                CLOSE MODAL
            </div>

            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>