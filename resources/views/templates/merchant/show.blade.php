@extends('layouts.app')

@section('content')
    <header class="article-header text-center max-w-4xl m-auto mt-24 mb-8">
        <span class="text-red-base font-brand font-bold text-xl leading-tight uppercase mb-3">Austin Merchant</span>
        <h1 class="font-brand font-bold text-4xl leading-tight">{{ $merchant->name }}</h1>
    </header>
    <section class="m-auto max-w-4xl">
        <div class="m-auto mb-8 overflow-hidden">
            <img src="https://placeimg.com/900/200/any" alt="austin">
        </div>
        <div class="m-auto mb-16">
            {!! $merchant->description !!}
        </div>
    </section>
@endsection