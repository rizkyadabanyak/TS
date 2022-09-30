### SOAL 1 SQL

- buatlah query untuk menyajikan laporan 10 terbanyak setiap bulannya per poli / klinik


```sql
SELECT master_unit.unit_nama AS poli, CONCAT(master_diagnosa.diagnosa_kode, '  ', master_diagnosa.diagnosa_name)  AS Diagnosa ,COUNT(*) AS jumlah FROM diagnosa_pasien
INNER JOIN master_diagnosa ON diagnosa_pasien.m_diagnosa_id = master_diagnosa.diagnosa_id
INNER JOIN kunjungan_pasien ON diagnosa_pasien.kunjungan_id = kunjungan_pasien.pendaftaran_id
INNER JOIN master_unit ON kunjungan_pasien.m_unit_id = master_unit.unit_id
GROUP BY poli,Diagnosa,diagnosa_pasien.m_diagnosa_id
ORDER BY jumlah DESC,master_unit.unit_nama ASC
LIMIT 10
```

![Screenshot 2022-10-01 061949](https://user-images.githubusercontent.com/37862470/193368490-ea6b3f64-8f96-4a27-ba21-2c497ad8493e.png)


<br>

### SOAL 2 SQL

- buatlah query untuk menyajikan laporan 10 terbanyak setiap bulannya berdasarkan demograsi kota pasien pendaftar

```sql
SELECT master_pasien.pasien_kota AS poli, CONCAT(master_diagnosa.diagnosa_kode, '  ', master_diagnosa.diagnosa_name)  AS Diagnosa ,COUNT(*) AS jumlah FROM diagnosa_pasien
INNER JOIN master_diagnosa ON diagnosa_pasien.m_diagnosa_id = master_diagnosa.diagnosa_id
INNER JOIN kunjungan_pasien ON diagnosa_pasien.kunjungan_id = kunjungan_pasien.pendaftaran_id
INNER JOIN master_pasien ON kunjungan_pasien.m_pasien_id = master_pasien.pasien_id
GROUP BY poli,Diagnosa,diagnosa_pasien.m_diagnosa_id
ORDER BY jumlah DESC,master_pasien.pasien_kota ASC
LIMIT 10
```

![Screenshot 2022-10-01 061849](https://user-images.githubusercontent.com/37862470/193368437-abca4e19-3af9-4587-b935-f452ebbee30c.png)

<br>

### SOAL 3 SQL

- buatlah query untuk menyajikan laporan pendaftaran poli seperti berikut

```sql
SELECT kunjungan_id AS NO,
master_unit.unit_nama AS poli,
master_pasien.pasien_nama AS nama_pasien,
master_pasien.pasien_kota AS alamat, 
master_pembayaran.bayar_nama AS cara_bayar,
GROUP_CONCAT(CONCAT(diagnosapasien_jenis, '|', master_diagnosa.diagnosa_name)  SEPARATOR ', ') AS diagnosa,
master_dokter.pegawai_nama AS dokter,
kunjungan_pasien.daftar_tanggal AS tanggal_masuk,
kunjungan_pasien.pulang_tanggal AS tanggal_pulang
FROM diagnosa_pasien 
INNER JOIN master_diagnosa ON diagnosa_pasien.m_diagnosa_id = master_diagnosa.diagnosa_id
INNER JOIN kunjungan_pasien ON diagnosa_pasien.kunjungan_id = kunjungan_pasien.pendaftaran_id
INNER JOIN master_unit ON kunjungan_pasien.m_unit_id = master_unit.unit_id
INNER JOIN master_pasien ON kunjungan_pasien.m_pasien_id = master_pasien.pasien_id
INNER JOIN master_pembayaran ON kunjungan_pasien.m_bayar_id = master_pembayaran.bayar_id
INNER JOIN master_dokter ON kunjungan_pasien.m_dokter_id = master_dokter.pegawai_id
GROUP BY NO,poli,nama_pasien,alamat
ORDER BY tanggal_masuk DESC,poli ASC,cara_bayar ASC
```

![Screenshot 2022-10-01 061729](https://user-images.githubusercontent.com/37862470/193368367-7de2c78d-305d-4197-b409-c1df3b93deb5.png)


<br><br>
<p align="center">
    <b>PRINT SCHEDULE</b>
</p>


![print](https://user-images.githubusercontent.com/37862470/193366489-8b897bcc-000e-4fa7-aaed-cb392a571e0b.png)

<br>
<br>
<br>
<p align="center">
    <b>
    CRUD EMPLOYEE
    </b>
</p>

![Screenshot 2022-10-01 055409](https://user-images.githubusercontent.com/37862470/193366987-f5413933-4c76-403d-97ee-e4fd55db83ce.png)

<br>
<br>
<br>
<p align="center">
    <b>
    CRUD POLI
    </b>
</p>

![Screenshot 2022-10-01 055358](https://user-images.githubusercontent.com/37862470/193367252-6a785f22-d342-4bc7-a255-f13dbc38c8ac.png)

<br>
<br>
<br>
<p align="center">
    <b>
    SET EMPLOYEE IN POLI
    </b>
</p>

![Screenshot 2022-10-01 055424](https://user-images.githubusercontent.com/37862470/193367387-0dff4908-d549-4249-a688-2cf0d5e087ef.png)

<br>
<br>
<br>
<p align="center">
    <b>
    SET SCHEDULE EMPLOYEE
    </b>
</p>

![Screenshot 2022-10-01 055434](https://user-images.githubusercontent.com/37862470/193367451-60632d45-3c64-4eed-a9cc-f835c009eee9.png)



