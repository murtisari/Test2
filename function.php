<?php

function tunjuk($table){
		$query = "	SELECT * FROM ".$table;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function insertData($table, $parameter1, $parameter2){
		$query = "INSERT INTO ".$table." ".$parameter1." VALUES ".$parameter2;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function searchData($table, $kat, $val){
		$query = "	SELECT * from ".$table." WHERE ".$kat." LIKE '%".$val."%'";
		$hasil = mysql_query ($query);
		return $hasil;
	}

function youtube($url){
	$link=str_replace('http://www.youtube.com/watch?v=', '', $url);
	$link=str_replace('https://www.youtube.com/watch?v=', '', $link);
	$data='<object width="425" height="350" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
	<param name="src" value="http://www.youtube.com/v/'.$link.'" />
	</object>';
	return $data;
}

function where($table, $where){
		$query = "	SELECT * FROM ".$table." where ".$where;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function tunjukbyid($table, $kolom, $id){
		$query = "	SELECT * FROM ".$table." where ".$kolom."=".$id;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function tunjukgroup($table, $kolom, $order){
		$query = "	SELECT * FROM ".$table." GROUP BY ".$kolom." ORDER BY ".$order;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function tunjukrelasi($table1, $relasi1, $table2, $relasi2, $table3){
		$query = "	SELECT * FROM ".$table1." join ".$table2." ".$relasi1." join ".$table3." ".$relasi2;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function tunjukrelasi1($table1, $relasi1, $table2){
		$query = "	SELECT * FROM ".$table1." join ".$table2." ".$relasi1;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function tunjukrelasi1group($table1, $relasi1, $table2, $kolom){
		$query = "	SELECT * FROM ".$table1." join ".$table2." ".$relasi1." group by ".$kolom;
		$hasil = mysql_query ($query);
		return $hasil;
	}
function updateData($kolomupdate, $tabel, $where){
		$simpan	= "UPDATE ".$tabel." ".$kolomupdate." WHERE ".$where;
		$hasil	= mysql_query ($simpan);
		
		return $hasil;
	}
function delData($tabel, $where){
		//$idcl	= base64_decode($id);
		$hapus	= "DELETE FROM ".$tabel." WHERE ".$where;
		$hasil	= mysql_query ($hapus);
		
		return $hasil;
	}
function addData($add, $tabel){
		//$idcl	= base64_decode($id);
		$tambah	= "INSERT INTO ".$tabel." ".$add;
		$hasil	= mysql_query ($tambah);
		
		return $hasil;
	}
		
function alert($text="", $redirect = NULL){
		 echo  "<script language='JavaScript'>alert('".$text."')</script>";
		 if($redirect!=NULL){
		//	$uri = site_url($uri);
			 echo "<script language=javascript> 
                      document.location.href='".$redirect."';
                  </script>";
		 }
	}
?>