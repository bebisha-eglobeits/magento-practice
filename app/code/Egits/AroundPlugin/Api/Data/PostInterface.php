<?php

namespace  Egits\AroundPlugin\Api\Data;
interface PostInterface
{
    
    const ID = 'id';
    const Email_ID = 'emailid';
    const Count = 'count';
    const Status = 'status';



    
    /**
     * Get ID.
     *
     * @return string|null
     */


    public function getId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \Egits\AroundPlugin\Api\Data\PostInterface
     */
    public function setId($id);

    /**
     * Get emailid.
     *
     * @return string|null
     */
    public function getEmailid();

    /**
     * Set emailid.
     *
     * @param string $emailid
     *
     * @return \Egits\AroundPlugin\Api\Data\PostInterface
     */
    public function setEmailid($emailid);

    /**
     * Get count.
     *
     * @return string|null
     */
    public function getCount();

    /**
     * Set count.
     *
     * @param string $count
     *
     * @return \Egits\AroundPlugin\Api\Data\PostInterface
     */
    public function setCount($count);

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getstatus();

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return \Egits\AroundPlugin\Api\Data\PostInterface
     */
    public function setstatus($status);
}
