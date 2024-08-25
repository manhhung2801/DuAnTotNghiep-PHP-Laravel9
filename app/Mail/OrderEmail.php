<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $getProduct;
    public $order;
    public $getCoupon;
    public function __construct($getProduct, $order, $getCoupon = null, $subject = 'Đơn hàng từ Cybermart')
    {
        $this->getProduct = $getProduct;
        $this->order = $order;
        $this->getCoupon = $getCoupon;
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: '[CyberMart] ' . $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'frontend.checkout.orderMail',
            with: [
                'getProduct' => $this->getProduct,
                'order' => $this->order,
                'getCoupon' => $this->getCoupon,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
