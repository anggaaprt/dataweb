<?php
/*
 * Class Query String
 *
 * @subpackage 	: ClassQuery [ V.1.3.1 ]
 * @link       	: http://www.xxxxx.com/
 * @author	   	: Double Dik
 * @email		: tisoledat.gebrug@gmail.com | beautiful_trip@yahoo.com
 * @create     	: Desember 13, 2008
 * @modif      	: Maret 30, 2010
 * @note       	: Untuk  Mengolah CMS Sederhana, jika ada perubahan kasih comment di dalam functionya.
 * @website		: 
 */
 
class ClassQuery{

		function insertQuery($table, $field_db, $fieldInsert){
			if(mysql_query("INSERT INTO ".$table." (".$field_db.") VALUES (".$fieldInsert.")")or die(mysql_error())){
				return true;
				}else{
				return false;
			}
		}	
			
		function updateQuery($table, $fieldUpdate, $field){
			if(mysql_query("UPDATE ".$table." SET ".$fieldUpdate." WHERE ".$field."")or die(mysql_error())){
				return true;
				}else{
				return false;
			}	
		}
		
		function deleteQuery($table, $field) {
			$rs = mysql_query("DELETE FROM ".$table." WHERE ".$field."")or die(mysql_error());
			return $rs;
		}
		
		function getAllRecord($table, $field){
			$rs = mysql_query("SELECT * FROM ".$table." ORDER BY ".$field." ")or die(mysql_error());
			return $rs;		
		}
		
		function getRecord($table, $field){
			$rs = mysql_query("SELECT * FROM ".$table." WHERE ".$field."")or die(mysql_error());
			return $rs;
		}
		
		function getRecordOrderA($table, $field, $order, $ext){
			$rs = mysql_query("SELECT * FROM ".$table." WHERE ".$field." ORDER BY ".$order." ASC ".$ext)or die(mysql_error());
			return $rs;
		}
		
		function getRecordOrderD($table, $field, $order, $ext){
			$rs = mysql_query("SELECT * FROM ".$table." WHERE ".$field." ORDER BY ".$order." DESC ".$ext)or die(mysql_error());
			return $rs;
		}
		
		function getFieldSelected($fieldS, $table, $field, $order){
			$rs = mysql_query("SELECT ".$fieldS." FROM ".$table." WHERE ".$field." ORDER BY ".$order." ASC ")or die(mysql_error());
			return $rs;
		}
		
		function getSingle($query){
			$sql=mysql_query($query);
			$rowset=mysql_fetch_row($sql);
			return $rowset[0];
		}
		
		function getName($table, $field, $fielRec){
			$rs = $this->getRecord($table, $field);
			if($row = mysql_fetch_array($rs)){
				$nama = $row[''.$fielRec.''];
			}
			return $nama;
		}
		
		function getCount($table, $count_field, $field){
			$rs	= mysql_query("SELECT COUNT(".$count_field.") AS Hasil FROM ".$table." WHERE ".$field."")or die(mysql_error());
			if($row = mysql_fetch_array($rs)){
				$data = $row['Hasil'];
			}
			return $data;
		}

		function getSum($table, $count_field, $field){
			$rs	= mysql_query("SELECT SUM(".$count_field.") AS Hasil FROM ".$table." WHERE ".$field."")or die(mysql_error());
			if($row = mysql_fetch_array($rs)){
				$data = $row['Hasil'];
			}
			return $data;
		}
		
		function getAvg($table, $count_field, $field){
			$rs	= mysql_query("SELECT AVG(".$count_field.") AS Hasil FROM ".$table." WHERE ".$field."")or die(mysql_error());
			if($row = mysql_fetch_array($rs)){
				$data = $row['Hasil'];
			}
			return $data;
		}

		function getMax($table, $count_field, $field){
			$rs	= mysql_query("SELECT MAX(".$count_field.") AS Hasil FROM ".$table." WHERE ".$field."")or die(mysql_error());
			if($row = mysql_fetch_array($rs)){
				$data = $row['Hasil'];
			}
			return $data;
		}

		function getMin($table, $count_field, $field){
			$rs	= mysql_query("SELECT MIN(".$count_field.") AS Hasil FROM ".$table." WHERE ".$field."")or die(mysql_error());
			if($row = mysql_fetch_array($rs)){
				$data = $row['Hasil'];
			}
			return $data;
		}
		
