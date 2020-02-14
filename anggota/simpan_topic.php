<?php
include "config/koneksi.php"; //Memasukkan Koneksi Database

$gambar=$_FILES['files']['name'];
        //nama object  | ketentuan dasar

$simpan = mysql_query("INSERT INTO forum (id_forum,
										id_member,
										tgl,
										jam,
										judul,
										isi_topic,
										file)
                           values ('',	
                          '$_POST[id_member]',
                          '$_POST[tgl]',
						  '$_POST[jam]',
						  '$_POST[judul]',
						  '$_POST[isi_topic]',
						  '$gambar')");
move_uploaded_file($_FILES['file']['tmp_name'],"files/$gambar");				 											
if($simpan)
{
 echo "<script> location ='index.php?view=topic'; </script>";
}
else
{
  echo "Gagal.";
}
?>