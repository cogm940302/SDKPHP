# SdkPHP

Instrucciones para el uso del SDK en lenguaje PHP
 
 
## Antes de comenzar se debe de tener en cuenta lo siguiente

1. php 7.4 o superior
2. Instalar las librerias necesarias declaradas en el composer.json
 
 
## Modo de uso 
El proyecto hace uso de las librarias declaradas en el composer.json como son 
Guzzle
Symfony
Doctrine


> Guzzle: https://docs.guzzlephp.org/en/stable/#
> Symfony: https://symfony.com/doc/current/index.html
> Doctrine: https://www.doctrine-project.org/projects/annotations.html

## Ejemplo

```php
...
use MIT\SdkClient\Models\UrlData;
use MIT\SdkClient\Models\PaymentData;
use MIT\SdkClient\Models\DatosAdicionalesData;
use MIT\SdkClient\Models\DataItem;
use MIT\SdkClient\Models\BusinessData;
use MIT\SdkClient\WppClient;
...
```

```php


		$sdk = new WppClient('https://sandboxpo.mit.com.mx/gen', 'SNDBX123', '5DCC67393750523CD165F17E1EFADD21');
        $urlData = new UrlData();
        $urlData->setReference("reference001");
        $urlData->setAmount(10.0);
        $urlData->setMoneda('MXN');
        $urlData->setPromotions("C");
        $urlData->setStEmail(1);
        $urlData->setExpirationDate(date('d-m-Y H:i:s'));
        $businessData = new BusinessData();
        $businessData->setIdBranch("01SNBXBRNCH");
        $businessData->setIdCompany("SNBX");
        $businessData->setUser("SNBXUSR0123");
        $businessData->setPwd("SECRETO");
        $paymentData = new PaymentData();
        $paymentData->setUrl($urlData);
        $paymentData->setBusiness($businessData);

        $datosAd = new DatosAdicionalesData();
        $dataAlgo = [];
        $dataItem = new DataItem();

        $dataItem->setId(0);
        $dataItem->setValue("valor");
        $dataItem->setLabel("Este es el label");
        array_push($dataAlgo, $dataItem);
        $datosAd->setData($dataAlgo);
        $paymentData->setAdditionalData($datosAd);
       $url = $sdk->getUrlPayment($paymentData);
       print("la url del servicios es: " . $url);


        $response = $sdk->processAfterPaymentResponse("UHkxa6LtFWnN45zIb1dPCIcLSR3WOHmM2wejZIIiyhmQOOFoKA2iJnKyXLa5Y/2FnqoiVH1XV7tM5Uhzw6W3v0xzfNfnKfee4oFqpLxHG1uCqxgYAbCI7eWT37Im7VVCzpxl3QSPiXRQGnKrLOdNjaART1omE8/lUvKSgOC8mVnBg0VD1bSwOUJl8PqfzAM9fwiboQ7ucGxF7JTTmt0hdN2Fz58MXpWYEWcGJDUE9TMNCbUCACO3S1u9e10bCDQa4oSZ0vFbp5NZVivk8Vbp2jqo6LFLQYt5nZKqdGOdfusg4rVYD2oDrvSV3njkI9onpxsAU4iJT4L3ebsqyXcHxaAmu/T/B1m+WoSphFeV5Wcla8R6vh0M2dZFjDX6X016Dr7JR25aulgy1TmpzM0PEOxHGcsl+iGHk17dNECZ8/kY9Vsf9R4sz0sFswjQb3QOuawCMUPht4pdKsN1RXioTvLyIQpAKAavuGOIF+YAg59KWHmFFFdcLmeNyppyuY5RiguhfQVk8bql4Zd8sDOv/nomrdLWyxYEKUdjtkeKcz5EeyAkLUDNXsHrmOFn6MoF9ThSWB9eVHIlvIdkuaW5Qy3r7juXjNMcBW4suq2LiEvs+DbwhGSoKYAd2WhrMtt6fST2/kiYdbZT3A8EyN4Tz/6Qh2KJ4ur/hfiZnkyV/r4R3Rmxm+FYJpbPatItHBQxWx/H9BUtXQ8BO3j2h7jcai5XwmmXSQAgvI+GvL/P6oO3h51dnrRfhVUfOjV0BF0Yiz4GJlvxrWoI8u/s2bIi4LEwjQ7CMJzmUCeCVIPro730JLhkYFNZsvV/ANCt1sNj7HS0olWO3QZdmX7cLK6gXLMO4b/LMAoVqmOW95Nk+PuTHp+TOtOL8FIUNCVEqpXB+kHgIVTN0GdCsBKgvVrmWi5IA8BSKPfX33e8+XWQ2KHJJ4VvH8yyDb2Akxuc8XoxIUoXtV1u0GG7icQVaNEV/Xmj9ofUTqDcGaqqYN4OsZZ7t0ruYMAYwQQw7Y7/OGhHJtmLba+MfGUhpTeSCuxW80AWTXftq2k9kDR0gxSacEufIOfVuhGtCf5eZqxTawk8RJ4hArxDiFS2ODDvHexOk8iEzkz5rysdBTi1cgPTq4w=");
        print("\n\n\nla respuesta es: " . $response->getIdUrl());
```