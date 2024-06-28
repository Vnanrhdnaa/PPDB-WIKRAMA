<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

*{
    font-family: 'Poppins', sans-serif;
}

.showcase{
    background-image: url('assets/images/bg-opacity.png');
    height: 580px;
    background-repeat: no-repeat;
}

.container .nav-putih{
    border-radius: 50px;
    height: 80px;
    box-shadow: 0 0 10px 0;
    position: sticky;
    top: 30px;
}

.container .nav-putih  img{
    border-radius: 50px;
    margin-left: 40px;
    border-image:  10px;
}

.container .nav-putih a{
    font-size: 13px;
    color: black;
    text-decoration: none;
    margin-left: 30px;
    font-weight: 500;
}

.container .nav-putih a:hover {
  color: #FDD818;
  transition: 0.3s ;
}

.container .textBox h1{
    color: white;
    margin-top: 60px;
    font-size: 40px;
    line-height: 1.3em;
    font-weight: 600; 
}

.container .textBox p{
    margin-top: 20px;
    color: white;
    font-size: 16px;
    font-weight: 330;
}

.container .textBox p span{
    color: white;
    font-size: 16px;
    font-weight: bold;
}

.container .container-ppdb a{
    text-decoration: none;
    color: #343333;
    font-weight: bold;
    
}

.container .container-ppdb a:hover{
    color: white;
    transition: 0.2s ;
}

.container .container-ppdb {
    margin-top: 45px;
    width: 240px;
    height: 60px;
    border-radius: 3px;
    text-align: center;
    background-color: #FDD818;
    justify-content: center;
}

.main-container {
  display: inline-flex;
  width: 100%;
  text-align: center;
  background-color: white;
  margin-top: 65px;
  border-radius: 5px;
  box-shadow: 0 5px 20px 0;
}

.main-container div {
  width: 40%;
  height: 180px;    
}

.main-container div span{
    font-size: 18px;
    font-weight: 550;
    color: black;
} 


div p {
  margin-top: 47px;
  color: #7B7A83;
  font-size: 16px;
}

.text-major h2{
    margin-top: 50px;
    font-weight: 600;
    font-size: 40px;
    color: black;
}

footer {
    
    background-color: #333;
    color: white;
    text-align: center;
}

.card{
    margin-top: 20px;
    position: center;
}

.card-body p{
    margin-top: 15px;
    font-size: 14px;
    color:  #8B8C8C;
}

.card-body p span{
    font-size: 14px;
    font-weight: bold;
    color: #8B8C8C;
}

.card-body h4{
    color: #04235C;
    font-weight: 620;
    font-size: 20px;
}

.card-major{
    margin-top: 35px;
    background-color: white;
    border: 1px solid #bacdd8;
    padding: 8px;
    border-radius: 15px;
    width: 220px;
    text-align: center;
    display: inline-block;
    margin: 2%;
    justify-content: center;
}

.card-major img{
    width: 100%;
    border-radius: 15px;
    object-fit: cover;
}

.card-major h4{
    margin-top: 20px;
    font-size: 16px;
    color: #7B7A83;
    font-weight: 400;
}

.card-major h4 span{
    font-size: 22px;
    color: black;
    font-weight: 550;
}

.text-about h2{
    margin-top: 80px;
    font-weight: 450;
    font-size: 16px;
    color: #7B7A83;
    letter-spacing: .2rem;
}

.text-about h2::after{
    content: "";
    width: 120px;
    height: 1.5px;
    display: inline-block;
    background: #FDD818;
    margin: 4px 10px;
}

.text-about p{
    margin: 0px;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #2a2c39;
}

.long-about p{
    color: red;
}

.container-about {
    margin-top: 40px;
}



.text-contact h2{
    margin-top: 50px;
    font-weight: 600;
    font-size: 40px;
    color: black;
}


.container-contact {
  display: inline-flex;
  width: 100%;
  text-align: center;
  background-color: white;
}

.container-contact div {
  width: 40%;
  height: 100px;   
  margin-bottom: 40px; 
}

.container-contact div span{
    font-size: 18px;
    font-weight: 550;
    color: black;
} 

.card-about{
    margin-top: 35px;
    background-color: white;
    border: 1px solid #bacdd8;
    border-radius: 15px;
    width: 950px;
    text-align: center;
    margin-left: 85px;
}

.card-about img{
    width: 100%;
    border-radius: 15px 15px 0 0;
    float: center;
}

.card-about h4{
    margin-top: 20px;
    font-size: 16px;
    color: #7B7A83;
    font-weight: 400;
}

.title-about h4{
    text-align: center;
    font-size: 18px;
    font-weight: 500;
    margin-top: 30px;
}

.just-about {
    width: 45%;
    background-color: white;
    border: none;
    float: left;
}

.box-about{
    display: inline;
}

.auto-height {
    height: 50%;
}

.container-about p{
    display: inline;
}

.text-major h2{
    margin-top: 80px;
    font-weight: 450;
    font-size: 16px;
    color: #7B7A83;
    letter-spacing: .2rem;
}

.text-major h2::after{
    content: "";
    width: 120px;
    height: 1.5px;
    display: inline-block;
    background: #FDD818;
    margin: 4px 10px;
}

.text-major p{
    margin: 0px;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #2a2c39;
}

