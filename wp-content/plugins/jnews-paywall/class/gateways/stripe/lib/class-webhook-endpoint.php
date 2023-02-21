<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class WebhookEndpoint
 *
 * @property string $id
 * @property string $object
 * @property string|null $api_version
 * @property string|null $application
 * @property int $created
 * @property string[] $enabled_events
 * @property bool $livemode
 * @property string $secret
 * @property string $status
 * @property string $url
 *
 * @package Stripe
 */
class Webhook_Endpoint extends Api_Resource {

	const OBJECT_NAME = 'webhook_endpoint';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Delete;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
