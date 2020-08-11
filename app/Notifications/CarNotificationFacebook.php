<?php

namespace App\Notifications;

use App\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use NotificationChannels\FacebookPoster\FacebookPosterChannel;
use NotificationChannels\FacebookPoster\FacebookPosterPost;

class CarNotificationFacebook extends Notification
{
    use Queueable;

    /**
     * @var Car
     */
    private $car;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
public function __construct($car)
    {

        $this->car = Car::find($car);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [FacebookPosterChannel::class];
    }

    public function toFacebookPoster($notifiable) {
//        dd($this->car);
//        dd();
//        dd($this->car->images->first() -> getUrl(800,570));

        return (new FacebookPosterPost($this->car->name))
            ->withImage(url('https://gmautoveicoli.it'.$this->car->images->first() -> getUrl(800,570)));
    }



}
