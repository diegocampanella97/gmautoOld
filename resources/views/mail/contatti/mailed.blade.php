{{-- $bag = compact('name','email','dataRitiro','dataConsegna','messaggio'); --}}

{{-- $bag = compact('name','email','oggetto','messaggio'); --}}

@component('mail::message')
# Hai una nuova richiesta Informazioni

<hr>

## Nome Utente:{{$bag["name"]}}
## Email Utente:{{$bag["email"]}}

### Oggetto:{{$bag["oggetto"]}}

<p>{{$bag["messaggio"]}}</p>

<hr>

@component('mail::button', ['url' => route('auto.dettaglio',[$bag['idAuto']])])
    Vai all'Annuncio
@endcomponent


@component('mail::button', ['url' => "mailto:".$bag["email"]])
Rispondi alla Mail
@endcomponent

Thanks,<br>
Gm Automobili
@endcomponent
