<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Avro\CsvBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Row added event
 *
 * @author Joris de Wit <joris.w.dewit@gmail.com>
 */
class RowAddedEvent extends Event
{
    protected $object;
    protected $row;
    protected $fields;

    /**
     *  Constructor
     *
     * @param DoctrineObject $object The new object being persisted
     * @param array          $row    The row being imported
     *
     * @return void
     */
    public function __construct($object, array $row)
    {
        $this->setObject($object);
        $this->setRow($row);
        $this->setFields($row);
    }

    /**
     * Set object
     *
     * @param object $object object
     *
     * @return object
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get the doctrine object
     *
     * @return DoctrineObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set row
     *
     * @param array $row row
     *
     * @return object
     */
    public function setRow($row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get field row
     *
     * @return array
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Get value of column
     *
     * @param string $name name
     *
     * @return value
     */
    public function getValue($name)
    {
        return $this->row[$name];
    }

    /**
     * Set mapped fields
     *
     * @param array $row row
     *
     * @return object
     */
    public function setFields($row)
    {
        $this->fields = array_keys($row);

        return $this;
    }

    /**
     * Get mapped fields
     *
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }
}
