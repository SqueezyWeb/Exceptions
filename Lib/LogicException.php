<?php
/**
 * LogicException class file.
 *
 * @package Freyja\Exceptions
 * @copyright 2016 SqueezyWeb
 * @since 2.0.0
 */

namespace Freyja\Exceptions;

/**
 * Exception that represents error in the program logic. This kind of exception
 * should lead directly to a fix in the code.
 *
 * @package Freyja\Exceptions
 * @author Mattia Migliorini <mattia@squeezyweb.com>
 * @since 2.0.0
 * @version 1.0.0
 */
class LogicException extends \LogicException implements ExceptionInterface {

}