		function get_menu_tree($table, $status, $file1, $file2, $categories){
			$data	= "";
			$rs		= $this->getRecord($table, $status);
			while($row = mysql_fetch_array($rs)){
				$data .= '<li id="menu1"><a href="'.$file1.'?categories='.$row['id'].'">'.$row['nama_categori'].'</a>';
				if($row['id'] == $categories){
					$data .= '<ul style="border:none;">';
						$rs2	= $this->getRecord($table, "id_parent = '".$row['id']."' AND status = 2");
						while($row2 = mysql_fetch_array($rs2)){						
							$data .= '<li class="last"><a href="'.$file2.'?categories='.$categories.'&type='.$row2['id'].'">'.$row2['nama_categori'].'</a></li>';							
						 }
						 $data .= '</li></ul>';					
				}else{
					$data .= '</li>';
				}				
			}
			
			return $data;
		}
		
		function formatAngka($angka) {
			$hasil = number_format($angka,0, ",",".");
			return $hasil;
		}		
	

		function xss_clean($str){
			if(!get_magic_quotes_gpc()) {
				$str = addslashes($str);
			}			
			$str = strip_tags(htmlspecialchars($str));
			return $str;
		}
		
		function cache_clean(){
			$data = header("Cache-Control: no-cache, must-revalidate");
			return $data;
		}
		
		function validasi($str) {
			$str = str_replace("'","",$str);
			$str = str_replace("<","&lt;",$str);
			$str = str_replace(">","&gt;",$str);
			return $str;
		}

		function validasiTypeImages($str) {
			$str = str_replace(".jpg","",$str);
			$str = str_replace(".jpeg","",$str);
			$str = str_replace(".gif","",$str);
			$str = str_replace(".png","",$str);
			$str = str_replace(".bmp","",$str);
			$str = str_replace(".pjpeg","",$str);
			return $str;
		}
		
		function random($length = 12, $chars){
			$chars_length 	= (strlen($chars) - 1);
			$string 		= $chars{rand(0, $chars_length)};
			
			for ($i = 1; $i < $length; $i = strlen($string)){
				$r = $chars{rand(0, $chars_length)};
				if ($r != $string{$i - 1}) $string .= $r;
			}
			
			return $string;
		}
		
		function get_merk_hp(){
			$listMerk 	= array('Nokia', 'iPhone', 'iPod', 'BlackBerry', 'HTC', 'LG', 'Nokia', 'Samsung', 'SonyEricsson');			
			$agent 		= $_SERVER['HTTP_USER_AGENT'];
			
			foreach ($listMerk as $merk){
			   $count = substr_count($agent, $merk);
			   if ($count > 0) $merkDigunakan = $merk;
			}			
			return $merkDigunakan;
		}
		
		function direct_mobile($domain, $domain_mobile){			
			$listMerk 	= array('Nokia', 'iPhone', 'iPod', 'BlackBerry', 'HTC', 'LG', 'Nokia', 'Samsung', 'SonyEricsson');			
			$agent 		= $_SERVER['HTTP_USER_AGENT'];			
			$cek 		= 0;
			
			foreach ($listMerk as $merk){
			   $count = substr_count($agent, $merk);
			   if ($count > 0) $cek = 1;
			}
			
			if ($cek == 0){
				$data = header("Location: http://".$domain."");
			}elseif($cek == 1){
				$data = header("Location: http://".$domain_mobile."");		
			}
			return $data;
		}
		
		function replace_string_chart($string, $replace){
			$string	= str_replace(' ', $replace, $string);
			$string	= str_replace('.', $replace, $string);
			$string	= str_replace(',', $replace, $string);
			$string	= str_replace('-', $replace, $string);
			$string	= str_replace('|', $replace, $string);
			$string	= str_replace('/', $replace, $string);	
			$string	= str_replace(';', $replace, $string);			
			
			return $string;
		}
		
