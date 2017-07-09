<?php


////// ============== CONTACT PAGE ============================

class Contact extends CI_Controller
{





//// go to contact page


    public function contact_(){

        $this->load->view('master/header');
        $this->load->view('master/contact');
        $this->load->view('users/signup');
        $this->load->view('admin/login');
        $this->load->view('users/signin');
        $this->load->view('master/footer');

    }




   //////// send email from contact form

    public function send_email()
    {
            /* get user input  */


            $name = $this->input->post('name');    /* get user name */

            $email = $this->input->post('email');   /* get user email */

            $subject = $this->input->post('subject');    /* get user subject  */

            $message = $this->input->post('message_');   /* get user massage   */



        /* configure email settings */


            $config['protocol'] = 'smtp';     /* set smtp protocol  */

            $config['smtp_host']='ssl://smtp.live.com';  /* accept live emails  */

            $config['smtp_host']='ssl://smtp.mail.yahoo.com'; /* accept yahoo emails  */

            $config['smtp_host'] = 'ssl://smtp.gmail.com';   /* accept gmail emails */


            $config['smtp_port'] = '465';   /* smtp port */

            $config['smtp_user'] = ' Mood2010_ak@yahoo.com';     /* email */

            $config['smtp_pass'] = '';   /* password */ // put password od your email here

            $config['mailtype'] = 'html';

            $config['charset'] = 'iso-8859-1';

            $config['wordwrap'] = TRUE;

            $config['newline'] = "\r\n"; /*print newline */


               /*  put configration in email system   */

            $this->email->initialize($config);



            $this->email->from($email,$name); /*put user name an email in email system */

            $this->email->to('Mood2010_ak@yahoo.com');      /* email to send message to it  */

             $this->email->subject($subject);  /* put subject in email system */

             $this->email->message($message);  /*put  message in email system  */


              /* check if email send successfully */

             if ($this->email->send()) {

                 // if send

                echo "We have successfully received your email";
            }


            else {
                  // if not send

                echo $this->email->print_debugger();

            }
        }



}