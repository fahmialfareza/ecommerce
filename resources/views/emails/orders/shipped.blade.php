@component('mail::message')
# Pesanan sudah dikirim dengan nomor pemesanan {{$order->id}}

Pesanan sudah dikirimkan.
Dengan total pembayaran Rp {{$order->total}},00.

Terima kasih,<br>


Toko Z
@endcomponent
