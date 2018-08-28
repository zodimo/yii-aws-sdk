<?php

/**
 * Created by PhpStorm.
 * User: jaco
 * Date: 2018/08/17
 * Time: 6:08 AM
 */

namespace zodimo\yii\aws\sdk;
use Aws\Sdk;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method Aws\ACMPCA\ACMPCAClient createACMPCA(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionACMPCA(array $args = [])
 * @method Aws\Acm\AcmClient createAcm(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method Aws\AlexaForBusiness\AlexaForBusinessClient createAlexaForBusiness(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionAlexaForBusiness(array $args = [])
 * @method Aws\ApiGateway\ApiGatewayClient createApiGateway(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method Aws\AppSync\AppSyncClient createAppSync(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionAppSync(array $args = [])
 * @method Aws\ApplicationAutoScaling\ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method Aws\Appstream\AppstreamClient createAppstream(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method Aws\Athena\AthenaClient createAthena(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionAthena(array $args = [])
 * @method Aws\AutoScaling\AutoScalingClient createAutoScaling(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method Aws\AutoScalingPlans\AutoScalingPlansClient createAutoScalingPlans(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionAutoScalingPlans(array $args = [])
 * @method Aws\Batch\BatchClient createBatch(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method Aws\Budgets\BudgetsClient createBudgets(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method Aws\Cloud9\Cloud9Client createCloud9(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloud9(array $args = [])
 * @method Aws\CloudDirectory\CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method Aws\CloudFormation\CloudFormationClient createCloudFormation(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method Aws\CloudFront\CloudFrontClient createCloudFront(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method Aws\CloudHSMV2\CloudHSMV2Client createCloudHSMV2(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudHSMV2(array $args = [])
 * @method Aws\CloudHsm\CloudHsmClient createCloudHsm(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method Aws\CloudSearch\CloudSearchClient createCloudSearch(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method Aws\CloudSearchDomain\CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method Aws\CloudTrail\CloudTrailClient createCloudTrail(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method Aws\CloudWatch\CloudWatchClient createCloudWatch(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method Aws\CloudWatchEvents\CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method Aws\CloudWatchLogs\CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method Aws\CodeBuild\CodeBuildClient createCodeBuild(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method Aws\CodeCommit\CodeCommitClient createCodeCommit(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method Aws\CodeDeploy\CodeDeployClient createCodeDeploy(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method Aws\CodePipeline\CodePipelineClient createCodePipeline(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method Aws\CodeStar\CodeStarClient createCodeStar(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method Aws\CognitoIdentity\CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method Aws\CognitoIdentityProvider\CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method Aws\CognitoSync\CognitoSyncClient createCognitoSync(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method Aws\Comprehend\ComprehendClient createComprehend(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionComprehend(array $args = [])
 * @method Aws\ConfigService\ConfigServiceClient createConfigService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method Aws\Connect\ConnectClient createConnect(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionConnect(array $args = [])
 * @method Aws\CostExplorer\CostExplorerClient createCostExplorer(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCostExplorer(array $args = [])
 * @method Aws\CostandUsageReportService\CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method Aws\DAX\DAXClient createDAX(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDAX(array $args = [])
 * @method Aws\DLM\DLMClient createDLM(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDLM(array $args = [])
 * @method Aws\DataPipeline\DataPipelineClient createDataPipeline(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method Aws\DatabaseMigrationService\DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method Aws\DeviceFarm\DeviceFarmClient createDeviceFarm(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method Aws\DirectConnect\DirectConnectClient createDirectConnect(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method Aws\DirectoryService\DirectoryServiceClient createDirectoryService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method Aws\DynamoDb\DynamoDbClient createDynamoDb(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method Aws\DynamoDbStreams\DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method Aws\EKS\EKSClient createEKS(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionEKS(array $args = [])
 * @method Aws\Ec2\Ec2Client createEc2(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method Aws\Ecr\EcrClient createEcr(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method Aws\Ecs\EcsClient createEcs(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method Aws\Efs\EfsClient createEfs(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method Aws\ElastiCache\ElastiCacheClient createElastiCache(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method Aws\ElasticBeanstalk\ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method Aws\ElasticLoadBalancing\ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method Aws\ElasticTranscoder\ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method Aws\ElasticsearchService\ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method Aws\Emr\EmrClient createEmr(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method Aws\FMS\FMSClient createFMS(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionFMS(array $args = [])
 * @method Aws\Firehose\FirehoseClient createFirehose(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method Aws\GameLift\GameLiftClient createGameLift(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method Aws\Glacier\GlacierClient createGlacier(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method Aws\Glue\GlueClient createGlue(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionGlue(array $args = [])
 * @method Aws\Greengrass\GreengrassClient createGreengrass(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionGreengrass(array $args = [])
 * @method Aws\GuardDuty\GuardDutyClient createGuardDuty(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionGuardDuty(array $args = [])
 * @method Aws\Health\HealthClient createHealth(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method Aws\Iam\IamClient createIam(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionIam(array $args = [])
 * @method Aws\ImportExport\ImportExportClient createImportExport(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method Aws\Inspector\InspectorClient createInspector(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method Aws\IoT1ClickDevicesService\IoT1ClickDevicesServiceClient createIoT1ClickDevicesService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionIoT1ClickDevicesService(array $args = [])
 * @method Aws\IoT1ClickProjects\IoT1ClickProjectsClient createIoT1ClickProjects(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionIoT1ClickProjects(array $args = [])
 * @method Aws\IoTAnalytics\IoTAnalyticsClient createIoTAnalytics(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionIoTAnalytics(array $args = [])
 * @method Aws\IoTJobsDataPlane\IoTJobsDataPlaneClient createIoTJobsDataPlane(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionIoTJobsDataPlane(array $args = [])
 * @method Aws\Iot\IotClient createIot(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionIot(array $args = [])
 * @method Aws\IotDataPlane\IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method Aws\Kinesis\KinesisClient createKinesis(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method Aws\KinesisAnalytics\KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method Aws\KinesisVideo\KinesisVideoClient createKinesisVideo(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionKinesisVideo(array $args = [])
 * @method Aws\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient createKinesisVideoArchivedMedia(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionKinesisVideoArchivedMedia(array $args = [])
 * @method Aws\KinesisVideoMedia\KinesisVideoMediaClient createKinesisVideoMedia(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionKinesisVideoMedia(array $args = [])
 * @method Aws\Kms\KmsClient createKms(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionKms(array $args = [])
 * @method Aws\Lambda\LambdaClient createLambda(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method Aws\LexModelBuildingService\LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method Aws\LexRuntimeService\LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method Aws\Lightsail\LightsailClient createLightsail(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method Aws\MQ\MQClient createMQ(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMQ(array $args = [])
 * @method Aws\MTurk\MTurkClient createMTurk(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method Aws\MachineLearning\MachineLearningClient createMachineLearning(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method Aws\Macie\MacieClient createMacie(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMacie(array $args = [])
 * @method Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient createMarketplaceEntitlementService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMarketplaceEntitlementService(array $args = [])
 * @method Aws\MarketplaceMetering\MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method Aws\MediaConvert\MediaConvertClient createMediaConvert(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMediaConvert(array $args = [])
 * @method Aws\MediaLive\MediaLiveClient createMediaLive(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMediaLive(array $args = [])
 * @method Aws\MediaPackage\MediaPackageClient createMediaPackage(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMediaPackage(array $args = [])
 * @method Aws\MediaStore\MediaStoreClient createMediaStore(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMediaStore(array $args = [])
 * @method Aws\MediaStoreData\MediaStoreDataClient createMediaStoreData(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMediaStoreData(array $args = [])
 * @method Aws\MediaTailor\MediaTailorClient createMediaTailor(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMediaTailor(array $args = [])
 * @method Aws\MigrationHub\MigrationHubClient createMigrationHub(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMigrationHub(array $args = [])
 * @method Aws\Mobile\MobileClient createMobile(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionMobile(array $args = [])
 * @method Aws\Neptune\NeptuneClient createNeptune(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionNeptune(array $args = [])
 * @method Aws\OpsWorks\OpsWorksClient createOpsWorks(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method Aws\OpsWorksCM\OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method Aws\Organizations\OrganizationsClient createOrganizations(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method Aws\PI\PIClient createPI(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionPI(array $args = [])
 * @method Aws\Pinpoint\PinpointClient createPinpoint(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method Aws\Polly\PollyClient createPolly(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method Aws\Pricing\PricingClient createPricing(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionPricing(array $args = [])
 * @method Aws\Rds\RdsClient createRds(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionRds(array $args = [])
 * @method Aws\Redshift\RedshiftClient createRedshift(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method Aws\Rekognition\RekognitionClient createRekognition(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method Aws\ResourceGroups\ResourceGroupsClient createResourceGroups(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionResourceGroups(array $args = [])
 * @method Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method Aws\Route53\Route53Client createRoute53(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method Aws\Route53Domains\Route53DomainsClient createRoute53Domains(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method Aws\S3\S3Client createS3(array $args = [])
 * @method Aws\S3\S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method Aws\SageMaker\SageMakerClient createSageMaker(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSageMaker(array $args = [])
 * @method Aws\SageMakerRuntime\SageMakerRuntimeClient createSageMakerRuntime(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSageMakerRuntime(array $args = [])
 * @method Aws\SecretsManager\SecretsManagerClient createSecretsManager(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSecretsManager(array $args = [])
 * @method Aws\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient createServerlessApplicationRepository(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionServerlessApplicationRepository(array $args = [])
 * @method Aws\ServiceCatalog\ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method Aws\ServiceDiscovery\ServiceDiscoveryClient createServiceDiscovery(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionServiceDiscovery(array $args = [])
 * @method Aws\Ses\SesClient createSes(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSes(array $args = [])
 * @method Aws\Sfn\SfnClient createSfn(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method Aws\Shield\ShieldClient createShield(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionShield(array $args = [])
 * @method Aws\Sms\SmsClient createSms(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSms(array $args = [])
 * @method Aws\SnowBall\SnowBallClient createSnowBall(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method Aws\Sns\SnsClient createSns(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSns(array $args = [])
 * @method Aws\Sqs\SqsClient createSqs(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method Aws\Ssm\SsmClient createSsm(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method Aws\StorageGateway\StorageGatewayClient createStorageGateway(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method Aws\Sts\StsClient createSts(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSts(array $args = [])
 * @method Aws\Support\SupportClient createSupport(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method Aws\Swf\SwfClient createSwf(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method Aws\TranscribeService\TranscribeServiceClient createTranscribeService(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionTranscribeService(array $args = [])
 * @method Aws\Translate\TranslateClient createTranslate(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionTranslate(array $args = [])
 * @method Aws\Waf\WafClient createWaf(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method Aws\WafRegional\WafRegionalClient createWafRegional(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method Aws\WorkDocs\WorkDocsClient createWorkDocs(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method Aws\WorkMail\WorkMailClient createWorkMail(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionWorkMail(array $args = [])
 * @method Aws\WorkSpaces\WorkSpacesClient createWorkSpaces(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method Aws\XRay\XRayClient createXRay(array $args = [])
 * @method Aws\MultiRegionClient createMultiRegionXRay(array $args = [])
 *
 * methods to set config per service
 * @method null setACMPCAConfig(array $args = [])
 * @method null setMultiRegionACMPCAConfig(array $args = [])
 * @method null setAcmConfig(array $args = [])
 * @method null setMultiRegionAcmConfig(array $args = [])
 * @method null setAlexaForBusinessConfig(array $args = [])
 * @method null setMultiRegionAlexaForBusinessConfig(array $args = [])
 * @method null setApiGatewayConfig(array $args = [])
 * @method null setMultiRegionApiGatewayConfig(array $args = [])
 * @method null setAppSyncConfig(array $args = [])
 * @method null setMultiRegionAppSyncConfig(array $args = [])
 * @method null setApplicationAutoScalingConfig(array $args = [])
 * @method null setMultiRegionApplicationAutoScalingConfig(array $args = [])
 * @method null setApplicationDiscoveryServiceConfig(array $args = [])
 * @method null setMultiRegionApplicationDiscoveryServiceConfig(array $args = [])
 * @method null setAppstreamConfig(array $args = [])
 * @method null setMultiRegionAppstreamConfig(array $args = [])
 * @method null setAthenaConfig(array $args = [])
 * @method null setMultiRegionAthenaConfig(array $args = [])
 * @method null setAutoScalingConfig(array $args = [])
 * @method null setMultiRegionAutoScalingConfig(array $args = [])
 * @method null setAutoScalingPlansConfig(array $args = [])
 * @method null setMultiRegionAutoScalingPlansConfig(array $args = [])
 * @method null setBatchConfig(array $args = [])
 * @method null setMultiRegionBatchConfig(array $args = [])
 * @method null setBudgetsConfig(array $args = [])
 * @method null setMultiRegionBudgetsConfig(array $args = [])
 * @method null setCloud9Config(array $args = [])
 * @method null setMultiRegionCloud9Config(array $args = [])
 * @method null setCloudDirectoryConfig(array $args = [])
 * @method null setMultiRegionCloudDirectoryConfig(array $args = [])
 * @method null setCloudFormationConfig(array $args = [])
 * @method null setMultiRegionCloudFormationConfig(array $args = [])
 * @method null setCloudFrontConfig(array $args = [])
 * @method null setMultiRegionCloudFrontConfig(array $args = [])
 * @method null setCloudHSMV2Config(array $args = [])
 * @method null setMultiRegionCloudHSMV2Config(array $args = [])
 * @method null setCloudHsmConfig(array $args = [])
 * @method null setMultiRegionCloudHsmConfig(array $args = [])
 * @method null setCloudSearchConfig(array $args = [])
 * @method null setMultiRegionCloudSearchConfig(array $args = [])
 * @method null setCloudSearchDomainConfig(array $args = [])
 * @method null setMultiRegionCloudSearchDomainConfig(array $args = [])
 * @method null setCloudTrailConfig(array $args = [])
 * @method null setMultiRegionCloudTrailConfig(array $args = [])
 * @method null setCloudWatchConfig(array $args = [])
 * @method null setMultiRegionCloudWatchConfig(array $args = [])
 * @method null setCloudWatchEventsConfig(array $args = [])
 * @method null setMultiRegionCloudWatchEventsConfig(array $args = [])
 * @method null setCloudWatchLogsConfig(array $args = [])
 * @method null setMultiRegionCloudWatchLogsConfig(array $args = [])
 * @method null setCodeBuildConfig(array $args = [])
 * @method null setMultiRegionCodeBuildConfig(array $args = [])
 * @method null setCodeCommitConfig(array $args = [])
 * @method null setMultiRegionCodeCommitConfig(array $args = [])
 * @method null setCodeDeployConfig(array $args = [])
 * @method null setMultiRegionCodeDeployConfig(array $args = [])
 * @method null setCodePipelineConfig(array $args = [])
 * @method null setMultiRegionCodePipelineConfig(array $args = [])
 * @method null setCodeStarConfig(array $args = [])
 * @method null setMultiRegionCodeStarConfig(array $args = [])
 * @method null setCognitoIdentityConfig(array $args = [])
 * @method null setMultiRegionCognitoIdentityConfig(array $args = [])
 * @method null setCognitoIdentityProviderConfig(array $args = [])
 * @method null setMultiRegionCognitoIdentityProviderConfig(array $args = [])
 * @method null setCognitoSyncConfig(array $args = [])
 * @method null setMultiRegionCognitoSyncConfig(array $args = [])
 * @method null setComprehendConfig(array $args = [])
 * @method null setMultiRegionComprehendConfig(array $args = [])
 * @method null setConfigServiceConfig(array $args = [])
 * @method null setMultiRegionConfigServiceConfig(array $args = [])
 * @method null setConnectConfig(array $args = [])
 * @method null setMultiRegionConnectConfig(array $args = [])
 * @method null setCostExplorerConfig(array $args = [])
 * @method null setMultiRegionCostExplorerConfig(array $args = [])
 * @method null setCostandUsageReportServiceConfig(array $args = [])
 * @method null setMultiRegionCostandUsageReportServiceConfig(array $args = [])
 * @method null setDAXConfig(array $args = [])
 * @method null setMultiRegionDAXConfig(array $args = [])
 * @method null setDLMConfig(array $args = [])
 * @method null setMultiRegionDLMConfig(array $args = [])
 * @method null setDataPipelineConfig(array $args = [])
 * @method null setMultiRegionDataPipelineConfig(array $args = [])
 * @method null setDatabaseMigrationServiceConfig(array $args = [])
 * @method null setMultiRegionDatabaseMigrationServiceConfig(array $args = [])
 * @method null setDeviceFarmConfig(array $args = [])
 * @method null setMultiRegionDeviceFarmConfig(array $args = [])
 * @method null setDirectConnectConfig(array $args = [])
 * @method null setMultiRegionDirectConnectConfig(array $args = [])
 * @method null setDirectoryServiceConfig(array $args = [])
 * @method null setMultiRegionDirectoryServiceConfig(array $args = [])
 * @method null setDynamoDbConfig(array $args = [])
 * @method null setMultiRegionDynamoDbConfig(array $args = [])
 * @method null setDynamoDbStreamsConfig(array $args = [])
 * @method null setMultiRegionDynamoDbStreamsConfig(array $args = [])
 * @method null setEKSConfig(array $args = [])
 * @method null setMultiRegionEKSConfig(array $args = [])
 * @method null setEc2Config(array $args = [])
 * @method null setMultiRegionEc2Config(array $args = [])
 * @method null setEcrConfig(array $args = [])
 * @method null setMultiRegionEcrConfig(array $args = [])
 * @method null setEcsConfig(array $args = [])
 * @method null setMultiRegionEcsConfig(array $args = [])
 * @method null setEfsConfig(array $args = [])
 * @method null setMultiRegionEfsConfig(array $args = [])
 * @method null setElastiCacheConfig(array $args = [])
 * @method null setMultiRegionElastiCacheConfig(array $args = [])
 * @method null setElasticBeanstalkConfig(array $args = [])
 * @method null setMultiRegionElasticBeanstalkConfig(array $args = [])
 * @method null setElasticLoadBalancingConfig(array $args = [])
 * @method null setMultiRegionElasticLoadBalancingConfig(array $args = [])
 * @method null setElasticLoadBalancingV2Config(array $args = [])
 * @method null setMultiRegionElasticLoadBalancingV2Config(array $args = [])
 * @method null setElasticTranscoderConfig(array $args = [])
 * @method null setMultiRegionElasticTranscoderConfig(array $args = [])
 * @method null setElasticsearchServiceConfig(array $args = [])
 * @method null setMultiRegionElasticsearchServiceConfig(array $args = [])
 * @method null setEmrConfig(array $args = [])
 * @method null setMultiRegionEmrConfig(array $args = [])
 * @method null setFMSConfig(array $args = [])
 * @method null setMultiRegionFMSConfig(array $args = [])
 * @method null setFirehoseConfig(array $args = [])
 * @method null setMultiRegionFirehoseConfig(array $args = [])
 * @method null setGameLiftConfig(array $args = [])
 * @method null setMultiRegionGameLiftConfig(array $args = [])
 * @method null setGlacierConfig(array $args = [])
 * @method null setMultiRegionGlacierConfig(array $args = [])
 * @method null setGlueConfig(array $args = [])
 * @method null setMultiRegionGlueConfig(array $args = [])
 * @method null setGreengrassConfig(array $args = [])
 * @method null setMultiRegionGreengrassConfig(array $args = [])
 * @method null setGuardDutyConfig(array $args = [])
 * @method null setMultiRegionGuardDutyConfig(array $args = [])
 * @method null setHealthConfig(array $args = [])
 * @method null setMultiRegionHealthConfig(array $args = [])
 * @method null setIamConfig(array $args = [])
 * @method null setMultiRegionIamConfig(array $args = [])
 * @method null setImportExportConfig(array $args = [])
 * @method null setMultiRegionImportExportConfig(array $args = [])
 * @method null setInspectorConfig(array $args = [])
 * @method null setMultiRegionInspectorConfig(array $args = [])
 * @method null setIoT1ClickDevicesServiceConfig(array $args = [])
 * @method null setMultiRegionIoT1ClickDevicesServiceConfig(array $args = [])
 * @method null setIoT1ClickProjectsConfig(array $args = [])
 * @method null setMultiRegionIoT1ClickProjectsConfig(array $args = [])
 * @method null setIoTAnalyticsConfig(array $args = [])
 * @method null setMultiRegionIoTAnalyticsConfig(array $args = [])
 * @method null setIoTJobsDataPlaneConfig(array $args = [])
 * @method null setMultiRegionIoTJobsDataPlaneConfig(array $args = [])
 * @method null setIotConfig(array $args = [])
 * @method null setMultiRegionIotConfig(array $args = [])
 * @method null setIotDataPlaneConfig(array $args = [])
 * @method null setMultiRegionIotDataPlaneConfig(array $args = [])
 * @method null setKinesisConfig(array $args = [])
 * @method null setMultiRegionKinesisConfig(array $args = [])
 * @method null setKinesisAnalyticsConfig(array $args = [])
 * @method null setMultiRegionKinesisAnalyticsConfig(array $args = [])
 * @method null setKinesisVideoConfig(array $args = [])
 * @method null setMultiRegionKinesisVideoConfig(array $args = [])
 * @method null setKinesisVideoArchivedMediaConfig(array $args = [])
 * @method null setMultiRegionKinesisVideoArchivedMediaConfig(array $args = [])
 * @method null setKinesisVideoMediaConfig(array $args = [])
 * @method null setMultiRegionKinesisVideoMediaConfig(array $args = [])
 * @method null setKmsConfig(array $args = [])
 * @method null setMultiRegionKmsConfig(array $args = [])
 * @method null setLambdaConfig(array $args = [])
 * @method null setMultiRegionLambdaConfig(array $args = [])
 * @method null setLexModelBuildingServiceConfig(array $args = [])
 * @method null setMultiRegionLexModelBuildingServiceConfig(array $args = [])
 * @method null setLexRuntimeServiceConfig(array $args = [])
 * @method null setMultiRegionLexRuntimeServiceConfig(array $args = [])
 * @method null setLightsailConfig(array $args = [])
 * @method null setMultiRegionLightsailConfig(array $args = [])
 * @method null setMQConfig(array $args = [])
 * @method null setMultiRegionMQConfig(array $args = [])
 * @method null setMTurkConfig(array $args = [])
 * @method null setMultiRegionMTurkConfig(array $args = [])
 * @method null setMachineLearningConfig(array $args = [])
 * @method null setMultiRegionMachineLearningConfig(array $args = [])
 * @method null setMacieConfig(array $args = [])
 * @method null setMultiRegionMacieConfig(array $args = [])
 * @method null setMarketplaceCommerceAnalyticsConfig(array $args = [])
 * @method null setMultiRegionMarketplaceCommerceAnalyticsConfig(array $args = [])
 * @method null setMarketplaceEntitlementServiceConfig(array $args = [])
 * @method null setMultiRegionMarketplaceEntitlementServiceConfig(array $args = [])
 * @method null setMarketplaceMeteringConfig(array $args = [])
 * @method null setMultiRegionMarketplaceMeteringConfig(array $args = [])
 * @method null setMediaConvertConfig(array $args = [])
 * @method null setMultiRegionMediaConvertConfig(array $args = [])
 * @method null setMediaLiveConfig(array $args = [])
 * @method null setMultiRegionMediaLiveConfig(array $args = [])
 * @method null setMediaPackageConfig(array $args = [])
 * @method null setMultiRegionMediaPackageConfig(array $args = [])
 * @method null setMediaStoreConfig(array $args = [])
 * @method null setMultiRegionMediaStoreConfig(array $args = [])
 * @method null setMediaStoreDataConfig(array $args = [])
 * @method null setMultiRegionMediaStoreDataConfig(array $args = [])
 * @method null setMediaTailorConfig(array $args = [])
 * @method null setMultiRegionMediaTailorConfig(array $args = [])
 * @method null setMigrationHubConfig(array $args = [])
 * @method null setMultiRegionMigrationHubConfig(array $args = [])
 * @method null setMobileConfig(array $args = [])
 * @method null setMultiRegionMobileConfig(array $args = [])
 * @method null setNeptuneConfig(array $args = [])
 * @method null setMultiRegionNeptuneConfig(array $args = [])
 * @method null setOpsWorksConfig(array $args = [])
 * @method null setMultiRegionOpsWorksConfig(array $args = [])
 * @method null setOpsWorksCMConfig(array $args = [])
 * @method null setMultiRegionOpsWorksCMConfig(array $args = [])
 * @method null setOrganizationsConfig(array $args = [])
 * @method null setMultiRegionOrganizationsConfig(array $args = [])
 * @method null setPIConfig(array $args = [])
 * @method null setMultiRegionPIConfig(array $args = [])
 * @method null setPinpointConfig(array $args = [])
 * @method null setMultiRegionPinpointConfig(array $args = [])
 * @method null setPollyConfig(array $args = [])
 * @method null setMultiRegionPollyConfig(array $args = [])
 * @method null setPricingConfig(array $args = [])
 * @method null setMultiRegionPricingConfig(array $args = [])
 * @method null setRdsConfig(array $args = [])
 * @method null setMultiRegionRdsConfig(array $args = [])
 * @method null setRedshiftConfig(array $args = [])
 * @method null setMultiRegionRedshiftConfig(array $args = [])
 * @method null setRekognitionConfig(array $args = [])
 * @method null setMultiRegionRekognitionConfig(array $args = [])
 * @method null setResourceGroupsConfig(array $args = [])
 * @method null setMultiRegionResourceGroupsConfig(array $args = [])
 * @method null setResourceGroupsTaggingAPIConfig(array $args = [])
 * @method null setMultiRegionResourceGroupsTaggingAPIConfig(array $args = [])
 * @method null setRoute53Config(array $args = [])
 * @method null setMultiRegionRoute53Config(array $args = [])
 * @method null setRoute53DomainsConfig(array $args = [])
 * @method null setMultiRegionRoute53DomainsConfig(array $args = [])
 * @method null setS3Config(array $args = [])
 * @method null setMultiRegionS3Config(array $args = [])
 * @method null setSageMakerConfig(array $args = [])
 * @method null setMultiRegionSageMakerConfig(array $args = [])
 * @method null setSageMakerRuntimeConfig(array $args = [])
 * @method null setMultiRegionSageMakerRuntimeConfig(array $args = [])
 * @method null setSecretsManagerConfig(array $args = [])
 * @method null setMultiRegionSecretsManagerConfig(array $args = [])
 * @method null setServerlessApplicationRepositoryConfig(array $args = [])
 * @method null setMultiRegionServerlessApplicationRepositoryConfig(array $args = [])
 * @method null setServiceCatalogConfig(array $args = [])
 * @method null setMultiRegionServiceCatalogConfig(array $args = [])
 * @method null setServiceDiscoveryConfig(array $args = [])
 * @method null setMultiRegionServiceDiscoveryConfig(array $args = [])
 * @method null setSesConfig(array $args = [])
 * @method null setMultiRegionSesConfig(array $args = [])
 * @method null setSfnConfig(array $args = [])
 * @method null setMultiRegionSfnConfig(array $args = [])
 * @method null setShieldConfig(array $args = [])
 * @method null setMultiRegionShieldConfig(array $args = [])
 * @method null setSmsConfig(array $args = [])
 * @method null setMultiRegionSmsConfig(array $args = [])
 * @method null setSnowBallConfig(array $args = [])
 * @method null setMultiRegionSnowBallConfig(array $args = [])
 * @method null setSnsConfig(array $args = [])
 * @method null setMultiRegionSnsConfig(array $args = [])
 * @method null setSqsConfig(array $args = [])
 * @method null setMultiRegionSqsConfig(array $args = [])
 * @method null setSsmConfig(array $args = [])
 * @method null setMultiRegionSsmConfig(array $args = [])
 * @method null setStorageGatewayConfig(array $args = [])
 * @method null setMultiRegionStorageGatewayConfig(array $args = [])
 * @method null setStsConfig(array $args = [])
 * @method null setMultiRegionStsConfig(array $args = [])
 * @method null setSupportConfig(array $args = [])
 * @method null setMultiRegionSupportConfig(array $args = [])
 * @method null setSwfConfig(array $args = [])
 * @method null setMultiRegionSwfConfig(array $args = [])
 * @method null setTranscribeServiceConfig(array $args = [])
 * @method null setMultiRegionTranscribeServiceConfig(array $args = [])
 * @method null setTranslateConfig(array $args = [])
 * @method null setMultiRegionTranslateConfig(array $args = [])
 * @method null setWafConfig(array $args = [])
 * @method null setMultiRegionWafConfig(array $args = [])
 * @method null setWafRegionalConfig(array $args = [])
 * @method null setMultiRegionWafRegionalConfig(array $args = [])
 * @method null setWorkDocsConfig(array $args = [])
 * @method null setMultiRegionWorkDocsConfig(array $args = [])
 * @method null setWorkMailConfig(array $args = [])
 * @method null setMultiRegionWorkMailConfig(array $args = [])
 * @method null setWorkSpacesConfig(array $args = [])
 * @method null setMultiRegionWorkSpacesConfig(array $args = [])
 * @method null setXRayConfig(array $args = [])
 * @method null setMultiRegionXRayConfig(array $args = [])
 */
class AwsSdk extends CComponent
{
    /** @var array  */
    private $_defaultSharedConfig=array(
        'region'  => 'us-east-2',
        'version' => 'latest',
        'credentials' => [ //you can use a different method to grant access
            'key' => 'your-aws-key',
            'secret' => 'your-aws-secret',
        ],
    );
    /** @var array  */
    public $sharedConfig=array();
    /** @var array  */
    private $_defaultServiceConfig=array(
        'S3'=>array(),
    );
    /** @var array  */
    public $serviceConfig=array();

    /** @var  Sdk */
    protected $_sdk;

    /**
     * @param array $options
     * @return \Aws\Credentials\Credentials
     */
    public function getCredentials($options){
        $key=null;
        $secret=null;

        if(key_exists('credentials',$options)){
            if (key_exists('key',$options['credentials']))
                $key=$options['credentials']['key'];

            if (key_exists('key',$options['credentials']))
                $secret=$options['credentials']['secret'];

        }
        return (is_null($key)|| is_null($secret))?null:new Aws\Credentials\Credentials($key, $secret);
    }

    /**
     * @return array
     */
    public function getSharedConfig(){
        /**
         * TODO recursive merge...
         */
        $this->sharedConfig=array_merge($this->_defaultSharedConfig,$this->sharedConfig);
        return $this->sharedConfig;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setSharedConfig($options){
        $this->sharedConfig=$options;
        return $this;
    }

    /**
     * @param string $service_name
     * @return array|mixed
     */
    public function getServiceConfig($service_name){
        $defaultOptions=array();
        $customOptions=array();

        if(key_exists($service_name,$this->_defaultServiceConfig))
            $defaultOptions=$this->_defaultServiceConfig[$service_name];

        if(key_exists($service_name,$this->serviceConfig))
            $customOptions=$this->serviceConfig[$service_name];

        $options=array_merge($defaultOptions,$customOptions);
        return $options;
    }


    /**
     * @param string $service_name
     * @param array $options
     * @return $this
     */
    public function setServiceConfig($service_name,$options){
        $this->serviceConfig[$service_name]=$options;
        return $this;
    }


    /**
     * @return Sdk
     */
    public function getSdk(){
        if(false == ($this->_sdk instanceof Sdk)) {
            $options=$this->getSharedConfig();
            if(key_exists('credentials',$options) and is_array($options['credentials']))
                $options['credentials']=$this->getCredentials($options);

            $this->_sdk = new Sdk($options);
        }
        return $this->_sdk;
    }

    /**
     * @param $service_name
     * @param array $options
     * @return mixed|null
     */
    private function createClient($service_name,$options=array()){

        $method=null;
        $method='create'.$service_name;
        if(empty($options))
            $options=$this->getServiceConfig($service_name);

        if(key_exists('credentials',$options) and is_array($options['credentials']))
            $options['credentials']=$this->getCredentials($options);

        if(key_exists('endpoint',$options) and is_array($options['endpoint']))
            $options['endpoint']=$this->getCustomEndPoint($options);


        if(!is_null($method)){
            return call_user_func(array($this->getSdk(),$method),$options);
        }
        return null;

    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if(preg_match('/^create(?P<service_name>.*)/',$name,$matches)){
            if(key_exists('service_name',$matches)) {
                return call_user_func(array($this, 'createClient'), $matches['service_name'], $arguments);
            }

        }

        if(preg_match('/^set(?P<service_name>.*)Config/',$name,$matches)) {
            if (key_exists('service_name', $matches)) {
                return call_user_func(array($this, 'setServiceConfig'), $matches['service_name'], $arguments);
            }
        }
    }


}