<?php

namespace JNews\Paywall\Gateways\Stripe\Lib;

/**
 * Class FileLink
 *
 * @property string $id
 * @property string $object
 * @property int $created
 * @property bool $expired
 * @property int|null $expires_at
 * @property string $file
 * @property bool $livemode
 * @property \Stripe\StripeObject $metadata
 * @property string|null $url
 *
 * @package Stripe
 */
class File_Link extends Api_Resource {

	const OBJECT_NAME = 'file_link';

	use Api_Operations\All;
	use Api_Operations\Create;
	use Api_Operations\Retrieve;
	use Api_Operations\Update;
}
