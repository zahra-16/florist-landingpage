<?php
// contact.php
?>

<!-- ================= FONT AWESOME ================= -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>
/* ================= CONTACT PREMIUM ================= */

.contact{
  padding:140px 0;
  text-align:center;
  background:#250902;
  position:relative;
  overflow:hidden;
}

/* Decorative circle */
.contact::after{
  content:"";
  position:absolute;
  width:380px;
  height:380px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  left:-160px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
}

/* Top gold line */
.contact::before{
  content:"";
  position:absolute;
  width:90px;
  height:2px;
  background:#c3a86b;
  top:70px;
  left:50%;
  transform:translateX(-50%);
  z-index:1;
}

/* ================= TITLE ================= */

.contact h2{
  font-family:"Playfair Display",serif;
  font-size:46px;
  letter-spacing:2px;
  margin-bottom:14px;
  font-weight:400;
  color:#f5f1e8;
  position:relative;
  z-index:2;
}

.contact .subtitle{
  font-size:14px;
  letter-spacing:2px;
  color:#e6dccf;
  max-width:520px;
  margin:0 auto 70px;
  line-height:1.7;
  position:relative;
  z-index:2;
}

/* ================= GRID ================= */

.contact-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:30px;
  width:90%;
  max-width:900px;
  margin:auto;
  position:relative;
  z-index:2;
}

/* ================= CARD ================= */

.contact-card{
  background:rgba(255,255,255,.04);
  border:1px solid rgba(255,255,255,.12);
  border-radius:24px;
  padding:42px 26px;
  transition:.45s ease;
  backdrop-filter:blur(8px);
  position:relative;
  overflow:hidden;
}

/* soft glow hover */
.contact-card::before{
  content:"";
  position:absolute;
  inset:-30px;
  background:radial-gradient(circle at center, rgba(195,168,107,.25), transparent 70%);
  opacity:0;
  transition:.45s ease;
}

.contact-card:hover::before{
  opacity:1;
}

.contact-card:hover{
  transform:translateY(-12px);
  border-color:#c3a86b;
  background:rgba(255,255,255,.07);
}

/* ================= ICON ================= */

.contact-icon{
  font-size:28px;
  color:#c3a86b;
  margin-bottom:18px;
  position:relative;
  z-index:2;
}

/* ================= TEXT ================= */

.contact-card h4{
  font-size:12px;
  letter-spacing:3px;
  color:#c3a86b;
  margin-bottom:12px;
  position:relative;
  z-index:2;
}

.contact-card p{
  font-size:14px;
  letter-spacing:1.5px;
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
  width:6px;
  height:6px;
  background:rgba(195,168,107,.45);
  border-radius:50%;
  animation:floatDots 6s ease-in-out infinite;
}

/* sparkle */
.contact-dots span::after{
  content:"";
  position:absolute;
  inset:-6px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(255,255,255,.5), transparent);
  opacity:.6;
}

.contact-dots span:nth-child(1){
  top:30%;
  left:18%;
}

.contact-dots span:nth-child(2){
  top:65%;
  left:42%;
  animation-delay:1.5s;
}

.contact-dots span:nth-child(3){
  top:45%;
  right:22%;
  animation-delay:3s;
}

/* ================= DIAGONAL GOLD LINE ================= */

.contact-line{
  position:absolute;
  width:180px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:100px;
  right:120px;
  z-index:1;
}

/* ================= GOLD CORNER FRAME ================= */

.contact-corner{
  position:absolute;
  width:90px;
  height:90px;
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
  color:rgba(195,168,107,.6);
  z-index:1;
}

/* ================= ANIMATION ================= */

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-12px); opacity:.9; }
}

/* ================= MOBILE ================= */

@media(max-width:768px){
  .contact{
    padding:110px 0;
  }

  .contact h2{
    font-size:34px;
  }

  .contact .subtitle{
    margin-bottom:45px;
  }

  .contact::after,
  .contact-line,
  .contact-corner,
  .contact-vertical{
    display:none;
  }
}
</style>

<section id="contact" class="contact premium-contact">

  <!-- Decorative Elements -->
  <div class="contact-dots">
    <span></span>
    <span></span>
    <span></span>
  </div>

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
