<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Menu - The Legend Cafe & Resto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    margin:0;
    background:#f9f9f9;
    color:#333;
}
header{
    background:#111;
    color:#fff;
    padding:32px;
    text-align:center;
}
.container{padding:40px 6%;}

/* ===== TABS ===== */
.tabs{
    display:flex;
    justify-content:space-around;
    margin-bottom:24px;
}
.tab{
    cursor:pointer;
    font-weight:600;
    padding-bottom:6px;
    border-bottom:3px solid transparent;
}
.tab.active{
    border-color:#c59d5f;
    color:#c59d5f;
}

/* ===== SUB TABS ===== */
.sub-tabs{
    display:flex;
    justify-content:space-around;
    margin-bottom:20px;
}
.sub-tab{
    cursor:pointer;
    font-size:14px;
    padding-bottom:4px;
    border-bottom:2px solid transparent;
}
.sub-tab.active{
    border-color:#c59d5f;
    color:#c59d5f;
}

/* ===== MENU GRID ===== */
.menu-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill, minmax(280px, 1fr));
    gap:24px;
}
.menu-list{
    background:#fff;
    border-radius:14px;
    padding:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}
.menu-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:8px 0;
    border-bottom:1px dashed #ddd;
    font-size:14px;
}
.menu-item:last-child{border-bottom:none;}
.price{
    font-weight:600;
    color:#c59d5f;
}

/* ===== HIDE ===== */
.hidden{display:none;}

@media(max-width:600px){
    .tabs,.sub-tabs{
        font-size:14px;
    }
}
</style>
</head>

<body>

<header>
    <h1>The Legend Cafe & Resto</h1>
    <p>Menu Lengkap Food & Beverage</p>
</header>

<div class="container">

<div class="tabs">
    <div class="tab active" onclick="showMain('food')">🍽 Food</div>
    <div class="tab" onclick="showMain('beverage')">☕ Beverage</div>
</div>

<!-- ================= FOOD ================= -->
<div id="food" class="main-section">

<div class="sub-tabs">
    <div class="sub-tab active" onclick="showSub('food','main')">Main Course</div>
    <div class="sub-tab" onclick="showSub('food','snack')">Cemilan</div>
</div>

<!-- MAIN COURSE -->
<div id="food-main" class="menu-grid">
<div class="menu-list">

<div class="menu-item"><span>Yamin Manis</span><span class="price">18k</span></div>
<div class="menu-item"><span>Yamin Asin</span><span class="price">18k</span></div>
<div class="menu-item"><span>Mie Bakso Kuah</span><span class="price">18k</span></div>
<div class="menu-item"><span>Mie Bakso Kuah Pangsit</span><span class="price">22k</span></div>

<div class="menu-item"><span>Mie Goreng Biasa</span><span class="price">26k</span></div>
<div class="menu-item"><span>Mie Goreng Spesial</span><span class="price">30k</span></div>
<div class="menu-item"><span>Mie Rebus Biasa</span><span class="price">26k</span></div>
<div class="menu-item"><span>Mie Rebus Spesial</span><span class="price">30k</span></div>

<div class="menu-item"><span>Nasi Goreng Biasa</span><span class="price">25k</span></div>
<div class="menu-item"><span>Nasi Goreng Cikur</span><span class="price">25k</span></div>
<div class="menu-item"><span>Nasi Goreng Katsu</span><span class="price">30k</span></div>
<div class="menu-item"><span>Nasi Goreng Kunyit</span><span class="price">25k</span></div>
<div class="menu-item"><span>Nasi Goreng Spesial</span><span class="price">30k</span></div>

<div class="menu-item"><span>Capcay Goreng / Kuah</span><span class="price">32,5k</span></div>
<div class="menu-item"><span>Chicken Katsu</span><span class="price">30k</span></div>
<div class="menu-item"><span>Chicken Steak</span><span class="price">32,5k</span></div>
<div class="menu-item"><span>Chicken Teriyaki</span><span class="price">32,5k</span></div>

<div class="menu-item"><span>Iga Bakar</span><span class="price">30k</span></div>
<div class="menu-item"><span>Sop Iga</span><span class="price">28k</span></div>

<div class="menu-item"><span>Indomie Polos</span><span class="price">8k</span></div>
<div class="menu-item"><span>Indomie Sosis</span><span class="price">12k</span></div>
<div class="menu-item"><span>Indomie Telor</span><span class="price">15k</span></div>
<div class="menu-item"><span>Indomie Keju</span><span class="price">10k</span></div>
<div class="menu-item"><span>Indomie Keju Sosis</span><span class="price">15k</span></div>
<div class="menu-item"><span>Indomie Keju Sosis Telor</span><span class="price">18k</span></div>