        function getMoon($ss_bulan){
            switch($ss_bulan){
               case'01':
                     $bulan = 'January';
               break;
               
               case'02':
                     $bulan = 'February';
               break;
               
               case'03':
                     $bulan = 'March';
               break;
               
               case'04':
                     $bulan = 'April';
               break;
               
               case'05':
                     $bulan = 'May';
               break;
               
               case'06':
                     $bulan  = 'June';
               break;
               
               case'07':
                     $bulan  = 'July';
               break;
               
               case'08':
                     $bulan  = 'August';
               break;
               
               case'09':
                     $bulan  = 'September';
               break;
               
               case'10':
                     $bulan  = 'October';
               break;        
               
               case'11':
                     $bulan  = 'November';
               break;

               case'12':
                     $bulan  = 'December';
               break;               
               
               default:$bulan    = ''; 
    
              }        
              
              return $bulan;

        }
		
		
		/*
		 * @ Form Attribut HTML
		 * @ Input Type Attribut HTML	 
		 */
		 
		function form_open($action, $file_name, $method, $status){
			$data = '<form action="'.$action.'" name="'.$file_name.'" method="'.$method.'" '.$status.'>';
			return $data;
		}
		
		function form_close(){
			$data = '</form>';
			return $data;
		}
		
		function form_password($file_name, $value, $status){
			$data = '<input type="password" name="'.$file_name.'" value="'.$this->xss_clean($value).'" '.$status.'/>';
			return $data;
		}

		function form_input($file_name, $value, $status){
			$data = '<input type="text" name="'.$file_name.'" value="'.$this->xss_clean($value).'" '.$status.'/>';
			return $data;
		}

		function form_hidden($file_name, $value, $status){
			$data = '<input type="hidden" name="'.$file_name.'" value="'.$this->xss_clean($value).'" '.$status.'/>';
			return $data;
		}
		
		function form_file($file_name){
			$data = '<input type="file" name="'.$file_name.'" />';
			return $data;
		}		

		function form_textarea($file_name, $rows, $value, $status){
			$data = '<textarea name="'.$file_name.'" rows="'.$rows.'" '.$status.'>'.$value.'</textarea>';
			return $data;
		}

		function form_dropdown($file_name, $onChange, $table, $status, $get_id, $get_field, $show_field){
			$data = '<select name="'.$file_name.'" class="input-box" onchange="'.$onChange.'">';
			  $data .= '<option value="">- pilih -</option>';
					$rs = $this->getRecord($table, $status);						
					while ($row =mysql_fetch_array($rs)){							
						if ($row[''.$get_field.''] == $get_id) {
							$cek = "selected";
						}else {
							$cek = "";
						}			
						$data .= "<option value=".$row[''.$get_field.'']." ".$cek.">".$row[''.$show_field.'']."</option>";				
					}						
			$data .= '</select>';
			
			return $data;
		}
		
		function form_submit($file_name, $value, $status){
			$data = '<input type="submit" name="'.$file_name.'" value="'.$value.'" '.$status.'/>';
			return $data;
		}		

		function form_button($file_name, $value, $status){
			$data = '<input type="button" name="'.$file_name.'" value="'.$value.'" '.$status.'/>';
			return $data;
		}
		
		function anchor($link_page, $file_name, $status){
			$data = '<a href="'.$link_page.'" '.$status.'>'.$file_name.'</a>';
			return $data;
		}
		
		/* End Form Atrribut */
		
		
		function shared_facebook(){
			$data = '<div id="butFb"><a name="fb_share"></a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>';
			return $data;
		}
		
		function shared_twitter(){
			$data = '<div id="butTwitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="isikan_username_twitter_anda">Tweet</a> <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>';
			return $data;
		}		
		
		function send_email($email){
			$data = '<a href="mailto:'.$email.'">'.$email.'</a>';
			return $data;
		}
		
		function send_yahoo($yahoo_id){
			$data = '<a href="ymsgr:sendim?'.$yahoo_id.'" class="link-news"><img border=0 src=http://opi.yahoo.com/online?u='.$yahoo_id.'&m=g&t=1></a>';
			return $data;		
		}
		
		function redirect($file_name){
			$data	= ('<script language="javascript">self.location.href="'.$file_name.'"</script>');
			return $data;
		}

		function validateEmail($email){
			return preg_match('/^[a-z0-9_-][a-z0-9._-]+@([a-z0-9][a-z0-9-]*\.)+[a-z]{2,6}$/i', $email);
		}
	
