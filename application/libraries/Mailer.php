<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

class Mailer
{
	private $client_id;
	private $client_secret;
	private $refresh_token;
	private $from;
	private $fromname;

	public function __construct($param)
	{
		extract($param);

		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
		$this->refresh_token = $refresh_token;
		$this->from = $from;
		$this->fromname = $fromname;
	}

    public function send($to, $name, $subject, $htmlContent)
    {
        $mail = new PHPMailer;

        $mail->isSMTP();

        $mail->SMTPDebug = 2;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->AuthType = 'XOAUTH2';

        $clientId = $this->client_id;
        $clientSecret = $this->client_secret;
        $refreshToken = $this->refresh_token;

        $provider = new Google(
            [
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
            ]
        );

        $mail->setOAuth(
            new OAuth([
                'provider' => $provider,
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
                'refreshToken' => $refreshToken,
                'userName' => $this->from
            ])
        );

        $mail->setFrom($this->from, $this->fromname);

        $mail->addAddress($to, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlContent;
        $mail->CharSet = 'utf-8';

		ob_start();
        if (! $mail->send()) {
			ob_end_clean();
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
		ob_end_clean();
    }
}
