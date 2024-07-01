


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>

<body>
    <header>
        <h3>Formulir Daftar Tunggu Pelanggan</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
        <p>
            <label for="Tanggal_Mohon">Tanggal Mohon:</label>
            <input type="date" id="Tanggal_Mohon" name="Tanggal_Mohon" />
        </p>
        <p>
            <label for="idpel">ID Pelanggan:</label>
            <input type="text" id="idpel" name="idpel" >
        </p>
        <p>
            <label for="NO_Agenda">No Agenda:</label>
            <input type="text" id="NO_Agenda" name="NO_Agenda">
        </p>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" >
        </p>       
        <p>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"></textarea>
        </p>
        <!-- <p>
            <label for="Telepon">Telepon:</label> <br>
            <input id="Telepon" name="Telepon" type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
        </p> -->
        <p>
            <label for="Jenis_Transaksi">Jenis Transaksi:</label>
            <select id="Jenis_Transaksi" name="Jenis_Transaksi">
                <option value="PASANG BARU">PASANG BARU</option>
                <option value="PERUBAHAN DAYA">PERUBAHAN DAYA</option>
                <option value="UBAH NAMA">UBAH NAMA</option>              
            </select>
        </p>
        <!-- <p>
            <label for="Tarif">Tarif:</label>
            <select id="Tarif" name="Tarif">
                <option value="B1T">B1T</option>       
                <option value="B2">B2</option>       
                <option value="B3">B3</option>       
                <option value="I2">I2</option>       
                <option value="P1T">P1T</option>       
                <option value="R1">R1</option>       
                <option value="R1M">R1M</option>       
                <option value="R1MT">R1MT</option>       
                <option value="R1T">R1T</option>       
                <option value="R2T">R2T</option>       
                <option value="S2">S2</option>       
                <option value="S2T">S2T</option>       
            </select>
        </p> -->
        <!-- <p>
            <label for="Daya">Daya:</label>
            <select id="Daya" name="Daya">
                <option value="450">450</option>
                <option value="900">900</option>
                <option value="1300">1300</option>              
                <option value="2200">2200</option>              
            </select>
        </p> -->
        <p>
            <label>Asal Mohon:</label>
            <label><input type="radio" name="AsalMohon" value="LOKET PLN"> LOKET PLN</label>
            <label><input type="radio" name="AsalMohon" value="PLN MOBILE"> PLN MOBILE</label>
        </p>
        <!-- <p>
            <label>Jenis Bayar:</label>
            <label><input type="radio" name="Jenisbayar" value="TUNAI"> TUNAI</label>
            <label><input type="radio" name="Jenisbayar" value="NON TUNAI"> NON TUNAI</label>
        </p> -->
        <p>
            <label for="status_Mohon">Status Mohon:</label>
            <select id="status_Mohon" name="status_Mohon">
                <option value="CETAK PK">CETAK PK</option>
                <option value="ENTRI PDL">ENTRI PDL</option>              
                <option value="LUNAS">LUNAS</option>  
            </select>
        </p>
        <!-- <p>
            <label for="Tanggal_PK">Tanggal PK:</label>
            <input type="date" id="Tanggal_PK" name="Tanggal_PK" />
        </p> -->
        <p>
            <label for="alasan">Alasan Kriteria:</label>
            <select id="alasan" name="alasan">
                <option value="">-- Pilih Alasan --</option>
                <option value="KONDISI JARINGAN EKSISTING">KONDISI JARINGAN EKSISTING</option>
                <option value="PERLU PEMBANGUNAN JTM S.D 3 GAWANG & TRAFO DISTRIBUSI">PERLU PEMBANGUNAN JTM S.D 3 GAWANG & TRAFO DISTRIBUSI</option>              
                <option value="PERLU PERLUASAN JTR">PERLU PERLUASAN JTR</option>  
                <option value="TANPA PERLUASAN">TANPA PERLUASAN</option>  
                <option value="TERMASUK PEMBANGUNAN JTM S.D 10 GAWANG & KONSTRUKSI GARDU TM">TERMASUK PEMBANGUNAN JTM S.D 10 GAWANG & KONSTRUKSI GARDU TM</option>  
                <option value="">BLANK</option>  
            </select>
        </p>
        <p>
            <label>Paket SLO:</label>
            <label><input type="radio" name="pketslo" value=""> Blank</label>
            <label><input type="radio" name="pketslo" value="NON SLO"> NON SLO</label>            
        </p>
        <p>
            <label for="plts">PLTS Atap:</label>
            <input type="text" id="plts" name="plts" placeholder="TIDAK">
        </p>
        <p>
            <input type="submit" value="SIMPAN" name="simpan" />
        </p>

        </fieldset>

    </form>

</body>
</html>