		function imageRealName($fileProduk, $location){
		if($fileProduk['type']!=''){
			$type = $fileProduk['type'];		
			if ($type == "image/jpeg") {
				$type = "jpg";
				}elseif ($type == "image/gif") {
					$type = "gif";
				}elseif ($type == "image/pjpeg") {
					$type = "pjpeg";
				}elseif ($type == "image/png") {
					$type = "png";
			}
			
				if (file_exists("".$location.$fileProduk["name"].".jpg")) {
					unlink("".$location.$fileProduk["name"].".jpg");
				}
				if (file_exists("".$location.$fileProduk["name"].".gif")) {
					unlink("".$location.$fileProduk["name"].".gif");
				}
				if (file_exists("".$location.$fileProduk["name"].".pjpeg")) {
					unlink("".$location.$$fileProduk["name"].".pjpeg");
				}
				if (file_exists("".$location.$fileProduk["name"].".png")) {
					unlink("".$location.$fileProduk["name"].".png");
				}		
				
				copy($fileProduk["tmp_name"], $location.$fileProduk["name"].".".$type);
			}
		}
	
		function uploadImage($fileProduk, $location, $kode) {
		if($fileProduk['type']!=''){
			$type = $fileProduk['type'];		
			if ($type == "image/jpeg") {
				$type = "jpg";
				}elseif ($type == "image/gif") {
					$type = "gif";
				}elseif ($type == "image/pjpeg") {
					$type = "pjpeg";
				}elseif ($type == "image/png") {
					$type = "png";
			}
			
				if (file_exists("".$location.$kode.".jpg")) {
					unlink("".$location.$kode.".jpg");
				}
				if (file_exists("".$location.$kode.".gif")) {
					unlink("".$location.$kode.".gif");
				}
				if (file_exists("".$location.$kode.".pjpeg")) {
					unlink("".$location.$kode.".pjpeg");
				}
				if (file_exists("".$location.$kode.".png")) {
					unlink("".$location.$kode.".png");
				}		
				
				copy($fileProduk['tmp_name'], $location.$kode.".".$type);
			}
		}	
		
		function cekExistsImages($dir, $kode){
			if (file_exists($dir.$kode.".jpg")) {
				$type = "jpg";
			}elseif (file_exists($dir.$kode.".gif")) {
				$type = "gif";
			}elseif (file_exists($dir.$kode.".png")) {
				$type = "png";
			}elseif (file_exists($dir.$kode.".jpeg")) {
				$type = "jpeg";				
			}elseif (file_exists($dir.$kode.".pjpeg")) {
				$type = "pjpeg";
			}else{
				$type = "";
			}
			
			return $type;
		}		

		function showImages($dir, $kode, $width, $height){
			if (file_exists($dir.$kode.".jpg")) {
				$type = "jpg";
			}elseif (file_exists($dir.$kode.".gif")) {
				$type = "gif";
			}elseif (file_exists($dir.$kode.".png")) {
				$type = "png";
			}elseif (file_exists($dir.$kode.".jpeg")) {
				$type = "jpeg";				
			}elseif (file_exists($dir.$kode.".pjpeg")) {
				$type = "pjpeg";
			}else{
				$type = "";
			}
			
			if ($type == "") {
					//$picture	= '<img src="'.$dir.'empty.jpg" width="'.$width.'"  height="'.$height.'" border="0"/>';
				
				}else{							
					$picture	= '<img src="'.$dir.$kode.'.'.$type.'?'.date("Ymdhis").'" width="'.$width.'"  height="'.$height.'" border="0"/>';				
				}				
			return $picture;
		}
		
		function showImagesExt($dir, $kode, $width, $height, $custom){
			if (file_exists($dir.$kode.".jpg")) {
				$type = "jpg";
			}elseif (file_exists($dir.$kode.".gif")) {
				$type = "gif";
			}elseif (file_exists($dir.$kode.".png")) {
				$type = "png";
			}elseif (file_exists($dir.$kode.".jpeg")) {
				$type = "jpeg";				
			}elseif (file_exists($dir.$kode.".pjpeg")) {
				$type = "pjpeg";
			}else{
				$type = "";
			}
			
			if ($type == "") {
					//$picture	= '<img src="'.$dir.'empty.jpg" width="'.$width.'"  height="'.$height.'" border="0"/>';
				
				}else{							
					$picture	= '<img src="'.$dir.$kode.'.'.$type.'?'.date("YmdHis").'" width="'.$width.'"  height="'.$height.'" '.$custom.' border="0"/>';				
				}				
			return $picture;
		}

