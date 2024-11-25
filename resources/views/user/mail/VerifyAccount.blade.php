@component('mail::message')
# Chào mừng bạn, {{ $user->fullname }}!

Cảm ơn bạn đã đăng ký tài khoản tại ứng dụng của chúng tôi.

@component('mail::button', ['url' => $activationLink])
Kích hoạt tài khoản
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
