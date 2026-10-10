@php($email = config('contact.email'))
<div class="contact-methods email-contact" data-email-contact>
    @if($email)
        <div class="contact-method">
            <span><span class="contact-method-label">E-mail</span><span class="contact-method-value" data-email-text>{{ $email }}</span></span>
            <button class="contact-copy" type="button" aria-label="Skopírovať e-mailovú adresu" title="Skopírovať e-mailovú adresu" hidden>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="8" y="8" width="12" height="12" rx="1"/><path d="M16 8V4H4v12h4"/></svg>
            </button>
        </div>
        <p class="contact-copy-status" role="status" aria-live="polite"></p>
    @else
        <p>Kontaktné údaje sa doplnia pred spustením stránky.</p>
    @endif
</div>