		function showImagesW($dir, $kode, $width){
			if (file_exists($dir.$kode.".jpg")) {
				$type = "jpg";
			}elseif (file_exists($dir.$kode.".gif")) {
				$type = "gif";
			}elseif (file_exists($dir.$kode.".png")) {
				$type = "png";
			}elseif (file_exists($dir.$kode.".jpeg")) {
				$type = "jpeg";				
			}elseif (file_exists($dir.$kode.".pjpeg")) {
				$type = "pjpeg";
			}else{
				$type = "";
			}
			
			if ($type == "") {
					$picture	= '<img src="'.$dir.'empty.jpg" width="'.$width.'" border="0"/>';
				
				}else{							
					$picture	= '<img src="'.$dir.$kode.'.'.$type.'" width="'.$width.'" border="0"/>';				
				}				
			return $picture;
		}

		function showImagesH($dir, $kode, $height){
			if (file_exists($dir.$kode.".jpg")) {
				$type = "jpg";
			}elseif (file_exists($dir.$kode.".gif")) {
				$type = "gif";
			}elseif (file_exists($dir.$kode.".png")) {
				$type = "png";
			}elseif (file_exists($dir.$kode.".jpeg")) {
				$type = "jpeg";				
			}elseif (file_exists($dir.$kode.".pjpeg")) {
				$type = "pjpeg";
			}else{
				$type = "";
			}
			
			if ($type == "") {
					$picture	= '<img src="'.$dir.'empty.jpg"  height="'.$height.'" border="0"/>';
				
				}else{							
					$picture	= '<img src="'.$dir.$kode.'.'.$type.'"  height="'.$height.'" border="0"/>';				
				}				
			return $picture;
		}
	
		function removeImage($dir, $kode) {	
			if (file_exists($dir.$kode.".jpg")) {
				unlink($dir.$kode.".jpg");
			}
			if (file_exists($dir.$kode.".gif")) {
				unlink($dir.$kode.".gif");
			}
			if (file_exists($dir.$kode.".png")) {
				unlink($dir.$kode.".png");
			}
			if (file_exists($dir.$kode.".jpeg")) {
				unlink($dir.$kode.".jpeg");
			}
			if (file_exists($dir.$kode.".pjpeg")) {
				unlink($dir.$kode.".pjpeg");
			}
		}
		
		
		
		/*
		 *  ~ Pagination - Database ~
		 * 	1. get_paging_record
		 *  2. get_paging_content
		 *  3. SearcRecord
		 *  4. Save To DataBase (insert - select - update - delete) 
		 */	
		 
		function searchUser($keyword) {
			$sqlStr = "(`nama` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR user.`username` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR user.`nama` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `nama` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `username` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `username` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `nama` LIKE '%" . $keyword . "%')";
			return $sqlStr;
		}

		function searchNews($keyword) {
			$sqlStr = "(`judul` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR tbl_content.`judul` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR tbl_content.`rangkuman` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `judul` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `rangkuman` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `judul` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `rangkuman` LIKE '%" . $keyword . "%')";
			return $sqlStr;
		}
		
		function searchData($field, $keyword){
			$pch = explode(" ",$keyword);
			$tmpField=$field;
			$result="";
			foreach($pch as $like){
				if(empty($result)){
					$result=$field ." like '%".$like."%' ";
				}else{
					$field=$tmpField;
					$field="OR ".$field;
					$result=$result.$field ." like '%".$like."%' ";
				}					
			}
		return $result;
		}

		function searchProduct($keyword) {
			$sqlStr = "(`nama_categori` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR tbl_product.`nama_categori` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR tbl_product.`nama_brg` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `kode_brg` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `harga_brg` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `note` LIKE CONVERT( _utf8 '%" . $keyword . "%' USING latin1 ) COLLATE latin1_swedish_ci OR `warna_brg` LIKE '%" . $keyword . "%')";
			return $sqlStr;
		}
		
