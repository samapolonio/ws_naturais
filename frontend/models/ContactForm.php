<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name'], 'required','message' => 'Informe seu nome'],
			[['email'], 'required','message' => 'Informe seu email'],
			[['subject'], 'required','message' => 'Informe o assunto'],
			[['body'], 'required','message' => 'Informe sua mensagem'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha', 'message' => 'Digite os caracteres'],
        ];
    }

       /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
	
	 public function attributeLabels()
    {
        return [
            'name' => 'Nome',
            'email' => 'Email',
			'subject' => 'Assunto',
			'body' => 'Mensagem',
			'verifyCode' => 'Digite os caracteres abaixo',
        ];
    }
}
