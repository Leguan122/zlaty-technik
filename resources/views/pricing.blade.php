@extends('layouts.site')
@section('title', 'Cenník | Zlatý technik')
@section('description', 'Cenník servisu počítačov, hostingu a opráv webov, 3D modelovania a tlače, IoT projektov a dopravy.')
@section('content')
<section class="shell section">
    <div class="eyebrow">Cenník</div>
    <h1>Ceny podľa služby</h1>
    <p>Nie som platiteľ DPH. Ceny sú orientačné; konečnú cenu Vám potvrdím po posúdení zadania alebo diagnostike. Ďalšie práce a materiál účtujem až po Vašom odsúhlasení.</p>
    <nav class="actions" aria-label="Kategórie cenníka">
        <a class="btn btn-ghost" href="#pocitace">Počítače a notebooky</a>
        <a class="btn btn-ghost" href="#weby">Hosting a opravy webov</a>
        <a class="btn btn-ghost" href="#3d">3D modelovanie a tlač</a>
        <a class="btn btn-ghost" href="#iot">IoT a prototypy</a>
        <a class="btn btn-ghost" href="#doprava">Doprava</a>
    </nav>
</section>
@include('partials.pricing', array_merge(config('pricing.repairs'), ['pricingId' => 'pocitace', 'pricingTitle' => 'Počítače a notebooky', 'showDisclaimer' => false, 'showCta' => false]))

@include('partials.pricing', array_merge(config('pricing.web-it'), ['pricingId' => 'weby', 'pricingTitle' => 'Hosting a opravy webov', 'showDisclaimer' => false, 'showCta' => false]))

@include('partials.pricing', array_merge(config('pricing.3d'), ['pricingId' => '3d', 'pricingTitle' => '3D modelovanie a tlač', 'showDisclaimer' => false, 'showCta' => false]))

@include('partials.pricing', array_merge(config('pricing.iot'), ['pricingId' => 'iot', 'pricingTitle' => 'IoT a prototypy', 'showDisclaimer' => false, 'showCta' => false]))

@include('partials.pricing', array_merge(config('pricing.transport'), ['pricingId' => 'doprava', 'pricingTitle' => 'Doprava a vyzdvihnutie', 'showDisclaimer' => false, 'showCta' => false]))

<section class="shell section" style="padding-top:18px">
    <div class="quick">
        <div><h2>Potrebujete presnú cenu?</h2><p>Pošlite stručný popis zadania a dostupné podklady.</p></div>
        <a class="btn" href="{{ route('contact') }}">Dopyt na cenovú ponuku</a>
    </div>
</section>
@endsection
