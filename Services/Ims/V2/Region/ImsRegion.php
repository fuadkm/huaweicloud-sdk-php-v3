<?php
namespace HuaweiCloud\SDK\Ims\V2\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class ImsRegion {

    public static $REGION = array("https://ims.af-south-1.myhuaweicloud.com"=>"af-south-1","https://ims.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://ims.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://ims.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://ims.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://ims.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://ims.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://ims.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://ims.ap-southeast-1.myhuaweicloud.com"=>"ap-southeast-1","https://ims.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3","https://ims.cn-north-2.myhuaweicloud.com"=>"cn-north-2","https://ims.cn-south-2.myhuaweicloud.com"=>"cn-south-2",);

    public static function valueOf($regionId)
    {
        try {
            if (null == $regionId) {
                throw new InvalidArgumentException("Unexpected empty parameter: regionId.");
            }
            $endpoint = array_search($regionId, self::$REGION);
            if (!$endpoint) {
                throw new InvalidArgumentException("Unexpected regionId: " . $regionId);
            }
            return new Region($regionId, $endpoint);
        } catch (InvalidArgumentException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
    }
}