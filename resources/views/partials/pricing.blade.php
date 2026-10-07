<section class="shell section pricing-section" id="cennik" style="padding-top:18px">
    <div class="section-title">
        <div><div class="eyebrow">Cena</div><h2>Orientačný cenník</h2></div>
    </div>
    <div class="pricing-panel">
        <table class="pricing-table">
            <caption class="pricing-caption">Orientačné ceny služieb</caption>
            <thead><tr><th scope="col">Služba</th><th scope="col">Cena</th></tr></thead>
            <tbody>
                @foreach($items as $item)
                    <tr><th scope="row">{{ $item[0] }}</th><td>{{ $item[1] }}</td></tr>
                @endforeach
            </tbody>
        </table>
        <div class="pricing-notes">
            @foreach($notes as $note)
                <p>{{ $note }}</p>
            @endforeach
            <p>Nie som platiteľ DPH. Uvedené ceny sú orientačné; konečnú cenu Vám potvrdím po posúdení zadania alebo diagnostike. Ďalšie práce a materiál účtujem až po Vašom odsúhlasení.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('contact') }}">Dopyt na cenovú ponuku</a>
    </div>
</section>
