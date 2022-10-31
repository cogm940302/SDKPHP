<?php


namespace MIT\SdkClient\AES;


/**
 * Class AesHelper
 * @package 
 */
class AesHelper
{

    const CIPHER_METHOD = MCRYPT_RIJNDAEL_128;
    const CBC_LENGTH_IV = 16;
    const CBC = MCRYPT_MODE_CBC;

    private $key;

    public function __construct($key)
   {
    $this->key = hex2bin($key);
   }
/**
     * @param $data
     * @return string
     */
    public function encrypt( $data)
    {
        try {
            $iv = mcrypt_create_iv(mcrypt_get_iv_size(self::CIPHER_METHOD, self::CBC), MCRYPT_RAND);
            $encryptedData = openssl_encrypt($data, 'aes-128-cbc', $this->key, OPENSSL_RAW_DATA, $iv);
            return base64_encode($iv . $encryptedData);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }
    private function pkcs5_pad($text, $blockSize)
    {
        $pad = $blockSize - (strlen($text) % $blockSize);
        return $text . str_repeat(chr($pad), $pad);
    }

    public  function decrypt($data)
    {

        $newData = base64_decode($data);
        $iv = substr($newData, 0, self::CBC_LENGTH_IV);
        $dataRaw = substr($newData, self::CBC_LENGTH_IV, strlen($newData));
        try {
            return openssl_decrypt($dataRaw, 'aes-128-cbc', $this->key, OPENSSL_RAW_DATA, $iv);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    private static function pkcs5_unPad($text)
    {
        $pad = ord($text[strlen($text) - 1]);
        if ($pad > strlen($text)) {
            return false;
        }
        if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
            return false;
        }
        return substr($text, 0, -1 * $pad);
    }
}
?>