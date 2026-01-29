<!-- ================= PRODUCTS ================= -->
<style>
/* ================= PRODUCTS PREMIUM ================= */

.products{
  padding:120px 0;
  background:#020f02;
  font-family:'Inter', sans-serif;
  scroll-margin-top:80px;
  position:relative;
  overflow:hidden;
}

/* Decorative circle (lebih ringan) */
.products::after{
  content:"";
  position:absolute;
  width:360px;
  height:360px;
  border:1px solid rgba(255,255,255,.05);
  border-radius:50%;
  left:-160px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
}

/* ================= CONTAINER ================= */

.products .container{
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
  margin-bottom:26px;
  font-weight:400;
}

/* ================= GRID ================= */

.product-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
  gap:26px;
}

/* ================= PRODUCT CARD ================= */

.product-card{
  position:relative;
  display:block;
  height:300px;
  border-radius:18px;
  overflow:hidden;
  cursor:pointer;

  box-shadow:0 14px 30px rgba(0,0,0,.45);
  transition:transform .35s ease, box-shadow .35s ease;
  will-change:transform;
}

/* glow DISEDERHANAKAN */
.product-card::before{
  content:"";
  position:absolute;
  inset:0;
  background:radial-gradient(circle at center, rgba(195,168,107,.18), transparent 65%);
  opacity:0;
  transition:opacity .35s ease;
  z-index:0;
}

.product-card img{
  width:100%;
  height:100%;
  object-fit:cover;
  transition:transform .45s ease;
  will-change:transform;
}

/* overlay */
.product-card::after{
  content:"";
  position:absolute;
  inset:0;
  background:rgba(0,0,0,.45);
  transition:background .35s ease;
  z-index:1;
}

/* ================= CONTENT ================= */

.product-content{
  position:absolute;
  inset:0;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  gap:10px;
  z-index:2;
  text-align:center;
  color:#fff;
}

.product-content h4{
  font-size:12px;
  letter-spacing:3px;
  font-weight:400;
}

.product-content span{
  font-size:11px;
  letter-spacing:1.5px;
  opacity:.85;
}

.product-content .btn-view{
  margin-top:6px;
  font-size:9px;
  letter-spacing:2px;
  padding:7px 22px;
  border-radius:30px;
  border:1px solid rgba(255,255,255,.6);
  color:#fff;
  text-decoration:none;
  transition:.3s ease;
}

/* ================= HOVER (DESKTOP SAJA) ================= */

@media (hover:hover){
  .product-card:hover{
    transform:translateY(-8px);
    box-shadow:0 22px 40px rgba(0,0,0,.55);
  }

  .product-card:hover img{
    transform:scale(1.08);
  }

  .product-card:hover::after{
    background:rgba(0,0,0,.25);
  }

  .product-card:hover::before{
    opacity:1;
  }

  .product-card:hover .btn-view{
    border-color:#c3a86b;
    color:#c3a86b;
  }
}

/* ================= DECORATIVE DOTS (LEBIH RINGAN) ================= */

.product-dots{
  position:absolute;
  inset:0;
  z-index:1;
  pointer-events:none;
}

.product-dots span{
  position:absolute;
  width:5px;
  height:5px;
  background:rgba(195,168,107,.45);
  border-radius:50%;
  animation:floatDots 8s ease-in-out infinite;
  will-change:transform;
}

.product-dots span:nth-child(1){
  top:30%;
  left:20%;
}

.product-dots span:nth-child(2){
  top:60%;
  left:42%;
  animation-delay:2s;
}

.product-dots span:nth-child(3){
  top:45%;
  right:22%;
  animation-delay:4s;
}

/* ================= GOLD LINE ================= */

.product-line{
  position:absolute;
  width:160px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-20deg);
  bottom:90px;
  right:120px;
  z-index:1;
}

/* ================= VERTICAL TEXT ================= */

.product-vertical{
  position:absolute;
  right:30px;
  top:50%;
  transform:translateY(-50%) rotate(90deg);
  font-size:11px;
  letter-spacing:6px;
  text-transform:uppercase;
  color:rgba(195,168,107,.6);
  z-index:1;
}

/* ================= ANIMATION ================= */

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-8px); opacity:.8; }
}

/* ================= MOBILE OPTIMIZATION ================= */

@media(max-width:768px){
  .products{
    padding:90px 0;
  }

  .product-card{
    height:230px;
  }

  /* MATIKAN DEKOR BERAT */
  .products::after,
  .product-line,
  .product-vertical,
  .product-dots{
    display:none;
  }
}
</style>

<section id="products" class="products premium-products">

  <div class="product-dots">
    <span></span><span></span><span></span>
  </div>
  <div class="product-line"></div>
  <div class="product-vertical">Our Products</div>

  <div class="container">

    <p class="mini-title">PRODUCTS</p>

    <div class="product-grid">

      <a href="#" class="product-card">
        <img src="assets/images/arrangement-with-beautiful-gerbera-vase.jpg" loading="lazy">
        <div class="product-content">
          <h4>BEST SELLER</h4>
          <span>Best Seller Bouquet</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>

      <a href="#" class="product-card">
        <img src="assets/images/flowers-vase-with-red-background.jpg" loading="lazy">
        <div class="product-content">
          <h4>PROMO</h4>
          <span>Promo Flowers</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>

      <a href="#" class="product-card">
        <img src="assets/images/beautiful-flowers-with-red-background.jpg" loading="lazy">
        <div class="product-content">
          <h4>SPECIAL</h4>
          <span>Limited Edition</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>

      <a href="#" class="product-card">
        <img src="assets/images/arrangement-with-beautiful-gerbera-water-vase.jpg" loading="lazy">
        <div class="product-content">
          <h4>LUXURY</h4>
          <span>Exclusive</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>

    </div>

    <br><br>

    <p class="mini-title">MINI COLLECTION</p>

    <div class="product-grid">

      <a href="#" class="product-card">
        <img src="assets/images/sunlit-tulips-white-vase (1).jpg" loading="lazy">
        <div class="product-content">
          <h4>MINI PINK</h4>
          <span>Rp 350.000</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>

      <a href="#" class="product-card">
        <img src="assets/images/delicate-rose-bouquet.jpg" loading="lazy">
        <div class="product-content">
          <h4>WHITE</h4>
          <span>Rp 420.000</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>

      <a href="#" class="product-card">
        <img src="assets/images/blossoms-colorful-backdrops (2).jpg" loading="lazy">
        <div class="product-content">
          <h4>RED ROSE</h4>
          <span>Rp 390.000</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>

    </div>

  </div>
</section>