		function save_to_database($field_empty1, $field_empty2, $cmdSimpan, $table, $status, $field_db, $field_insert, $field_update, $id, $file_image, $dir, $name_image){
			$msg	= '';
			if(!empty($field_empty1) && !empty($field_empty2)) {
			
				if ($cmdSimpan == 'Simpan') {
					$rs = $this->getRecord($table, $status);
					if ($row = mysql_fetch_array($rs)) {
						$msg = '<div class="msgfailed">Data Sudah Terdaftar!</div>';
					}else{
					
						if ($this->insertQuery($table, $field_db, $field_insert)){	
							$file_image !='' ? $this->uploadImage($file_image, $dir, $name_image) : '';
							$msg = '<div class="msgsuccess">Penyimpanan Data Berhasil!</div>';
							
							}else{
							$msg = '<div class="msgfailed">Penyimpanan Data Gagal!</div>';
						}
						
					}
					
				}elseif ($cmdSimpan == 'Update') {	
							
					if ($this->updateQuery($table, $field_update, "id = '".$id."'")) {
						$file_image !='' ? $this->uploadImage($file_image, $dir, $name_image) : '';						
						$msg = '<div class="msgsuccess">Pengeditan Data Berhasil!</div>';	
						
						}else{
						$msg = '<div class="msgfailed">Pengeditan Data Gagal!</div>';									
					}
					
				}			
			  
			}else{
				$msg = '<div class="msgfailed">Silakan Masukan Kelengkapan Data, Kolom Yang diberi Tanda Tidak Boleh Kosong!</div>';
			}
			
			return $msg;
		}
		 
		 function save_to_database2($field_empty1, $field_empty2, $cmdSimpan, $table, $status, $field_db, $field_insert, $field_update, $id, $file_image, $file_image2, $dir, $name_image, $name_image2){
			$msg	= '';
			if(!empty($field_empty1) && !empty($field_empty2)) {
			
				if ($cmdSimpan == 'Simpan') {
					$rs = $this->getRecord($table, $status);
					if ($row = mysql_fetch_array($rs)) {
						$msg = '<div class="msgfailed">Data Sudah Terdaftar!</div>';
					}else{
					
						if ($this->insertQuery($table, $field_db, $field_insert)){	
							$file_image !='' ? $this->uploadImage($file_image, $dir, $name_image) : '';
							$file_image2 !='' ? $this->uploadImage($file_image2, $dir, $name_image2) : '';
							$msg = '<div class="msgsuccess">Penyimpanan Data Berhasil!</div>';
							
							}else{
							$msg = '<div class="msgfailed">Penyimpanan Data Gagal!</div>';
						}
						
					}
					
				}elseif ($cmdSimpan == 'Update') {	
							
					if ($this->updateQuery($table, $field_update, "id = '".$id."'")) {
						$file_image   !='' ? $this->uploadImage($file_image, $dir, $name_image) : '';						
						$file_image2 !='' ? $this->uploadImage($file_image2, $dir, $name_image2) : '';
						$msg = '<div class="msgsuccess">Pengeditan Data Berhasil!</div>';	
						
						}else{
						$msg = '<div class="msgfailed">Pengeditan Data Gagal!</div>';									
					}
					
				}			
			  
			}else{
				$msg = '<div class="msgfailed">Silakan Masukan Kelengkapan Data, Kolom Yang diberi Tanda Tidak Boleh Kosong!</div>';
			}
			
			return $msg;
		}
		
	function save_to_database4($field_empty1, $field_empty2, $cmdSimpan, $table, $status, $field_db, $field_insert, $field_update, $id, $file_image, $file_image2, $file_image3, $dir, $name_image, $name_image2, $name_image3){
			$msg	= '';
			if(!empty($field_empty1) && !empty($field_empty2)) {
			
				if ($cmdSimpan == 'Simpan' || $cmdSimpan=='Save') {
					$rs = $this->getRecord($table, $status);
					if ($row = mysql_fetch_array($rs)) {
						$msg = '<div class="msgfailed">Data Sudah Terdaftar!</div>';
					}else{
					
						if ($this->insertQuery($table, $field_db, $field_insert)){	
							$file_image !='' ? $this->uploadImage($file_image, $dir, $name_image) : '';
							$file_image2 !='' ? $this->uploadImage($file_image2, $dir, $name_image2) : '';
							$file_image3 !='' ? $this->uploadImage($file_image3, $dir, $name_image3) : '';
							
							$msg = '<div class="msgsuccess">Penyimpanan Data Berhasil!</div>';
							
							}else{
							$msg = '<div class="msgfailed">Penyimpanan Data Gagal!</div>';
						}
						
					}
					
				}elseif ($cmdSimpan == 'Update') {	
							
					if ($this->updateQuery($table, $field_update, "id = '".$id."'")) {
						$file_image   !='' ? $this->uploadImage($file_image, $dir, $name_image) : '';						
						$file_image2 !='' ? $this->uploadImage($file_image2, $dir, $name_image2) : '';
						$file_image3 !='' ? $this->uploadImage($file_image3, $dir, $name_image3) : '';
						
						$msg = '<div class="msgsuccess">Pengeditan Data Berhasil!</div>';	
						
						}else{
						$msg = '<div class="msgfailed">Pengeditan Data Gagal!</div>';									
					}
					
				}			
			  
			}else{
				$msg = '<div class="msgfailed">Silakan Masukan Kelengkapan Data, Kolom Yang diberi Tanda Tidak Boleh Kosong!</div>';
			}
			
			return $msg;
		}
			
