<?php
				$contact_name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone']; 
				$header = "from: ".$contact_name."<".$email.">";
				$special = $_POST['special'];
				$message = $_POST['message'];
					$this_information = "\n\n This message was send by ".$contact_name." at: ".$email.', '.$phone;
					$the_message .= $this_information;
				$subject = "New Kosaya Photography response from " . $contact_name;

				// Enter your email address
				$to ='eakosaya@gmail.com';
				if($special=='') {
					$send_contact = mail($to, $subject, $message, $header);
				}
?>