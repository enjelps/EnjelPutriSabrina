<style type="text/css">
    body {
        background-color: #99c6f8;
        margin: 0px;
    }

    /* Gambar */
    img {
        width: 30px;
        margin-bottom: 10px;
    } img:hover {
        transform: scale(1.15);
    }

    /* Footer */
    footer{
        width: 100%;
        background: #81a5cf;
        bottom: 0px;
    } .jarak {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin: 0px 5px;
        padding: 10px 0px;
    } li {
        list-style: none;
        color: white;
    } .box{
        width: calc(100% / 5 - 10px);
    } .subbab{
        margin-bottom: 10px;
        font-size: 20px;
    }
</style>
<footer>
    <div class="jarak">
        <ul class="box">
            <li><img src="{{ 'img/logo.png' }}" alt="utm"></li>
            <li><b>Jurusan Teknik Informatika</b></li>
            <li><b>Universitas Trunojoyo Madura</b></li>
            <li>Jl. Raya Telang, Kecamatan Kamal, Bangkalan 69162 Indonesia</li>
            <li>Kampus Universitas Trunojoyo Madura</li>
        </ul>
        <ul class="box">
            <li class="subbab"><b>Contact</b></li>
            <li>Telp : 031-3011146</li>
            <li>Fax : 031-3011506</li>
            <li>E-mail : <a href="#">if.ft@trunojoyo.ac.id</a></li>
        </ul>
        <ul class="box">
            <li class="subbab"><b>Layanan</b></li>
            <li><a href="">Pembayaran UKT</a></li>
            <li><a href="">Pendaftaran KP</a></li>
            <li><a href="">Pendaftaran Wisuda</a></li>
            <li><a href="">Administrasi</a></li>
        </ul>
        <ul class="box">
            <li class="subbab"><b>Resource</b></li>
            <li><a href="">e-Journal</a></li>
            <li><a href="">Portal Tugas Akhir</a></li>
            <li><a href="">Website Resmi Kampus</a></li>
            <li><a href="">Download Administrasi</a></li>
        </ul>
    </div>
</footer>