		function get_paging_record($table, $status, $keyword, $noPage, $dataPerPage, $search, $order_by){
			$offset 	= ($noPage - 1) * $dataPerPage;
			$condition 	= ($keyword != "" ? " AND " . $this->$search($keyword) : "");
			$rs 		= $this->getRecord($table, $status.$condition." ORDER BY " .$order_by. " LIMIT " .$offset.", ".$dataPerPage);
			
			return $rs;
		}

		function get_paging_content($table, $status, $keyword, $noPage, $dataPerPage, $search){
			$condition 		= ($keyword != "" ? " AND " . $this->$search($keyword) : "");
			$hasil			= $this->getCount($table, "*", $status.$condition);					
			$jumData 		= $hasil;
			$showPage		= 0;
			$data_paging	= "";
			
			$jumPage 		= ceil($jumData/$dataPerPage);		
			
			if ($noPage > 1)				
				print $this->anchor(("javascript:document.frm_search.page.value='".($noPage-1)."'; document.frm_search.submit()"), "&laquo; Prev&nbsp;", '');
			
			for($page = 1; $page <= $jumPage; $page++){
				 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)){   
					if (($showPage == 1) && ($page != 2)) print "..."; 
					if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) print "...";
					if ($page == $noPage) print " <b>".$page."</b> "; else 									
					print $this->anchor(("javascript:document.frm_search.page.value='".$page."'; document.frm_search.submit()"), '&nbsp;'.$page.'&nbsp;', '');
					$showPage = $page;          
				 }
			}
			
			if ($noPage < $jumPage) 
				$data_paging =  $this->anchor(("javascript:document.frm_search.page.value='".($noPage + 1)."'; document.frm_search.submit()"), '&nbsp;Next &raquo;', '');
											
			return $data_paging;
		}		
		function getBulan($bln){
			switch ($bln){
				case 1:  return "Januari";
					break;
				case 2:	 return "Februari";
					break;
				case 3:	 return "Maret";
					break;
				case 4:	 return "April";
					break;
				case 5:	 return "Mei";
					break;
				case 6:	 return "Juni";
					break;
				case 7:	 return "Juli";
					break;
				case 8:	 return "Agustus";
					break;
				case 9:	 return "September";
					break;
				case 10: return "Oktober";
					break;
				case 11: return "November";
					break;
				case 12: return "Desember";
					break;
	}
}

function getBulanSingkat($bln){
			switch ($bln){
				case 1:  return "Jan";
					break;
				case 2:	 return "Feb";
					break;
				case 3:	 return "Mar";
					break;
				case 4:	 return "Apr";
					break;
				case 5:	 return "Mei";
					break;
				case 6:	 return "Jun";
					break;
				case 7:	 return "Jul";
					break;
				case 8:	 return "Aug";
					break;
				case 9:	 return "Sep";
					break;
				case 10: return "Okt";
					break;
				case 11: return "Nov";
					break;
				case 12: return "Des";
					break;
	}
}  

		function tgl_indo_penuh($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan   = $this->getBulan(substr($tgl,5,2));
			$tahun   = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		
		}
		
		function getNumRowData($sql){
			$sql=mysql_query($sql);
			$jmlData=mysql_num_rows($sql);
			return $jmlData;
		}
		
		function replaceTagP($data){
			$data=str_replace("<p>", "", str_replace("</p>", "", $data));
			return $data;
		}
		
		/* End Pagination & Save to database */

}
?>
