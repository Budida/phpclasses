<?php
	class Emailer {
		private $sender;
		private $recipients;
		private $subject;
		private $body;
		
		function __construct($sender) {
			$this->sender = $sender;
			$this->recipients = array();
			} 
		public function addRecipients($recipient) {
			array_push($this->recipients, $recipient);
			}
		public function setSubject($subject) {
			$this->subject = $subject;
			}
		public function setBody($body) {
			$this->body = $body;
			}
		public function sendMail() {
			foreach($this->recipients as $recipient) {
				$result = mail($recipient, $this->subject, $this->body, "From {$this->sender}\n\n" );
				if($result) { 
					echo "Email sent successfully to {$recipient} <br />"; 
				} else {
					echo "Email sending to {$recipient} failed";
					}
				}
			}
		}
?>
