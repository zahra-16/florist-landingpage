<?php
// categories.php
?>

<style>
/* ================= CATEGORIES PREMIUM ================= */

.categories{
  padding:120px 0;
  background:#020f02;
  font-family:'Inter', sans-serif;
  position:relative;
  overflow:hidden;
}

/* Decorative circle */
.categories::after{
  content:"";
  position:absolute;
  width:420px;
  height:420px;
  border:1px solid rgba(255,255,255,.06);
  border-radius:50%;
  right:-180px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
}

/* ================= CONTAINER ================= */

.categories .container{
  width:90%;
  max-width:1200px;
  margin:auto;
  position:relative;
  z-index:2;
}

/* ================= TITLE ================= */

.mini-title{
  font-size:11px;
  letter-spacing:4px;
  color:#c3a86b;
  margin-bottom:34px;
  font-weight:400;
}

/* ================= GRID ================= */

.category-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
  gap:26px;
}

/* ================= CATEGORY CARD ================= */

.category-btn{
  position:relative;
  height:150px;
  border-radius:18px;
  overflow:hidden;
  cursor:pointer;
  box-shadow:0 18px 38px rgba(0,0,0,.45);
  transition:.45s ease;
}

/* soft glow */
.category-btn::before{
  content:"";
  position:absolute;
  inset:-25px;
  background:radial-gradient(circle at center, rgba(195,168,107,.25), transparent 70%);
  opacity:0;
  transition:.45s ease;
  z-index:0;
}

.category-btn img{
  width:100%;
  height:100%;
  object-fit:cover;
  transition:.6s ease;
}

/* dark overlay */
.category-btn::after{
  content:"";
  position:absolute;
  inset:0;
  background:rgba(0,0,0,.45);
  transition:.45s ease;
  z-index:1;
}

/* ================= TEXT ================= */

.category-btn span{
  position:absolute;
  inset:0;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:11px;
  letter-spacing:3px;
  color:#f5f5f5;
  border:1px solid rgba(255,255,255,.35);
  margin:16px;
  z-index:2;
  transition:.45s ease;
  text-transform:uppercase;
}

/* ================= HOVER ================= */

.category-btn:hover{
  transform:translateY(-8px);
}

.category-btn:hover img{
  transform:scale(1.1);
}

.category-btn:hover::after{
  background:rgba(0,0,0,.25);
}

.category-btn:hover::before{
  opacity:1;
}

.category-btn:hover span{
  border-color:#c3a86b;
  color:#c3a86b;
}

/* ================= DECORATIVE DOTS ================= */

.category-dots{
  position:absolute;
  inset:0;
  z-index:1;
  pointer-events:none;
}

.category-dots span{
  position:absolute;
  width:6px;
  height:6px;
  background:rgba(195,168,107,.45);
  border-radius:50%;
  animation:floatDots 6s ease-in-out infinite;
}

/* sparkle */
.category-dots span::after{
  content:"";
  position:absolute;
  inset:-6px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(255,255,255,.5), transparent);
  opacity:.6;
}

.category-dots span:nth-child(1){
  top:35%;
  left:18%;
}

.category-dots span:nth-child(2){
  top:60%;
  left:40%;
  animation-delay:1.5s;
}

.category-dots span:nth-child(3){
  top:45%;
  right:22%;
  animation-delay:3s;
}

/* ================= GOLD LINE ================= */

.category-line{
  position:absolute;
  width:180px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-20deg);
  bottom:90px;
  left:120px;
  z-index:1;
}

/* ================= VERTICAL TEXT ================= */

.category-vertical{
  position:absolute;
  left:30px;
  top:50%;
  transform:translateY(-50%) rotate(-90deg);
  font-size:12px;
  letter-spacing:6px;
  text-transform:uppercase;
  color:rgba(195,168,107,.6);
  z-index:1;
}

/* ================= GOLD CORNER ================= */

.category-corner{
  position:absolute;
  width:90px;
  height:90px;
  border:1px solid rgba(195,168,107,.6);
  z-index:1;
}

.category-corner.top-left{
  top:60px;
  left:60px;
  border-right:none;
  border-bottom:none;
}

.category-corner.bottom-right{
  bottom:60px;
  right:60px;
  border-left:none;
  border-top:none;
}

/* ================= ANIMATION ================= */

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-12px); opacity:.9; }
}

/* ================= MOBILE ================= */

@media(max-width:768px){
  .categories{
    padding:100px 0;
  }

  .category-btn{
    height:120px;
  }

  .categories::after,
  .category-line,
  .category-vertical,
  .category-corner{
    display:none;
  }
}
</style>

<section id="categories" class="categories premium-categories">

  <!-- Decorative Elements -->
  <div class="category-dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="category-line"></div>
  <div class="category-vertical">Our Collection</div>
  <div class="category-corner top-left"></div>
  <div class="category-corner bottom-right"></div>

  <div class="container">

    <p class="mini-title">CATEGORIES</p>

    <div class="category-grid">

      <a href="#" class="category-btn">
        <img src="assets/images/happy birthday.jpg" alt="Bunga Ulang Tahun">
        <span>BUNGA ULANG TAHUN</span>
      </a>

      <a href="#" class="category-btn">
        <img src="assets/images/download (6).jpg" alt="Bunga Meja">
        <span>BUNGA MEJA</span>
      </a>

      <a href="#" class="category-btn">
        <img src="assets/images/download (7).jpg" alt="Bunga Wedding">
        <span>BUNGA WEDDING</span>
      </a>

      <a href="#" class="category-btn">
        <img src="assets/images/Ordan-burdan.jpg" alt="Bunga Duka Cita">
        <span>BUNGA DUKA CITA</span>
      </a>

    </div>

  </div>
</section>
