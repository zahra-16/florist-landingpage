<?php
// contact.php
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>
/* ================= CONTACT PREMIUM ================= */

.contact{
  padding:150px 0;
  text-align:center;
  background:
    radial-gradient(circle at 20% 30%, rgba(195,168,107,.12), transparent 45%),
    linear-gradient(to bottom, #38040e, #250902);
  position:relative;
  overflow:hidden;
  color:#f5f1e8;
}

/* Decorative circle */
.contact::after{
  content:"";
  position:absolute;
  width:420px;
  height:420px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  left:-180px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
  animation:slowRotate 45s linear infinite;
}

/* Top gold line */
.contact::before{
  content:"";
  position:absolute;
  width:110px;
  height:2px;
  background:#c3a86b;
  top:80px;
  left:50%;
  transform:translateX(-50%);
  z-index:1;
  animation:pulseLine 4s ease-in-out infinite;
}

/* ================= TITLE ================= */

.contact h2{
  font-family:"Playfair Display",serif;
  font-size:48px;
  letter-spacing:2px;
  margin-bottom:16px;
  font-weight:400;
  color:#f5f1e8;
  position:relative;
  z-index:2;
}

.contact .subtitle{
  font-size:14px;
  letter-spacing:2px;
  color:#eadfd2;
  max-width:520px;
  margin:0 auto 80px;
  line-height:1.8;
  position:relative;
  z-index:2;
}

/* ================= GRID ================= */

.contact-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:34px;
  width:90%;
  max-width:920px;
  margin:auto;
  position:relative;
  z-index:2;
}

/* ================= CARD ================= */

.contact-card{
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.14);
  border-radius:26px;
  padding:46px 28px;
  transition:.55s cubic-bezier(.4,0,.2,1);
  backdrop-filter:blur(10px);
  position:relative;
  overflow:hidden;
  animation:fadeUp 1s ease forwards;
}

/* glow aura */
.contact-card::before{
  content:"";
  position:absolute;
  inset:-35px;
  background:radial-gradient(circle at center, rgba(195,168,107,.30), transparent 70%);
  opacity:0;
  filter:blur(28px);
  transition:.55s ease;
}

.contact-card:hover::before{
  opacity:1;
}

.contact-card:hover{
  transform:translateY(-14px) scale(1.03);
  border-color:#c3a86b;
  background:rgba(255,255,255,.08);
}

/* ================= ICON ================= */

.contact-icon{
  font-size:30px;
  color:#c3a86b;
  margin-bottom:22px;
  position:relative;
  z-index:2;
  transition:.4s ease;
}

.contact-card:hover .contact-icon{
  transform:scale(1.15) rotate(-5deg);
}

/* ================= TEXT ================= */

.contact-card h4{
  font-size:12px;
  letter-spacing:4px;
  color:#c3a86b;
  margin-bottom:14px;
  position:relative;
  z-index:2;
}

.contact-card p{
  font-size:14px;
  letter-spacing:1.6px;
  color:#f5f1e8;
  position:relative;
  z-index:2;
}

/* ================= FLOATING DOTS ================= */

.contact-dots{
  position:absolute;
  inset:0;
  z-index:1;
  pointer-events:none;
}

.contact-dots span{
  position:absolute;
  width:7px;
  height:7px;
  background:rgba(195,168,107,.55);
  border-radius:50%;
  animation:floatDots 7s ease-in-out infinite;
}

.contact-dots span::after{
  content:"";
  position:absolute;
  inset:-7px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(255,255,255,.6), transparent);
  opacity:.6;
}

.contact-dots span:nth-child(1){ top:32%; left:18%; }
.contact-dots span:nth-child(2){ top:65%; left:42%; animation-delay:1.5s; }
.contact-dots span:nth-child(3){ top:45%; right:22%; animation-delay:3s; }
.contact-dots span:nth-child(4){ bottom:28%; right:38%; animation-delay:4.5s; }

/* ================= FLOATING RING ================= */

.contact-ring{
  position:absolute;
  width:150px;
  height:150px;
  border:1px solid rgba(195,168,107,.35);
  border-radius:50%;
  top:18%;
  right:12%;
  animation:ringFloat 9s ease-in-out infinite;
  z-index:1;
}

/* ================= DIAGONAL GOLD LINE ================= */

.contact-line{
  position:absolute;
  width:200px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:110px;
  right:130px;
  z-index:1;
  animation:pulseLine 4s ease-in-out infinite;
}

/* ================= GOLD CORNER ================= */

.contact-corner{
  position:absolute;
  width:100px;
  height:100px;
  border:1px solid rgba(195,168,107,.6);
  z-index:1;
}

.contact-corner.top-right{
  top:60px;
  right:60px;
  border-left:none;
  border-bottom:none;
}

.contact-corner.bottom-left{
  bottom:60px;
  left:60px;
  border-right:none;
  border-top:none;
}

/* ================= VERTICAL TEXT ================= */

.contact-vertical{
  position:absolute;
  right:30px;
  top:50%;
  transform:translateY(-50%) rotate(90deg);
  font-size:12px;
  letter-spacing:6px;
  text-transform:uppercase;
  color:rgba(195,168,107,.65);
  z-index:1;
}

/* ================= ANIMATIONS ================= */

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-14px); opacity:1; }
}

@keyframes fadeUp{
  from{ opacity:0; transform:translateY(30px); }
  to{ opacity:1; transform:translateY(0); }
}

@keyframes ringFloat{
  0%,100%{ transform:translateY(0) scale(1); }
  50%{ transform:translateY(-18px) scale(1.05); }
}

@keyframes pulseLine{
  0%,100%{ opacity:.3; }
  50%{ opacity:1; }
}

@keyframes slowRotate{
  from{ transform:translateY(-50%) rotate(0deg); }
  to{ transform:translateY(-50%) rotate(360deg); }
}

/* ================= MOBILE ================= */

@media(max-width:768px){
  .contact{
    padding:120px 0;
  }

  .contact h2{
    font-size:36px;
  }

  .contact .subtitle{
    margin-bottom:50px;
  }

  .contact::after,
  .contact-line,
  .contact-corner,
  .contact-vertical,
  .contact-ring{
    display:none;
  }
}
</style>

<section id="contact" class="contact premium-contact">

  <!-- Decorative Elements -->
  <div class="contact-dots">
    <span></span><span></span><span></span><span></span>
  </div>

  <div class="contact-ring"></div>
  <div class="contact-line"></div>
  <div class="contact-corner top-right"></div>
  <div class="contact-corner bottom-left"></div>
  <div class="contact-vertical">Get In Touch</div>

  <h2>Contact</h2>
  <p class="subtitle">
    We’re always ready to help you choose the perfect flowers
    for your special moments.
  </p>

  <div class="contact-grid">

    <div class="contact-card">
      <div class="contact-icon">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <h4>LOCATION</h4>
      <p>Jakarta, Indonesia</p>
    </div>

    <div class="contact-card">
      <div class="contact-icon">
        <i class="fa-brands fa-whatsapp"></i>
      </div>
      <h4>WHATSAPP</h4>
      <p>0812 3456 7890</p>
    </div>

    <div class="contact-card">
      <div class="contact-icon">
        <i class="fa-brands fa-instagram"></i>
      </div>
      <h4>INSTAGRAM</h4>
      <p>@ebflorist</p>
    </div>

  </div>

</section>
