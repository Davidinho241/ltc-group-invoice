<?php

namespace App\Notification;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class TransactionNotification extends Notification
{
    use Queueable;

    // customer data
    private mixed $name, $email, $phone, $transaction_number, $amount;

    /**
     * TransactionNotification constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->transaction_number = $data['transaction_number'];
        $this->amount = $data['amount'];
    }


    /**
     * Get the notification’s delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("New invoice")
            ->greeting(new HtmlString("Hi !"))
            ->line("You have send bill to a customer.")
            ->line("Here is the billing details.")
            ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Customer informations</strong>"))
            ->line(new HtmlString("<strong>Name :</strong> $this->name"))
            ->line(new HtmlString("<strong>Email :</strong> $this->email"))
            ->line(new HtmlString("<strong>Phone number :</strong> $this->phone"))
            ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>Transaction information</strong>"))
            ->line(new HtmlString("<strong>Invoice ID :</strong> $this->transaction_number"))
            ->line(new HtmlString("<strong>Amount :</strong> $this->amount"))
            ->line(new HtmlString("<br>"))
            ->action("Learn More", "#");
    }

}
