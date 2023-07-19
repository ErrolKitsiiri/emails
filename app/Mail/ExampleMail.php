<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;

class ExampleMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;

    /**
     * Create a new message instance.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the message envelope.
     */
    public function build(){
        $subject = 'Example Mail';

        // return $this->attach(
        //     storage_path('app/public/images/img1.jpg'),
        //     [
        //         'as'=>'Image_name.png'
        //     ]
        // return $this->attachFromStorage('public/images/img1.jpg', 'name.png', [
        //     'mime' => 'image/png'
        // ]
        return $this->attachFromStorageDisk('public', 'images/img1.jpg')->subject($subject)->view('emails.example2');
    }
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Example Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         // markdown: 'emails.example.mail',
    //         view:'emails.example2'
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [
    //         Illuminate\Mail\Attachment::fromStorage('app/public/img1.jpg')->as('Image'),
    //         // Attachment::fromStorage('/path/to/file')
    //         // ->as('name.pdf')
    //         // ->withMime('application/pdf'),
    //     ];
    // }
}
