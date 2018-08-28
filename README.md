# yii-aws-sdk
AWS SDK for PHP 3.x wrapper for yii 1.1

https://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.Sdk.html

install:

//todo

config :
```php
Yii::setPathOfAlias('zodimo', dirname(__FILE__).'/../../../vendor/zodimo');

'components'=>array(
    //..
    'awsSdk'=>array(
        'class'=>'zodimo.yii-aws-sdk.AwsSdk',
        'sharedConfig'=>array(
            'region'  => 'us-east-2',
            'version' => 'latest',
            'credentials' => array(
                'key' => 'your-aws-key',
                'secret' => 'your-aws-secret',
            ),
        ),
        'serviceConfig'=>array(
            //Service specific config
            'S3'=>array(
                'region'  => 'us-east-2',
                'credentials' => array(
                    'key' => 'your-aws-key',
                    'secret' => 'your-aws-secret',
                ),                        
            ),
        ),                
           
    ),
    //..
)
```

usage :
```php

 $s3Client =yii::app()->awsSdk->createS3();
 //create bucket
 $s3Client->createBucket('BucketExists',['Bucket' => $bucket_name]);
 $s3Client->waitUntil(
     'BucketExists',
     array(
         'Bucket' => $bucket_name,
         '@waiter' => [
             'delay'       => 3,
             'maxAttempts' => 10
         ]
 ));
 $response = $s3Client->listBuckets();
 foreach ($response['Buckets'] as $bucket){
    //Do stuff
 }
 
```