<?php
/**
 * The CNAM endpoint.
 *
 * @link https://github.com/PortaText/docs/wiki/REST-API#api_cnam CNAM endpoint.
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 * @author Marcelo Gornstein <marcelog@portatext.com>
 * @copyright 2015 PortaText
 */
namespace PortaText\Command\Api;

use PortaText\Command\Base;

/**
 * The CNAM endpoint.
 */
class Cnam extends Base
{
    /**
     * Asks for CNAM info for the specific number.
     *
     * @param string $number The number for which to get the caller id name.
     *
     * @return PortaText\Command\ICommand
     */
    public function forNumber($number)
    {
        return $this->setArgument('id', $number);
    }

    /**
     * Returns a string with the endpoint for the given command.
     *
     * @param string $method Method for this command.
     *
     * @return string
     */
    protected function getEndpoint($method)
    {
        $number = $this->getArgument("id");
        if (is_null($number)) {
            throw new \InvalidArgumentException("DID number cant be null");
        }
        $this->delArgument("id");
        return "cnam/$number";
    }
}