.text-contact h2{
    margin-top: 80px;
    font-weight: 450;
    font-size: 16px;
    color: #7B7A83;
    letter-spacing: .2rem;
    margin-left: 75px;
}


.text-contact h2::after{
    content: "";
    width: 120px;
    height: 1.5px;
    display: inline-block;
    background: #FDD818;
    margin: 4px 10px;
}

.text-contact p{
    margin: 0px;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #2a2c39;
    margin-left: 75px;
}

iframe{
    margin-left: 150px;
    margin-top: 0px;
    margin-bottom: 30px;
}

footer{
    text-align: center;
}

.container-footer {
    margin-bottom: 15px;
}

.icon-contact i{
    color: white;
    letter-spacing: none;
    text-align: center;
    
}

.icon-contact li{
    text-decoration: none;
    display: inline-block;
    float: center;
    font-size: 20px;
}

.container-about img{
    width: 75%;
    margin-left: 120px;
    margin-top: 30px;
}





</style>


<body>

<header class="showcase">
    <br>

<div class="container">

		<div class="nav-putih bg-white text-dark">
			<br/>
            <div class="text-center">
            <img src="assets/images/logo-wikrama.png" alt="" height="35px">
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#jurusan">Jurusan</a>
                <a href="#kontak">Hub Kami</a>
                <a href="/login">Login</a>
            </div>

		</div>

        <section id="beranda">
    
    <div class="textBox">
      <h1>PPDB TP 2023-2024 <br>SMK Wikrama Bogor</h1>
      <p>Ayo! Segera daftarkan dirimu ke SMK Wikrama dengan cara klik
        <span>PENDAFTARAN PPDB</span> di bawah ini! <br>
        <span>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</span>
      </p>
    </div>

    <div class="container-ppdb">
    <br>
        <a class="mt-20" href="/register">PENDAFTARAN PPDB</a> <br>
    </div>
    


    
    <div class="main-container">
  <div><p><span>MOTTO</span><br>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p></div>
  <div><p><span>AFIRMASI</span><br>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p></div>
  <div><p><span>ATITUDE</span><br>Aku ada lingkunganku <br>bahagia</p></div>
    </div>
    </section>

    <section id="tentang">

    <div class="text-about"> 
         <h2>TENTANG WIKRAMA </h2>
         <p>SEJARAH WIKRAMA</p>
    </div>

    <div class="container-about">
        <div>
        <p>SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah 
        naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang 
        pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa</p>
        <p>SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah 
        naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang 
        pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa</p>
        </div>
        <img src="assets/img/layoutwk.jpg" alt="">
        <br>
        
    </div>

</section>
    

    <section id="jurusan">

        <div class="text-major"> 
         <h2>KOMPETENSI KEAHLIAN </h2>
         <p>7 JURUSAN</p>
        </div>

    

        <div class="card-major">
            <img src="assets/img/pplg.jpg" alt="">
            <h4><span>PPLG</span><br>Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/dkv.jpg" alt="">
            <h4><span>DKV</span><br>Periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran, dll.</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/tkj.jpg" alt="">
            <h4><span>TJKT</span><br>Sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik Certified Network Associate).</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/mplb.jpg" alt="">
            <h4><span>MPLB</span><br>Juara 2 lomba keterampilan siswa bidang sekretaris tingkat provinsi-2016, Juara 1 olimpiade sekretaris tingkat nasional-2017</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/kln.jpg" alt="">
            <h4><span>KLN</span><br>Mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat.</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/htl.jpg" alt="">
            <h4><span>HTL</span><br>Siswa Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</h4>
        </div>
        <div class="card-major">
            <img src="assets/img/pmn.jpg" alt="">
            <h4><span>PMN</span><br>Siswa siswi lulusan program keahlian pemasaran ini diharuskan mampu membuat foto produk, desain, copy writing, dll.</h4>
        </div>
        
        
        
        
</div>
    </section>

    <section id="kontak">

   

    <div class="text-contact"> 
         <h2>HUBUNGI KAMI </h2>
         <p>KONTAK</p>
    </div>

    
    <div class="container-contact">
    
    
 
  <div><p><span>Email</span><br>prohumasi@smkwikrama.sch.id</p></div>
  <div><p><span>Alamat</span><br>Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur</p></div>
  <div><p><span>Kontak</span><br>(0251) 8242411</p></div> <br>
  
</div>
    <div class="container-contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0133855478775!2d106.84164251424399!3d-6.6452586951948875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sWikrama%20Bogor%20Vocational%20School!5e0!3m2!1sen!2sid!4v1641354540673!5m2!1sen!2sid" 
            width="75%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
	</div>
            
    </section>

    <footer>
        <br>
        <div class="container-footer">

        <div class="icon-contact">
        <small>Copyright &copy; 2021 - Vinna Nurhadina. All Rights Reserved</small>
            <ul>
                <li><a href="https://www.instagram.com/smkwikrama/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCyhEUzlXbXet57qFnDfdWuw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://twitter.com/smkwikrama" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://web.facebook.com/smkwikrama/" target="_blank"><i class="fab fa-facebook-square"></i></a></li> 
            </ul>
  </div>
            
           
            
        </div>
    </footer>

   
  




</body>
</html>