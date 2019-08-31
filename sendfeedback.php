<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'mailgun/vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-UniqueToken');
$domain = "sandboxb1cb975629274037aad943532cb9c8a5.mailgun.org";
$comment = $_POST["comment"];

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandboxb1cb975629274037aad943532cb9c8a5.mailgun.org>',
                        'to'      => 'Dave Rosemann <dave_cherryhills@yahoo.com>',
                        'subject' => 'Hello Dave Rosemann',
                        'text'    => "$comment"));
                        echo "Thank you for your feedback.  See you next time!"
  ?>
