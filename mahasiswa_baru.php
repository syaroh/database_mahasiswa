<h3> TAMBAH DATA MAHASISWA BARU </h3>
<form action="" method="post">
    <table>
        <tr>
            <td width="120" > NAMA </td>
            <td> <input type="text" name="NAMA"> </td>
        </tr>
        <tr>
            <td>NPM</td>
            <td> <input type="integer" name="NPM"> </td>
        </tr>
        <tr>
            <td> ALAMAT </td>
            <td> <input type="text" name="ALAMAT"> </td>
        </tr>
        <tr>
            <td> PRODI </td>
            <td> <input type="text" name="PRODI"> </td>
        </tr>
        <tr>
            <td> NO_HP </td>
            <td> <input type="integer" name="NO_HP"> </td>
        </tr>
        <tr>
        <td></td>
        <td> <input type="submit" name="proses" value="Simpan"> </td>
        </tr>
        
    </table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into mahasiswa_baru set
    NAMA ='$_POST[NAMA]',
    NPM ='$_POST[NPM]',
    ALAMAT ='$_POST[ALAMAT]',
    PRODI ='$_POST[PRODI]',
    NO_HP ='$_POST[NO_HP]'");

    echo "Data Mahasiswa baru telah tersimpan";
}