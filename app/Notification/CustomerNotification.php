<?php

namespace App\Notification;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class CustomerNotification extends Notification
{
    use Queueable;

    // customer data
    private mixed $billing_number, $service, $payment_link, $customer_name;

    /**
     * CustomerNotification constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->billing_number = $data['billing_number'];
        $this->service = $data['service'];
        $this->payment_link = $data['route'];
        $this->customer_name = $data['customer_name'];
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
            ->subject("Invoice-[$this->billing_number] for $this->service")
            ->greeting(new HtmlString("Hi $this->customer_name!"))
            ->line("We hope you’re well.")
            ->line("Please see attached invoice number $this->billing_number for $this->service. Don’t hesitate to reach out if you have any questions.")
            ->line(new HtmlString("<br>"))
            ->line("Kind regards,")
            ->line(new HtmlString("<br>"))
            ->line(new HtmlString("<strong>LTC Group Sarl</strong>"))
            ->line(new HtmlString("<br>"))
            ->action("Regler la facture", $this->payment_link);
    }
}
