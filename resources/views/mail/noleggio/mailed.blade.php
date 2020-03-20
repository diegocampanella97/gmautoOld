{{-- $bag = compact('name','email','dataRitiro','dataConsegna','messaggio'); --}}

@component('mail::message')
# Hai una nuova richiesta di Noleggio Auto

<hr>

## Nome Utente:{{$bag["name"]}}
## Email Utente:{{$bag["email"]}}

### Data Ritiro:{{$bag["dataRitiro"]}}
### Data Consegna:{{$bag["dataConsegna"]}}

<p>{{$bag["messaggio"]}}</p>

<hr>

@component('mail::button', ['url' => "mailto:".$bag["email"]])
Rispondi
@endcomponent

Thanks,<br>
Gm Automobili
@endcomponent
