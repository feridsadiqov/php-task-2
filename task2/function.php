<?php


// function  findUserFromUserList ($array,$srckey,$colum="id", $sim=false)  {
    
// //    $response=[];

//    if($sim==false){
//     foreach ($array as $key => $value) {
//         if (str_contains($colum ,':')) {
//             echo '<pre>';
//             print_r($value);
//             $a=explode(':', $colum);
//             if ($value[$a[0]][$a[1]]==$srckey) {
//                 print_r($value);
//             }
//         }
         
//         foreach ($value as $arkey => $arvalue) {

//             if(array_key_exists($colum,$value)){
//                 if ($srckey==$arvalue) {
                    
//                     print_r($value);
//                 }
//             }
            
//          }
//         }
        
//         // print_r($response);
//     }
//     else {
//         foreach ($array as $key => $value) {
//             if (str_contains($colum ,':')) {
//                 echo '<pre>';
//                 print_r($value);
//                 $a=explode(':', $colum);
//                 if ($value[$a[0]][$a[1]]==$srckey) {
//                     print_r($value);
//                 }
//             }
             
//             foreach ($value as $arkey => $arvalue) {
    
//                 if(array_key_exists($colum,$value)){
//                     if ($srckey==$arvalue) {
                        
//                         print_r($value);
//                     }
//                 }
                
//              }
//             }
//     }
// }



function findUserFromUL($array,$srckey,$colum="id", $sim=false){
    $deyerler = explode(':', $colum);
    $findUser1 = $deyerler[0];
    $findUser2 = $deyerler[1];

    if(!$sim){
        foreach ($array as $key => $value) {
            if($value[$findUser1][$findUser2] == $srckey){
                print_r($value);
            }
        }
    }
}
?>


