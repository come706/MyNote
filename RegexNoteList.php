<?php
  $str = '你好abc,許功蓋!12345';
  
  // 中英文混合字串下的字數計算
  $CH_Regex       = '/[\x{4e00}-\x{9fa5}]/u';
  $CH_Character   = preg_match_all($CH_Regex, $str);
  $AtoZ_Character = preg_match_all('/[a-zA-Z]/', preg_replace($CH_Regex, '', $str));
  
  
