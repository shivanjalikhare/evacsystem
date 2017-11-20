<?php
namespace App\Mailer;
use Cake\Mailer\Mailer;
class UserMailer extends Mailer
{
	public function registered($user)
    {
        // attach a text file

        $this->to($user->email)

             ->emailFormat('html')

             ->subject(sprintf('Welcome From Team Evacuation %s', $user->name))

             ->viewVars(['username'=>$user->email ,'useremail'=>$user->email])

        // the template file you will use in this emial

        ->template('registered') // By default template with same name as method name is used.

        // the layout .ctp file you will use in this email

        ->layout('customLayout');

    }


    public function emergency($user)
    {
        $this->to($user->email)

             ->emailFormat('html')

             ->subject(sprintf('Emergency Contact Request %s', $user->name))

             ->viewVars(['username'=>$user->email ,'useremail'=>$user->email])

        // the template file you will use in this emial

            ->template('emergency') // By default template with same name as method name is used.

        // the layout .ctp file you will use in this email

            ->layout('customLayout');
    }

    public function resetPassword($user)
    {
        $this->to($user->email)

        ->subject('Reset password')

        ->set(['token' => $user->token]);

    }
}