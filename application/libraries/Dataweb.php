<?php 
class Dataweb{
    
    public function iman($iman){
        $data1  = $iman;
        $data2 = 'congcot';
        return array("data1" => $data1, "data2" => $data2);
    }
    
    public function status($status){
        if ($status==1){
            $val='active';
            $btn='btn-success';
        } else {
            $val='not active';
            $btn='btn-danger';
        }
        return $val."~".$btn;
    }
    
    public function thumb($images1,$images2,$images3,$images4,$images5,$images6){
        if ($images1 !=NULL){
            $img1=explode('.',$images1);
            $image1=$img1[0].'_thumb'.'.'.$img1[1];
        }
        else{
            $image1="foto/empty.png";
        }
        if ($images2 !=NULL){
            $img2=explode('.',$images2);
            $image2=$img2[0].'_thumb'.'.'.$img2[1];
        }
        else{
            $image2="foto/empty.png";
        }
        if ($images3 !=NULL){
            $img3=explode('.',$images3);
            $image3=$img3[0].'_thumb'.'.'.$img3[1];
        }
        else{
            $image3="foto/empty.png";
        }
        if ($images4 !=NULL){
            $img4=explode('.',$images4);
            $image4=$img4[0].'_thumb'.'.'.$img4[1];
        }
        else{
            $image4="foto/empty.png";
        }
        if ($images5 !=NULL){
            $img5=explode('.',$images5);
            $image5=$img5[0].'_thumb'.'.'.$img5[1];
        }
        else{
            $image5="foto/empty.png";
        }
        if ($images6 !=NULL){
            $img6=explode('.',$images6);
            $image6=$img6[0].'_thumb'.'.'.$img6[1];
        }
        else{
            $image6="foto/empty.png";
        }
        return $image1."~".$image1."~".$image2."~".$image3."~".$image4."~".$image5."~".$image6;
    }
    
    
}
?>