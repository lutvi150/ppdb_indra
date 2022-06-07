<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MailSend extends CI_Controller
{

    public function index()
    {

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp-relay.sendinblue.com',
            'smtp_port' => '587',
            'smtp_user' => 'lutvi1500@gmail.com',
            'smtp_pass' => 'NSZ31n5vmHh2sFUj',
        ];

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $from_email = "pnielmedan@gmail.com";
        $to_email = $this->input->post('email');
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if ($this->email->send()) {
            $response = [
                'status' => 'success',
                'message' => 'send email success',
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'send email failed',
                'error' => $this->email->print_debugger(),
            ];
        }
        echo json_encode($response);
    }
    public function sendMail($email)
    {
        require_once __DIR__ . '/../../vendor/autoload.php';
        $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

        $apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
            new GuzzleHttp\Client(),
            $config
        );

        $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
        // $sendSmtpEmail['to'] = array(array('email' => 'fentijuandaputri@gmail.com', 'name' => 'John Doe'));
        // $sendSmtpEmail['templateId'] = 59;
        // $sendSmtpEmail['params'] = array('name' => 'John', 'surname' => 'Doe');
        // $sendSmtpEmail['headers'] = array('X-Mailin-custom' => 'custom_header_1:custom_value_1|custom_header_2:custom_value_2');
        $sendSmtpEmail['subject'] = 'My {{params.subject}}';
        $sendSmtpEmail['htmlContent'] = '<html><body><h1>This is a transactional email {{params.parameter}}</h1></body></html>';
        $sendSmtpEmail['sender'] = array('name' => 'John Doe', 'email' => 'example@example.com');
        $sendSmtpEmail['to'] = array(
            array('email' => 'lutvi1500@gmail.com', 'name' => 'Jane Doe'),
        );
        $sendSmtpEmail['cc'] = array(
            array('email' => 'lutvi1500@gmail.com', 'name' => 'Janice Doe'),
        );
        $sendSmtpEmail['bcc'] = array(
            array('email' => 'example@example.com', 'name' => 'John Doe'),
        );
        $sendSmtpEmail['replyTo'] = array('email' => 'replyto@domain.com', 'name' => 'John Doe');
        $sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
        $sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');
        try {
            $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
            $response = [
                'status' => 'success',
                'message' => 'send email success',
                'result' => $result,
            ];
        } catch (Exception $e) {
            // $res= 'Exception when calling ContactsApi->importContacts: ', $e->getMessage(), PHP_EOL;
            $response = [
                'status' => 'error',
                'message' => 'send email failed',
                'result' => $e->getMessage(),
            ];
        }
        echo json_encode($response);
    }
}

/* End of file  MailSend.php */
