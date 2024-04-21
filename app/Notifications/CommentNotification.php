<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $user;
    public $property;
    public function __construct($user,$property)
    {
       $this->user=$user;
       $this->property=$property;

    }
    

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

   
    public function toArray(object $notifiable): array
    {
        return [
            'user_id'=>$this->user['id'],
            'user_name'=>$this->user['user_name'],
            'user_pic'=>$this->user['avatar'],
            'property_id'=>$this->property['id'],
            'property_name'=>$this->property['title'],
         ];
    }
}
