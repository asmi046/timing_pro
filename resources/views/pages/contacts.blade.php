@extends('layouts.page')

@section('title', 'Контакты — Тайминг PRO')

@section('content')
    <h1>Контакты</h1>

    <p>Оператор сайта {{ config('company.site') }} — <strong>{{ config('company.name') }}</strong>.</p>

    <h2>Реквизиты</h2>

    <table class="requisites">
        <tr><th>Наименование</th><td>{{ config('company.name') }}</td></tr>
        <tr><th>ИНН</th><td>{{ config('company.inn') }}</td></tr>
        <tr><th>ОГРНИП</th><td>{{ config('company.ogrnip') }}</td></tr>
        <tr><th>Адрес регистрации</th><td>{{ config('company.registration_address') }}</td></tr>
        <tr><th>Расчётный счёт</th><td>{{ config('company.bank.account') }}</td></tr>
        <tr><th>Банк</th><td>{{ config('company.bank.name') }}</td></tr>
        <tr><th>БИК банка</th><td>{{ config('company.bank.bik') }}</td></tr>
        <tr><th>Корсчёт</th><td>{{ config('company.bank.correspondent_account') }}</td></tr>
        <tr><th>ИНН банка</th><td>{{ config('company.bank.inn') }}</td></tr>
        <tr><th>КПП банка</th><td>{{ config('company.bank.kpp') }}</td></tr>
    </table>

    <h2>Связаться с нами</h2>

    <p>
        Телефон: <a href="tel:{{ preg_replace('/\D/', '', config('company.phone')) }}">{{ config('company.phone_display') }}</a><br>
        E-mail: <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a><br>
        Сайт: <a href="{{ config('company.site') }}" target="_blank" rel="noopener">{{ config('company.site') }}</a>
    </p>
@endsection
