<?php

namespace JNews\Paywall\Gateways\Stripe\Lib\Reporting;

use JNews\Paywall\Gateways\Stripe\Lib\Api_Resource;
use JNews\Paywall\Gateways\Stripe\Lib\Api_Operations;

/**
 * Class ReportType
 *
 * @property string $id
 * @property string $object
 * @property int $data_available_end
 * @property int $data_available_start
 * @property string[]|null $default_columns
 * @property string $name
 * @property int $updated
 * @property int $version
 *
 * @package Stripe\Reporting
 */
class Report_Type extends Api_Resource {

	const OBJECT_NAME = 'reporting.report_type';

	use Api_Operations\All;
	use Api_Operations\Retrieve;
}
