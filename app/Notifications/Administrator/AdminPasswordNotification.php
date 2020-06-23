<?php

namespace App\Notifications\Administrator;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminPasswordNotification extends Notification
{
    use Queueable;

    public $password;

    /**
     * Create a new notification instance.
     *
     * @param $password
     */
    public function __construct($password)
    {
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->line("Welcome As an Administrator on Gizzabre {$notifiable->name}")
                ->line('Click on the link below to Logon to Gizzabre Admin portal')
                ->action('Login as Administrator', route('admin.login'))
                ->line("Your username is {$notifiable->email}")
                ->line("Your login password is {$this->password}")
                ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
