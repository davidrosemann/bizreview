<?php
    /* Send an SMS using Twilio. You can run this file 3 different ways:
     *
     * 1. Save it as sendnotifications.php and at the command line, run
     *         php sendnotifications.php
     *
     * 2. Upload it to a web host and load mywebhost.com/sendnotifications.php
     *    in a web browser.
     *
     * 3. Download a local server like WAMP, MAMP or XAMPP. Point the web root
     *    directory to the folder containing this file, and load
     *    localhost:8888/sendnotifications.php in a web browser.
     */

    // Step 1: Get the Twilio-PHP library from twilio.com/docs/libraries/php,
    // following the instructions to install it with Composer.
    require __DIR__ .'/twilio-php-master/Twilio/autoload.php';
    use Twilio\Rest\Client;

    // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "UniqueID";
    $AuthToken = "UniqueToken";

    // Step 3: instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);
    $person = ($_GET["name"]);
    $number = ($_GET["phone"]);

    // Step 4: Use the client to do fun stuff like send text messages!
        $sms = $client->account->messages->create(

            // the number we are sending to - Any phone number
            $number,

            array(
                // Step 5: Change the 'From' number below to be a valid Twilio number
                // that you've purchased
                'from' => "+16368218655",

                // the sms body
                'body' => "Hey $person! Thank you for visiting us!  Would you be willing to give us a review? https://ide50-davidrosemann.cs50.io/googacct.html"
            )
        );

        // Display a confirmation message on the screen
        echo "Sent message to $person";
?>
