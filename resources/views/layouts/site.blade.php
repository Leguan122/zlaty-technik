<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'Hosting a opravy webov, IoT, 3D modelovanie a tlač, servis počítačov a notebookov vo Zvolene a okolí.')">
    <title>@yield('title', 'Zlatý technik')</title>
    <style>
        :root{--paper:#f1efe8;--sheet:#fbfaf6;--ink:#181816;--muted:#706f69;--line:#cfccc1;--yellow:#ffd43b;--yellow-soft:#fff0a8;--dark:#20201e;--max:1180px}
        *{box-sizing:border-box}html{background:var(--paper)}body{margin:0;color:var(--ink);background:var(--paper);font-family:Arial,Helvetica,sans-serif;line-height:1.5}a{color:inherit;text-decoration:none}.shell{width:min(calc(100% - 40px),var(--max));margin-inline:auto}
        .topbar{position:sticky;top:0;z-index:30;background:rgba(241,239,232,.94);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}.nav{min-height:72px;display:flex;align-items:center;justify-content:space-between;gap:24px}.brand{display:flex;align-items:center;gap:12px;font-weight:900;letter-spacing:-.02em}.brand-mark{width:42px;height:42px;display:grid;place-items:center;background:var(--yellow);border:1px solid var(--ink);font-family:"Courier New",monospace;font-size:13px;font-weight:900;transform:rotate(-2deg)}.brand small{display:block;margin-top:1px;color:var(--muted);font-family:"Courier New",monospace;font-size:10px;font-weight:700;letter-spacing:.06em;text-transform:uppercase}.menu{display:flex;align-items:center;gap:2px}.menu a{padding:9px 11px;border-radius:6px;color:#4d4c48;font-size:14px;font-weight:700}.menu a:hover,.menu a.active{text-decoration:underline;text-decoration-thickness:2px;text-underline-offset:5px}.menu .contact{margin-left:8px;background:var(--ink);color:white;padding-inline:15px}.menu .contact:hover,.menu .contact.active{text-decoration:none;background:#000}
        .eyebrow{font-family:"Courier New",monospace;color:#55544f;font-weight:800;font-size:12px;letter-spacing:.08em;text-transform:uppercase}.actions{display:flex;flex-wrap:wrap;gap:10px;margin-top:26px}.btn{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:0 18px;border:1px solid var(--ink);border-radius:4px;font-weight:800}.btn-primary{background:var(--yellow);color:var(--ink)}.btn-ghost{background:transparent}.btn:hover{transform:translateY(-1px)}
        .hero{display:grid;grid-template-columns:1.02fr .98fr;gap:54px;align-items:center;min-height:520px;padding:58px 0}.hero h1,.page-head h1{margin:12px 0 18px;font-size:clamp(44px,6.2vw,76px);letter-spacing:-.06em;line-height:.96}.hero p,.page-head p{max-width:600px;color:#5e5d58;font-size:18px;margin:0}.hero-art,.page-art{position:relative;min-height:370px;border:1px solid var(--ink);overflow:hidden;background:var(--sheet);box-shadow:10px 10px 0 var(--yellow-soft)}.hero-art svg,.page-art svg,.card-art svg{display:block;width:100%;height:100%}
        .section{padding:58px 0}.section-title{display:flex;justify-content:space-between;align-items:end;gap:30px;margin-bottom:24px;padding-bottom:13px;border-bottom:1px solid var(--ink)}.section-title h2{margin:4px 0 0;font-size:clamp(29px,4vw,43px);letter-spacing:-.045em}.section-title p{margin:0;color:var(--muted);max-width:460px}
        .service-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px}.service-card{display:grid;grid-template-columns:1.08fr .92fr;min-height:250px;overflow:hidden;border:1px solid var(--ink);background:var(--sheet);transition:.18s transform,.18s box-shadow}.service-card:hover{transform:translate(-2px,-2px);box-shadow:7px 7px 0 var(--yellow)}.card-art{min-height:220px;background:#e7e4da;overflow:hidden;border-right:1px solid var(--ink)}.card-body{padding:22px;display:flex;flex-direction:column;justify-content:flex-end}.card-body h3{font-size:24px;letter-spacing:-.035em;margin:0 0 7px}.card-body p{color:var(--muted);font-size:14px;margin:0 0 18px}.arrow{margin-top:auto;font-family:"Courier New",monospace;font-size:13px;font-weight:900}
        .quick{display:flex;align-items:center;justify-content:space-between;gap:30px;padding:27px 30px;border:1px solid var(--ink);background:var(--yellow)}.quick h2{margin:0 0 4px;font-size:25px;letter-spacing:-.03em}.quick p{margin:0;color:#494842}.quick .btn{background:var(--ink);color:#fff}
        .page-head{display:grid;grid-template-columns:.9fr 1.1fr;gap:52px;align-items:center;padding:52px 0}.page-head h1{font-size:clamp(40px,5.5vw,66px)}.page-art{min-height:330px}.visual-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.visual-tile{overflow:hidden;border:1px solid var(--ink);background:var(--sheet)}.visual-tile .card-art{height:190px;border-right:0;border-bottom:1px solid var(--ink)}.visual-tile .card-body{padding:18px}.visual-tile h3{margin:0;font-size:18px}.visual-tile p{margin:5px 0 0;color:var(--muted);font-size:13px}.steps{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}.step{padding:22px;border:1px solid var(--ink);background:var(--sheet)}.step strong{display:block;margin-bottom:5px}.step span{color:var(--muted);font-size:14px}.step-num{font-family:"Courier New",monospace;font-weight:900;font-size:12px;margin-bottom:18px;background:var(--yellow);display:inline-block;padding:3px 6px}
        .contact-grid{display:grid;grid-template-columns:.85fr 1.15fr;gap:18px}.contact-panel,.form-panel{border:1px solid var(--ink);background:var(--sheet);padding:28px}.contact-panel h1{margin:9px 0 10px;font-size:43px;line-height:1}.contact-panel p{color:var(--muted)}.contact-hints{display:grid;gap:10px;margin-top:25px}.hint{display:flex;align-items:center;gap:12px;padding:13px;border:1px solid var(--line);background:var(--paper)}.hint-icon{width:38px;height:38px;display:grid;place-items:center;background:var(--yellow);border:1px solid var(--ink)}form{display:grid;gap:11px}.field{width:100%;padding:13px 14px;border:1px solid var(--ink);border-radius:0;background:#fff;color:var(--ink);font:inherit}.field-row{display:grid;grid-template-columns:1fr 1fr;gap:11px}textarea.field{min-height:130px;resize:vertical}.note{font-size:12px;color:#77746b}
        .footer{margin-top:54px;padding:28px 0 40px;border-top:1px solid var(--ink);color:#696860;font-size:13px}.footer-inner{display:flex;justify-content:space-between;gap:18px;font-family:"Courier New",monospace}
        .nav{position:relative}.mobile-menu{display:none}.mobile-menu summary{display:flex;align-items:center;justify-content:center;gap:8px;min-height:44px;padding:8px 12px;border:1px solid var(--ink);background:var(--sheet);font-size:14px;font-weight:800;cursor:pointer;list-style:none}.mobile-menu summary::-webkit-details-marker{display:none}.mobile-menu summary:focus-visible,.mobile-links a:focus-visible{outline:2px solid var(--ink);outline-offset:3px}.mobile-menu[open] summary{background:var(--yellow)}.mobile-links{position:absolute;top:calc(100% - 1px);right:0;display:flex;flex-direction:column;width:min(280px,100%);max-height:calc(100dvh - 90px);overflow-y:auto;padding:10px;border:1px solid var(--ink);background:var(--sheet);box-shadow:5px 5px 0 var(--yellow-soft)}.mobile-links a{display:block;min-height:44px;padding:10px 12px;color:var(--ink);font-size:15px;font-weight:700}.mobile-links a:hover,.mobile-links a.active{background:var(--yellow-soft)}.mobile-links .contact{margin-top:6px;background:var(--ink);color:white}.mobile-links .contact:hover,.mobile-links .contact.active{background:#000}.pricing-section{scroll-margin-top:100px}
        @media(max-width:980px){.menu{display:none}.mobile-menu{display:block}.hero,.page-head,.contact-grid{grid-template-columns:1fr}.service-grid{grid-template-columns:1fr}.hero{padding-top:42px}.hero-art,.page-art{min-height:320px}.visual-grid,.steps{grid-template-columns:1fr}.section-title{align-items:start;flex-direction:column}.quick{align-items:flex-start;flex-direction:column}}
        @media(max-width:767px){.page-art{display:none}}
        @media(max-width:620px){.shell{width:min(calc(100% - 24px),var(--max))}.brand small{display:none}.hero h1,.page-head h1{font-size:44px}.hero-art,.page-art{min-height:265px}.service-card{grid-template-columns:1fr}.card-art{border-right:0;border-bottom:1px solid var(--ink)}.field-row{grid-template-columns:1fr}.footer-inner{flex-direction:column}.quick{padding:23px}.menu .contact{margin-left:0}}
        .pricing-panel{border:1px solid var(--ink);background:var(--sheet);padding:clamp(18px,4vw,30px)}.pricing-table{width:100%;border-collapse:collapse;text-align:left}.pricing-caption{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip-path:inset(50%)}.pricing-table th,.pricing-table td{padding:13px 0;border-bottom:1px solid var(--line);vertical-align:top}.pricing-table thead th{font-family:"Courier New",monospace;font-size:12px;text-transform:uppercase}.pricing-table tbody th{font-size:15px;font-weight:700;padding-right:16px}.pricing-table td,.pricing-table thead th:last-child{text-align:right}.pricing-table td{font-weight:800;font-size:16px;width:34%}.pricing-notes{margin:18px 0;color:var(--muted);font-size:14px}.pricing-notes p{margin:8px 0}
        .contact-methods{display:grid;gap:12px;margin-top:28px}.contact-method{display:flex;align-items:center;justify-content:space-between;gap:20px;padding:18px;border:1px solid var(--ink);background:var(--paper)}.contact-method-label{display:block;font-family:"Courier New",monospace;font-size:10px;font-weight:900;text-transform:uppercase;color:#77746c}.contact-method-value{display:block;margin-top:3px;font-size:19px;font-weight:800;user-select:text;overflow-wrap:anywhere}.contact-method>span{min-width:0}.contact-copy{display:grid;place-items:center;flex-shrink:0;width:32px;height:32px;padding:6px;border:1px solid var(--ink);background:transparent;color:var(--ink);cursor:pointer}.contact-copy[hidden]{display:none}.contact-copy:hover{background:var(--yellow)}.contact-copy:focus-visible{outline:2px solid var(--ink);outline-offset:3px}.contact-copy svg{width:18px;height:18px}.contact-copy-status{min-height:18px;margin:6px 0 0;color:var(--muted);font-size:12px}
        .email-contact{max-width:560px}.service-contact h2{margin:0 0 12px;font-size:clamp(25px,4vw,34px);letter-spacing:-.035em}.service-contact>p{max-width:720px;color:var(--muted)}@media(max-width:560px){.contact-method{align-items:flex-start;gap:12px;padding:14px}.contact-method-value{font-size:16px}}
    </style>
    @stack('styles')
</head>
<body>
<header class="topbar">
    <div class="shell nav">
        <a class="brand" href="{{ route('home') }}"><span class="brand-mark">ZT</span><span>Zlatý technik<small>digitálna & technická dielňa</small></span></a>
        <nav class="menu" aria-label="Hlavná navigácia">
            @include('partials.navigation-links')
        </nav>
        <details class="mobile-menu">
            <summary>Menu <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></summary>
            <nav class="mobile-links" aria-label="Mobilná navigácia">
                @include('partials.navigation-links')
            </nav>
        </details>
    </div>
</header>
<main>@yield('content')</main>
<footer class="footer"><div class="shell footer-inner"><span>© {{ date('Y') }} Zlatý technik</span><span>Zvolen / Banská Bystrica a okolie</span></div></footer>
<script>
    document.querySelectorAll('[data-email-contact]').forEach((contact) => {
        const copyButton = contact.querySelector('.contact-copy');
        const emailText = contact.querySelector('[data-email-text]');
        const copyStatus = contact.querySelector('.contact-copy-status');

        if (!copyButton || !emailText || !copyStatus) return;
        copyButton.hidden = false;
        copyButton.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(emailText.textContent.trim());
                copyStatus.textContent = 'E-mailová adresa bola skopírovaná.';
            } catch {
                const selection = window.getSelection();
                if (selection) {
                    const range = document.createRange();
                    range.selectNodeContents(emailText);
                    selection.removeAllRanges();
                    selection.addRange(range);
                }
                copyStatus.textContent = 'Adresa je označená. Skopírujte ju, prosím, ručne.';
            }
        });
    });
</script>
</body>
</html>
