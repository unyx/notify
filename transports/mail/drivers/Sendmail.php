<?php namespace nyx\notify\transports\mail\drivers;

// Internal dependencies
use nyx\notify\transports\mail;

/**
 * Sendmail Mail Driver
 *
 * @package     Nyx\Notify
 * @version     0.1.0
 * @author      Michal Chojnacki <m.chojnacki@muyo.io>
 * @copyright   2012-2017 Nyx Dev Team
 * @link        https://github.com/unyx/nyx
 */
class Sendmail extends \Swift_SendmailTransport implements mail\interfaces\drivers\Process
{

}
