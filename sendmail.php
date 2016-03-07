<?php
                    if (isset($_POST['submit_mail']))
                      {
                      $email_from = $_POST['email_from'] ;
                      $email_to = "team.exe2k16@gmail.com" ;
                      $subject = $_POST['subject'] ;
                      $message = $_POST['message'] ;
                      $message = wordwrap($message, 70);
                      mail($email_to, $subject,$message . "\nFrom : " . $email_from, "From:" . "rishabh0402@gmail.com");
                      }
                    else
                      {
                      echo "Error sending mail<br>";                           
                      echo "Please try this<br>";
                      print("<a")
                      echo "Sorry for inconvenience<br>";
                      }
				?>