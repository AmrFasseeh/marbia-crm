<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewDealCreated extends Notification
{
    use Queueable;

    private $deal;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($deal)
    {
        $this->deal = $deal;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
            ->subject('Hey admin, New deal availabe')
            ->greeting('Hello', 'admin')
            ->line('New Deal ' . $this->deal->title . ' has been created!')
            ->line('for customer: ' . $this->deal->customer->fullname)
            ->line('property name: ' . $this->deal->property->name . ', floor #: ' . $this->deal->property->floor_no . ' and appartment #: ' . $this->deal->property->apartment_no)
            ->line('by agent: ' . $this->deal->user->fullname())
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'data' => 'New deal ' . $this->deal->title . ' has been created, for customer: ' . $this->deal->customer->fullname .
            ', and property: ' . $this->deal->property->name,
        ];
    }
}
