<?php 
class Helper
{

    public static function banknoteBuying($currencyCode, $type = 'buying')
    {
        $request = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

        if ($request !== false) {
            foreach ($request->Currency as $currency) {
                if ((string)$currency['CurrencyCode'] === $currencyCode) {
                    if ($type === 'buying') {
                        return isset($currency->BanknoteBuying) ? (float)$currency->BanknoteBuying : null;
                    } elseif ($type === 'selling') {
                        return isset($currency->BanknoteSelling) ? (float)$currency->BanknoteSelling : null;
                    } else {
                        return "Geçersiz tip belirtildi.";
                    }
                }
            }
            return "Belirtilen para birimi bulunamadı.";
        } else {
            return "XML dosyası yüklenirken bir hata oluştu.";
        }
    }

    public static function jsonResponse($data) {
        header("Content-type: application/json");
        return json_encode([
            "status" => "success",
            "data"   => $data
        ], 256 | JSON_PRETTY_PRINT);
    }
}
