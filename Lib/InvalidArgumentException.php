<?php
/**
 * InvalidArgumentException class file.
 *
 * @package Freyja\Exceptions
 * @copyright 2016 SqueezyWeb
 * @since 1.0.0
 */

namespace Freyja\Exceptions;

/**
 * InvalidArgumentException class.
 *
 * @package Freyja\Exceptions
 * @author Gianluca Merlo <gianluca@squeezyweb.com>
 * @since 2.0.0 Changed namespace
 * @since 1.0.0
 * @version 2.0.0
 */
class InvalidArgumentException extends \InvalidArgumentException {
  /**
   * Create an exception with the explanation of the error.
   *
   * @since 1.0.0
   * @access public
   * @static
   *
   * @param string $name Name of the argument.
   * @param mixed $var Argument.
   * @param string $expected_type The expected type of the argument.
   * @return static
   */
  public static function typeMismatch($name, $var, $expected_type) {
    $message = sprintf(
      'Wrong type for argument %1s. %2s expected, %3s given instead.',
      $name,
      $expected_type,
      gettype($var)
    );
    return new static($message);
  }
}
