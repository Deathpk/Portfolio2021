@component('mail::message')
    <h1>Olá! Você acaba de ser contactado por alguém pelo portfólio.</h1>
    <h5>Nome: {{$name}}</h5>
    <h5>Email: {{$email}}</h5>
    <h5>Mensagem:{{$mensagem}}</h5>
@endcomponent