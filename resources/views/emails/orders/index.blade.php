@component('mail::message')
# Pesanan nomor {{$order->id}}

Total yang harus dibayarkan Rp {{$order->total}},00.
Kirimkan ke nomor rekening 1234567890 atas nama Ma'fua Aziz Prama.
Silahkan, kirim bukti transfer ke email nanug.village@gmail.com.

@component('mail::button', ['url' => 'mailto:fahmialfareza97@gmail.com'])
  Konfirmasi Bukti Pembayaran
@endcomponent

Terima kasih,<br>


Toko Z
@endcomponent
