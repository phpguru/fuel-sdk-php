<?php

namespace FuelSdk;
/**
 * This class represents the base object for SOAP operation.
 */
class ET_BaseObject
{
    /**
     * @var      ET_Client   The ET client object which performs the auth token, refresh token using clientID clientSecret
     */
    public $authStub;
    /**
     * @var      array       Dictionary type array which may hold e.g. array('id' => '', 'key' => '')
     */
    public $props;
    /**
     * @var array      Dictionary type array which may hold e.g. array("Property"=>"", "SimpleOperator"=>"","Value"=>"")
     */
    public $filter;
    /**
     * @var      string      Organization Identifier.
     */
    public $organizationId;
    /**
     * @var      string      Organization Key.
     */
    public $organizationKey;
    /**
     * @var      string      Object name, e.g. "ImportDefinition", "DataExtension", etc
     */
    protected $obj;
    /**
     * @var      string      last Request identifier.
     */
    protected $lastRequestID;
}