</div>
</div>

<!-- SNACK -->
<div id="food-snack" class="menu-grid hidden">
<div class="menu-list">

<div class="menu-item"><span>Omlet</span><span class="price">10k</span></div>
<div class="menu-item"><span>Omlet Cheese</span><span class="price">12k</span></div>
<div class="menu-item"><span>Omlet Sosis</span><span class="price">12k</span></div>
<div class="menu-item"><span>Omlet Sosis Cheese</span><span class="price">15k</span></div>

<div class="menu-item"><span>Bala-bala Legend</span><span class="price">8k</span></div>
<div class="menu-item"><span>Risol Mayo</span><span class="price">10k</span></div>
<div class="menu-item"><span>Risol Ayam</span><span class="price">10k</span></div>
<div class="menu-item"><span>Cireng Legend</span><span class="price">8k</span></div>

<div class="menu-item"><span>Kentang Goreng</span><span class="price">12k</span></div>
<div class="menu-item"><span>Kentang Sosis</span><span class="price">15k</span></div>

<div class="menu-item"><span>Pisang Bakar Cokelat</span><span class="price">22k</span></div>
<div class="menu-item"><span>Pisang Bakar Keju</span><span class="price">22k</span></div>
<div class="menu-item"><span>Pisang Bakar Cokelat Keju</span><span class="price">25k</span></div>

<div class="menu-item"><span>Roti Bakar Cokelat / Keju</span><span class="price">18k</span></div>
<div class="menu-item"><span>Roti Bakar Cokelat Keju</span><span class="price">20k</span></div>
<div class="menu-item"><span>Donat (All Varian)</span><span class="price">6k</span></div>

</div>
</div>
</div>

<!-- ================= BEVERAGE ================= -->
<div id="beverage" class="main-section hidden">

<div class="sub-tabs">
    <div class="sub-tab active" onclick="showSub('bev','coffee')">Coffee</div>
    <div class="sub-tab" onclick="showSub('bev','non')">Non Coffee</div>
</div>

<div id="bev-coffee" class="menu-grid">
<div class="menu-list">
<div class="menu-item"><span>Espresso</span><span class="price">—</span></div>
<div class="menu-item"><span>Americano</span><span class="price">—</span></div>
<div class="menu-item"><span>Cappuccino</span><span class="price">—</span></div>
<div class="menu-item"><span>Cafe Latte</span><span class="price">—</span></div>
<div class="menu-item"><span>Choco Latte</span><span class="price">15k</span></div>
</div>
</div>

<div id="bev-non" class="menu-grid hidden">
<div class="menu-list">

<div class="menu-item"><span>Milkshake (Mango / Strawberry / Vanilla)</span><span class="price">15k</span></div>
<div class="menu-item"><span>Mix Blend Caramel</span><span class="price">16k</span></div>
<div class="menu-item"><span>Oreo & Cream</span><span class="price">16k</span></div>

<div class="menu-item"><span>Juice (Mangga, Jeruk, Strawberry, Naga, Melon)</span><span class="price">12k</span></div>
<div class="menu-item"><span>Juice Tomat / Wortel</span><span class="price">10k</span></div>

<div class="menu-item"><span>Mojito</span><span class="price">15k</span></div>
<div class="menu-item"><span>Orange / Lemon Squash</span><span class="price">15k</span></div>
<div class="menu-item"><span>Soda Susu</span><span class="price">12k</span></div>

<div class="menu-item"><span>Lemon Tea</span><span class="price">10k</span></div>
<div class="menu-item"><span>Lychee Tea</span><span class="price">12k</span></div>

</div>
</div>
</div>

</div>

<script>
function showMain(type){
    document.querySelectorAll('.main-section').forEach(e=>e.classList.add('hidden'));
    document.getElementById(type).classList.remove('hidden');
    document.querySelectorAll('.tab').forEach(e=>e.classList.remove('active'));
    event.target.classList.add('active');
}
function showSub(group,type){
    if(group==='food'){
        ['main','snack'].forEach(i=>document.getElementById(`food-${i}`).classList.add('hidden'));
        document.getElementById(`food-${type}`).classList.remove('hidden');
    }else{
        ['coffee','non'].forEach(i=>document.getElementById(`bev-${i}`).classList.add('hidden'));
        document.getElementById(`bev-${type}`).classList.remove('hidden');
    }
    event.target.parentElement.querySelectorAll('.sub-tab').forEach(e=>e.classList.remove('active'));
    event.target.classList.add('active');
}
</script>

</body>
</html>
