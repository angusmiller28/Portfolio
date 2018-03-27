<?php

// public function convertFileToBase64Image(Request $request){
//   if ($request->hasFile('coverImage')) {
//     if($request->file('coverImage')->isValid()) {
//         try {
//             $file = file_get_contents($request->file('coverImage')->path());
//             $image = base64_encode($file);
//             return $image;
//
//         } catch (FileNotFoundException $e) {
//             echo "catch";
//
//         }
//     }
//   }
// }
