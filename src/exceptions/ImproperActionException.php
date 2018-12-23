<?php
/**
 * \Elabftw\Exceptions\ImproperActionException
 *
 * @package   Elabftw\Elabftw
 * @author    Nicolas CARPi <nicolas.carpi@curie.fr>
 * @copyright 2012 Nicolas CARPi
 * @license   https://www.gnu.org/licenses/agpl-3.0.html AGPL-3.0
 * @see       https://www.elabftw.net Official website
 */
declare(strict_types=1);

namespace Elabftw\Exceptions;

use Exception;

/**
 * For errors that make the execution halt but can happen and are not malicious
 */
class ImproperActionException extends Exception
{
    /**
     * Redefine the exception so message isn't optional
     *
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Custom string representation of object
     */
    public function __toString() {
        return $this->message;
    }
}