<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 — Page Not Found | Courses</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --purple:#C86FFF;
    --purple-deep:#c054ff;
    --blue-deep:#5274ff;
    --orange:#FF9F67;
    --heading:#4255A4;
    --body-text:#10285d;
    --dark:#16161a;
  }

  *{margin:0;padding:0;box-sizing:border-box;}

  body{
    font-family:'Mulish',sans-serif;
    min-height:100vh;
    background:#c054ff;
    background:linear-gradient(160deg,#c054ff 0%,#7a63ff 50%,#5274ff 100%);
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px 20px;
    overflow-x:hidden;
    position:relative;
  }

  /* soft ambient shapes, echoing the hero's cloud/leaf motifs */
  body::before,
  body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.08);
    filter:blur(2px);
  }
  body::before{
    width:340px;height:340px;
    top:-100px;left:-100px;
  }
  body::after{
    width:260px;height:260px;
    bottom:-80px;right:-60px;
    background:rgba(255,159,103,0.12);
  }

  .wrap{
    position:relative;
    z-index:2;
    max-width:640px;
    width:100%;
    text-align:center;
    color:#fff;
  }

  .brand{
    display:inline-flex;
    align-items:center;
    gap:10px;
    margin-bottom:56px;
    font-family:'Josefin Sans',sans-serif;
    font-weight:700;
    font-size:22px;
    color:#fff;
    text-decoration:none;
  }
  .brand svg{display:block;}

  /* signature illustration: open book with a page that's escaped */
  .scene{
    position:relative;
    width:260px;
    height:180px;
    margin:0 auto 34px;
  }
  .scene svg{width:100%;height:100%;overflow:visible;}

  .flying-page{
    animation:drift 3.2s ease-in-out infinite;
    transform-origin:center;
  }
  @keyframes drift{
    0%,100%{ transform:translate(0,0) rotate(-6deg); }
    50%{ transform:translate(6px,-14px) rotate(4deg); }
  }

  .num{
    font-family:'Josefin Sans',sans-serif;
    font-weight:700;
    font-size:clamp(64px,14vw,110px);
    line-height:1;
    letter-spacing:2px;
    margin-bottom:6px;
  }
  .num span{color:var(--orange);}

  h1{
    font-family:'Josefin Sans',sans-serif;
    font-weight:600;
    font-size:clamp(22px,4vw,32px);
    color:#fff;
    margin-bottom:16px;
  }

  p.lede{
    font-size:16px;
    line-height:1.8;
    color:rgba(255,255,255,0.85);
    max-width:440px;
    margin:0 auto 40px;
  }

  .actions{
    display:flex;
    flex-wrap:wrap;
    gap:16px;
    justify-content:center;
    margin-bottom:56px;
  }

  .btn-primary,
  .btn-ghost{
    font-family:'Josefin Sans',sans-serif;
    font-size:14px;
    font-weight:500;
    letter-spacing:1px;
    text-transform:uppercase;
    text-decoration:none;
    display:inline-block;
    padding:18px 38px;
    border-radius:5px;
    cursor:pointer;
    transition:.3s;
  }

  .btn-primary{
    background:var(--orange);
    color:#fff;
    border:1px solid var(--orange);
  }
  .btn-primary:hover{
    background:transparent;
    border-color:#fff;
    color:#fff;
  }

  .btn-ghost{
    background:transparent;
    color:#fff;
    border:1px solid rgba(255,255,255,0.6);
  }
  .btn-ghost:hover{
    background:#fff;
    color:var(--heading);
    border-color:#fff;
  }

  .help{
    font-size:14px;
    color:rgba(255,255,255,0.7);
  }
  .help a{
    color:#fff;
    font-weight:600;
    text-decoration:underline;
  }

  @media (max-width:575px){
    .actions{flex-direction:column;align-items:stretch;}
    .btn-primary,.btn-ghost{padding:16px 20px;}
    .scene{width:200px;height:140px;}
  }

  @media (prefers-reduced-motion:reduce){
    .flying-page{animation:none;}
  }
</style>
</head>
<body>

  <div class="wrap">

    <a href="/" class="brand">
      <svg width="26" height="26" viewBox="0 0 26 26" fill="none">
        <path d="M2 4C2 4 7 2 13 5V22C7 19 2 21 2 21V4Z" fill="#fff"/>
        <path d="M24 4C24 4 19 2 13 5V22C19 19 24 21 24 21V4Z" fill="#fff" fill-opacity="0.7"/>
      </svg>
      Courses
    </a>

    <div class="scene" aria-hidden="true">
      <svg viewBox="0 0 260 180" fill="none">
        <!-- book base -->
        <path d="M130 60 C110 45 60 40 30 48 V140 C60 132 110 137 130 152 C150 137 200 132 230 140 V48 C200 40 150 45 130 60Z" fill="#fff" fill-opacity="0.95"/>
        <path d="M130 60 V152" stroke="#C86FFF" stroke-width="3"/>
        <path d="M46 62 C64 57 92 58 112 66" stroke="#E2D6FF" stroke-width="3" stroke-linecap="round"/>
        <path d="M46 82 C64 77 92 78 112 86" stroke="#E2D6FF" stroke-width="3" stroke-linecap="round"/>
        <path d="M46 102 C64 97 92 98 106 104" stroke="#E2D6FF" stroke-width="3" stroke-linecap="round"/>
        <path d="M148 66 C168 58 196 57 214 62" stroke="#E2D6FF" stroke-width="3" stroke-linecap="round"/>
        <path d="M148 86 C168 78 196 77 214 82" stroke="#E2D6FF" stroke-width="3" stroke-linecap="round"/>

        <!-- flying page with a lost "?" -->
        <g class="flying-page">
          <rect x="176" y="10" width="52" height="66" rx="4" fill="#fff"/>
          <rect x="176" y="10" width="52" height="66" rx="4" stroke="#FF9F67" stroke-width="2"/>
          <text x="202" y="52" font-family="Josefin Sans, sans-serif" font-size="30" font-weight="700" fill="#C86FFF" text-anchor="middle">?</text>
        </g>
      </svg>
    </div>

    <div class="num">4<span>0</span>4</div>

    <h1>This page skipped class.</h1>
    <p class="lede">
      The page you're looking for isn't here — it may have been moved, renamed, or never existed. Let's get you back to your lesson plan.
    </p>

    <div class="actions">
      <a href="/" class="btn-primary">Back to Home</a>
      <a href="/courses" class="btn-ghost">Browse Courses</a>
    </div>

    <p class="help">
      Still stuck? <a href="/contact">Contact support</a>
    </p>

  </div>

</body>
</html>
