<?php
	
	namespace Hcode;

	use Rain\Tpl;

	/**
	* 
	*/
	class Mailer 
	{
		const USERNAME = "treinocurso@gmail.com";
		const PASSWORD = "treinando";
		const NAME_FROM = "Denisson Silva";

		private $mail;
		
		public function __construct($toAddress, $toName, $subject, $tplName, $data = array())
		{

			$config = array(
		    "base_url"      => null,
		    "tpl_dir"       => $_SERVER['DOCUMENT_ROOT']."/views/email/",
		    "cache_dir"     => $_SERVER['DOCUMENT_ROOT']."/views-cache/",
		    "debug"         => false
		);

			Tpl::configure( $config );

			$tpl = new Tpl();

			foreach ($data as $key => $value) {
				$tpl -> assign($key, $value);
			}

			$html = $tpl -> draw($tplName, true);

			//Create a new PHPMailer instance
			//$mail = new PHPMailer;
			$this->mail = new \PHPMailer;

			//Tell PHPMailer to use SMTP
			$this->mail->isSMTP();

			$this->mail->CharSet = 'UTF-8';

			$this->mail -> SMTPOptions = array(
				'ssl' => array(
					'verify_peer'  => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true,
				)
			);

			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$this->mail->SMTPDebug = 0;

			//$mail->Debugoutput = 'html';

			//Set the hostname of the mail server
			$this->mail->Host = 'smtp.gmail.com';
			// use
			// $mail->Host = gethostbyname('smtp.gmail.com');
			// if your network does not support SMTP over IPv6

			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$this->mail->Port = 587;

			//Set the encryption system to use - ssl (deprecated) or tls
			$this->mail->SMTPSecure = 'tsl';

			//Whether to use SMTP authentication
			$this->mail->SMTPAuth = true;

			//Username to use for SMTP authentication - use full email address for gmail
			$this->mail->Username = Mailer::USERNAME;

			//Password to use for SMTP authentication
			$this->mail->Password = Mailer::PASSWORD;

			//Set who the message is to be sent from
			$this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);

			//Set an alternative reply-to address
			//$mail->addReplyTo('replyto@example.com', 'First Last');

			//Set who the message is to be sent to
			$this->mail->addAddress($toAddress, $toName);

			//Set the subject line
			$this->mail->Subject = $subject;

			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$this->mail->msgHTML($html);

			//Replace the plain text body with one created manually
			$this->mail->AltBody = 'testando sem html';

				}

				public function send(){

					return $this -> mail->send();
					//send the message, check for errors
			
					//if (!$this->mail->send()) {
					//    echo "Mailer Error: " . $this->mail->ErrorInfo;
				//	} else {
					//    echo "Message sent!";
					    //Section 2: IMAP
					    //Uncomment these to save your message in the 'Sent Mail' folder.
					    #if (save_mail($mail)) {
					    #    echo "Message saved!";
					    #}
			}
				
			}

?>