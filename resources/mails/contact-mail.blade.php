@component('mail::message')

**Nom: ** {{ $data['nom'] }}<br>
**Email: ** {{ $data['email'] }}<br>
**phone : ** {{ $data['phone'] }}<br>
<strong>Message : </strong><br>
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
