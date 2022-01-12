<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $resortName, $name, $address, $numberPhone, $totalPrice,$countPeople;
    public function __construct($resortName, $name, $address, $numberPhone, $totalPrice, $countPeople)
    {
        $this->resort_name = $resortName;
        $this->fullname = $name;
        $this->address = $address;
        $this->number_phone = $numberPhone;
        $this->totalPrice = $totalPrice;
        $this->count_people = $countPeople;
    }

    public function build()
    {
        return $this->from('manhvh7621@gmail.com', 'HAPPYDAY')
        ->subject("Cảm ơn Anh/Chị đã đặt phòng của chúng tôi")
        ->markdown('mail.sendBooking', compact('resortName','name','address','numberPhone','totalPrice','countPeople'));
    }
}
